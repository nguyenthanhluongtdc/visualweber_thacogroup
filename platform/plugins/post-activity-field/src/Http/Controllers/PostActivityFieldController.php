<?php

namespace Platform\PostActivityField\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\PostActivityField\Http\Requests\PostActivityFieldRequest;
use Platform\PostActivityField\Repositories\Interfaces\PostActivityFieldInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\PostActivityField\Tables\PostActivityFieldTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\PostActivityField\Forms\PostActivityFieldForm;
use Platform\Base\Forms\FormBuilder;

class PostActivityFieldController extends BaseController
{
    /**
     * @var PostActivityFieldInterface
     */
    protected $postActivityFieldRepository;

    /**
     * @param PostActivityFieldInterface $postActivityFieldRepository
     */
    public function __construct(PostActivityFieldInterface $postActivityFieldRepository)
    {
        $this->postActivityFieldRepository = $postActivityFieldRepository;
    } 

    /**
     * @param PostActivityFieldTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(PostActivityFieldTable $table)
    {
        page_title()->setTitle(trans('plugins/post-activity-field::post-activity-field.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/post-activity-field::post-activity-field.create'));

        return $formBuilder->create(PostActivityFieldForm::class)->renderForm();
    }

    /**
     * @param PostActivityFieldRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(PostActivityFieldRequest $request, BaseHttpResponse $response)
    {
        $postActivityField = $this->postActivityFieldRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(POST_ACTIVITY_FIELD_MODULE_SCREEN_NAME, $request, $postActivityField));

        return $response
            ->setPreviousUrl(route('post-activity-field.index'))
            ->setNextUrl(route('post-activity-field.edit', $postActivityField->id))
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
        $postActivityField = $this->postActivityFieldRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $postActivityField));

        page_title()->setTitle(trans('plugins/post-activity-field::post-activity-field.edit') . ' "' . $postActivityField->name . '"');

        return $formBuilder->create(PostActivityFieldForm::class, ['model' => $postActivityField])->renderForm();
    }

    /**
     * @param int $id
     * @param PostActivityFieldRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, PostActivityFieldRequest $request, BaseHttpResponse $response)
    {
        $postActivityField = $this->postActivityFieldRepository->findOrFail($id);

        $postActivityField->fill($request->input());

        $postActivityField = $this->postActivityFieldRepository->createOrUpdate($postActivityField);

        event(new UpdatedContentEvent(POST_ACTIVITY_FIELD_MODULE_SCREEN_NAME, $request, $postActivityField));

        return $response
            ->setPreviousUrl(route('post-activity-field.index'))
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
            $postActivityField = $this->postActivityFieldRepository->findOrFail($id);

            $this->postActivityFieldRepository->delete($postActivityField);

            event(new DeletedContentEvent(POST_ACTIVITY_FIELD_MODULE_SCREEN_NAME, $request, $postActivityField));

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
            $postActivityField = $this->postActivityFieldRepository->findOrFail($id);
            $this->postActivityFieldRepository->delete($postActivityField);
            event(new DeletedContentEvent(POST_ACTIVITY_FIELD_MODULE_SCREEN_NAME, $request, $postActivityField));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }

    public function getFieldActivities(Request $request){
       
        try {
            $categoryId = $request->categoryId;

            $allRequest = $request->toArray();

            //remove all url params
            foreach($allRequest as $key => $value) {
                $request->request->remove($key);
            }

            //get category by id 
            
            $category = app(ListFieldActivityInterface::class)
            ->getFirstBy(['id' => $categoryId], ['*'], ['slugable']);

            if(!$category->slug) {
                abort(404); 
            }

            $data = app(PostActivityFieldInterface::class)->getByCategory($category->id, theme_option('number_post_lvhd'));

            $data->withPath($category->url);

            Theme::breadcrumb()
            ->add(__('Home'), route('public.index'));

            if($category->parent->id) {
                Theme::breadcrumb()->add($category->parent->name, $category->parent->url);
            }

            Theme::breadcrumb()->add($category->name, $category->url);


            $view = 'templates/'.$category->template;

            $html = Theme::partial($view, compact('data','category'));

            return response()->json(
                [
                    'html' => $html,
                    'url'  => $category->url,
                ],
                200
            );

        } catch (\Throwable $th) {
         
        }
    }
}
