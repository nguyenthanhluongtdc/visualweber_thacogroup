<?php

namespace Platform\InvestorRelations\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\InvestorRelations\Http\Requests\InvestorRelationsRequest;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\InvestorRelations\Tables\InvestorRelationsTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\InvestorRelations\Forms\InvestorRelationsForm;
use Platform\Base\Forms\FormBuilder;

class InvestorRelationsController extends BaseController
{
    /**
     * @var InvestorRelationsInterface
     */ 
    protected $investorRelationsRepository;

    /**
     * @param InvestorRelationsInterface $investorRelationsRepository
     */
    public function __construct(InvestorRelationsInterface $investorRelationsRepository)
    {
        $this->investorRelationsRepository = $investorRelationsRepository;
    }

    /**
     * @param InvestorRelationsTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */ 
    public function index(InvestorRelationsTable $table)
    {
        page_title()->setTitle(trans('plugins/investor-relations::investor-relations.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/investor-relations::investor-relations.create'));

        return $formBuilder->create(InvestorRelationsForm::class)->renderForm();
    }

    /**
     * @param InvestorRelationsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(InvestorRelationsRequest $request, BaseHttpResponse $response)
    {
        $investorRelations = $this->investorRelationsRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(INVESTOR_RELATIONS_MODULE_SCREEN_NAME, $request, $investorRelations));

        return $response
            ->setPreviousUrl(route('investor-relations.index'))
            ->setNextUrl(route('investor-relations.edit', $investorRelations->id))
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
        $investorRelations = $this->investorRelationsRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $investorRelations));

        page_title()->setTitle(trans('plugins/investor-relations::investor-relations.edit') . ' "' . $investorRelations->name . '"');

        return $formBuilder->create(InvestorRelationsForm::class, ['model' => $investorRelations])->renderForm();
    }

    /**
     * @param int $id
     * @param InvestorRelationsRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, InvestorRelationsRequest $request, BaseHttpResponse $response)
    {
        $investorRelations = $this->investorRelationsRepository->findOrFail($id);

        $investorRelations->fill($request->input());

        $investorRelations = $this->investorRelationsRepository->createOrUpdate($investorRelations);

        event(new UpdatedContentEvent(INVESTOR_RELATIONS_MODULE_SCREEN_NAME, $request, $investorRelations));

        return $response
            ->setPreviousUrl(route('investor-relations.index'))
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
            $investorRelations = $this->investorRelationsRepository->findOrFail($id);

            $this->investorRelationsRepository->delete($investorRelations);

            event(new DeletedContentEvent(INVESTOR_RELATIONS_MODULE_SCREEN_NAME, $request, $investorRelations));

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
            $investorRelations = $this->investorRelationsRepository->findOrFail($id);
            $this->investorRelationsRepository->delete($investorRelations);
            event(new DeletedContentEvent(INVESTOR_RELATIONS_MODULE_SCREEN_NAME, $request, $investorRelations));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
