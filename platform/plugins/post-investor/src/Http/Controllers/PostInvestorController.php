<?php

namespace Platform\PostInvestor\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\PostInvestor\Http\Requests\PostInvestorRequest;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\PostInvestor\Tables\PostInvestorTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\PostInvestor\Forms\PostInvestorForm;
use Platform\Base\Forms\FormBuilder;

class PostInvestorController extends BaseController
{
    /**
     * @var PostInvestorInterface
     */
    protected $postInvestorRepository;

    /**
     * @param PostInvestorInterface $postInvestorRepository
     */
    public function __construct(PostInvestorInterface $postInvestorRepository)
    {
        $this->postInvestorRepository = $postInvestorRepository;
    }

    /**
     * @param PostInvestorTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(PostInvestorTable $table)
    {
        page_title()->setTitle(trans('plugins/post-investor::post-investor.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/post-investor::post-investor.create'));

        return $formBuilder->create(PostInvestorForm::class)->renderForm();
    }

    /**
     * @param PostInvestorRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(PostInvestorRequest $request, BaseHttpResponse $response)
    {
        $postInvestor = $this->postInvestorRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(POST_INVESTOR_MODULE_SCREEN_NAME, $request, $postInvestor));

        $categories = $request->input('categories');
        if (!empty($categories) && is_array($categories)) {
            $postInvestor->categories()->sync($categories);
        }

        return $response
            ->setPreviousUrl(route('post-investor.index'))
            ->setNextUrl(route('post-investor.edit', $postInvestor->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function edit($id, FormBuilder $formBuilder, Request $request)
    {
        $postInvestor = $this->postInvestorRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $postInvestor));

        page_title()->setTitle(trans('plugins/post-investor::post-investor.edit') . ' "' . $postInvestor->name . '"');

        return $formBuilder->create(PostInvestorForm::class, ['model' => $postInvestor])->renderForm();
    }

    /**
     * @param int $id
     * @param PostInvestorRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, PostInvestorRequest $request, BaseHttpResponse $response)
    {
        $postInvestor = $this->postInvestorRepository->findOrFail($id);

        $postInvestor->fill($request->input());

        $postInvestor = $this->postInvestorRepository->createOrUpdate($postInvestor);

        event(new UpdatedContentEvent(POST_INVESTOR_MODULE_SCREEN_NAME, $request, $postInvestor));


        $categories = $request->input('categories');
        
        if (!empty($categories) && is_array($categories)) {
            $postInvestor->categories()->sync($categories);
        }

        return $response
            ->setPreviousUrl(route('post-investor.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    /**
     * @param int $id
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function destroy(Request $request, $id, BaseHttpResponse $response)
    {
        try {
            $postInvestor = $this->postInvestorRepository->findOrFail($id);

            $this->postInvestorRepository->delete($postInvestor);

            event(new DeletedContentEvent(POST_INVESTOR_MODULE_SCREEN_NAME, $request, $postInvestor));

            return $response->setMessage(trans('core/base::notices.delete_success_message'));
        } catch (Exception $exception) {
            return $response
                ->setError()
                ->setMessage($exception->getMessage());
        }
    }

    /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     * @throws Exception
     */
    public function deletes(Request $request, BaseHttpResponse $response)
    {
        $ids = $request->input('ids');
        if (empty($ids)) {
            return $response
                ->setError()
                ->setMessage(trans('core/base::notices.no_select'));
        }

        foreach ($ids as $id) {
            $postInvestor = $this->postInvestorRepository->findOrFail($id);
            $this->postInvestorRepository->delete($postInvestor);
            event(new DeletedContentEvent(POST_INVESTOR_MODULE_SCREEN_NAME, $request, $postInvestor));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
