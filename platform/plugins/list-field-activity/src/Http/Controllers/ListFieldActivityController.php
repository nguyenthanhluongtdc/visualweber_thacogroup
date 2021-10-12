<?php

namespace Platform\ListFieldActivity\Http\Controllers;

use Platform\Base\Events\BeforeEditContentEvent;
use Platform\ListFieldActivity\Http\Requests\ListFieldActivityRequest;
use Platform\ListFieldActivity\Repositories\Interfaces\ListFieldActivityInterface;
use Platform\Base\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Exception;
use Platform\ListFieldActivity\Tables\ListFieldActivityTable;
use Platform\Base\Events\CreatedContentEvent;
use Platform\Base\Events\DeletedContentEvent;
use Platform\Base\Events\UpdatedContentEvent;
use Platform\Base\Http\Responses\BaseHttpResponse;
use Platform\ListFieldActivity\Forms\ListFieldActivityForm;
use Platform\Base\Forms\FormBuilder;

class ListFieldActivityController extends BaseController
{
    /**
     * @var ListFieldActivityInterface
     */
    protected $listFieldActivityRepository;

    /**
     * @param ListFieldActivityInterface $listFieldActivityRepository
     */
    public function __construct(ListFieldActivityInterface $listFieldActivityRepository)
    {
        $this->listFieldActivityRepository = $listFieldActivityRepository;
    }

    /**
     * @param ListFieldActivityTable $table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function index(ListFieldActivityTable $table)
    {
        page_title()->setTitle(trans('plugins/list-field-activity::list-field-activity.name'));

        return $table->renderTable();
    } 

    /**
     * @param FormBuilder $formBuilder
     * @return string
     */
    public function create(FormBuilder $formBuilder)
    {
        page_title()->setTitle(trans('plugins/list-field-activity::list-field-activity.create'));

        return $formBuilder->create(ListFieldActivityForm::class)->renderForm();
    }

    /**
     * @param ListFieldActivityRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function store(ListFieldActivityRequest $request, BaseHttpResponse $response)
    {
        $listFieldActivity = $this->listFieldActivityRepository->createOrUpdate($request->input());

        event(new CreatedContentEvent(LIST_FIELD_ACTIVITY_MODULE_SCREEN_NAME, $request, $listFieldActivity));

        return $response
            ->setPreviousUrl(route('list-field-activity.index'))
            ->setNextUrl(route('list-field-activity.edit', $listFieldActivity->id))
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
        $listFieldActivity = $this->listFieldActivityRepository->findOrFail($id);

        event(new BeforeEditContentEvent($request, $listFieldActivity));

        page_title()->setTitle(trans('plugins/list-field-activity::list-field-activity.edit') . ' "' . $listFieldActivity->name . '"');

        return $formBuilder->create(ListFieldActivityForm::class, ['model' => $listFieldActivity])->renderForm();
    }

    /**
     * @param int $id
     * @param ListFieldActivityRequest $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse
     */
    public function update($id, ListFieldActivityRequest $request, BaseHttpResponse $response)
    {
        $listFieldActivity = $this->listFieldActivityRepository->findOrFail($id);

        $listFieldActivity->fill($request->input());

        $listFieldActivity = $this->listFieldActivityRepository->createOrUpdate($listFieldActivity);

        event(new UpdatedContentEvent(LIST_FIELD_ACTIVITY_MODULE_SCREEN_NAME, $request, $listFieldActivity));

        return $response
            ->setPreviousUrl(route('list-field-activity.index'))
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
            $listFieldActivity = $this->listFieldActivityRepository->findOrFail($id);

            $this->listFieldActivityRepository->delete($listFieldActivity);

            event(new DeletedContentEvent(LIST_FIELD_ACTIVITY_MODULE_SCREEN_NAME, $request, $listFieldActivity));

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
            $listFieldActivity = $this->listFieldActivityRepository->findOrFail($id);
            $this->listFieldActivityRepository->delete($listFieldActivity);
            event(new DeletedContentEvent(LIST_FIELD_ACTIVITY_MODULE_SCREEN_NAME, $request, $listFieldActivity));
        }

        return $response->setMessage(trans('core/base::notices.delete_success_message'));
    }
}
