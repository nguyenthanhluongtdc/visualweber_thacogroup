<?php

namespace Platform\TradeAndServices\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\TradeAndServices\Http\Requests\TradeAndServicesRequest;
use Platform\TradeAndServices\Repositories\Interfaces\TradeAndServicesInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\TradeAndServices\Tables\TradeAndServicesTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\TradeAndServices\Forms\TradeAndServicesForm;
use Platform\Base\Forms\FormBuilder;

class TradeAndServicesController extends BaseController
{
    /**
     * @var TradeAndServicesInterface
     */
    protected $tradeAndServicesRepository;

    /**
     * @param TradeAndServicesInterface $tradeAndServicesRepository
     */
    public function __construct(TradeAndServicesInterface $tradeAndServicesRepository)
    {
        $this->tradeAndServicesRepository = $tradeAndServicesRepository;
    }

    /**
     * @param TradeAndServicesTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(TradeAndServicesTable $table)
    {
        page_title()->setTitle(trans('plugins/trade-and-services::trade-and-services.name'));

        return $table->renderTable();
    }

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/trade-and-services::trade-and-services.create'));

        return $formBuilder->create(TradeAndServicesForm::class)->renderForm();
    }

    /**
     * @param TradeAndServicesRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(TradeAndServicesRequest $request, BaseHttpResponse $response)
    {
        $tradeAndServices = $this->tradeAndServicesRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(TRADE_AND_SERVICES_MODULE_SCREEN_NAME, $request, $tradeAndServices));

        return $response
            ->setPreviousUrl(route('trade-and-services.index'))
            ->setNextUrl(route('trade-and-services.edit', $tradeAndServices->id))
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
        $tradeAndServices = $this->tradeAndServicesRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $tradeAndServices));

        page_title()->setTitle(trans('plugins/trade-and-services::trade-and-services.edit') . ' "' . $tradeAndServices->name . '"');

        return $formBuilder->create(TradeAndServicesForm::class, ['model' => $tradeAndServices])->renderForm();
    }

    /**
     * @param int $id
     * @param TradeAndServicesRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, TradeAndServicesRequest $request, BaseHttpResponse $response)
    {
        $tradeAndServices = $this->tradeAndServicesRepository->findOrFail($id);

        $tradeAndServices->fill($request->input());

        $tradeAndServices = $this->tradeAndServicesRepository->createOrUpdate($tradeAndServices);

        event(new UpdatedContentEvent(TRADE_AND_SERVICES_MODULE_SCREEN_NAME, $request, $tradeAndServices));

        return $response
            ->setPreviousUrl(route('trade-and-services.index'))
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
            $tradeAndServices = $this->tradeAndServicesRepository->findOrFail($id);

            $this->tradeAndServicesRepository->delete($tradeAndServices);

            event(new DeletedContentEvent(TRADE_AND_SERVICES_MODULE_SCREEN_NAME, $request, $tradeAndServices));

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
            $tradeAndServices = $this->tradeAndServicesRepository->findOrFail($id);
            $this->tradeAndServicesRepository->delete($tradeAndServices);
            event(new DeletedContentEvent(TRADE_AND_SERVICES_MODULE_SCREEN_NAME, $request, $tradeAndServices));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
