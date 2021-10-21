<?php

namespace Platform\PostInvestor\Tables;

use Illuminate\Support\Facades\Auth;
use BaseHelper;
use App\Models\User;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;
use Platform\Table\Abstracts\TableAbstract;
use Illuminate\Contracts\Routing\UrlGenerator;
use Yajra\DataTables\DataTables;
use Html;

class PostInvestorTable extends TableAbstract
{

    /**
     * @var bool
     */
    protected $hasActions = true;

    /**
     * @var bool
     */
    protected $hasFilter = true;

    /**
     * PostInvestorTable constructor.
     * @param DataTables $table
     * @param UrlGenerator $urlGenerator
     * @param PostInvestorInterface $postInvestorRepository
     */
    public function __construct(DataTables $table, UrlGenerator $urlGenerator, PostInvestorInterface $postInvestorRepository)
    {
        parent::__construct($table, $urlGenerator);

        $this->repository = $postInvestorRepository;

        if (!Auth::user()->hasAnyPermission(['post-investor.edit', 'post-investor.destroy'])) {
            $this->hasOperations = false;
            $this->hasActions = false;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function ajax()
    {
        $data = $this->table
            ->eloquent($this->query())
            ->editColumn('name', function ($item) {
                if (!Auth::user()->hasPermission('post-investor.edit')) {
                    return $item->name;
                }
                return Html::link(route('post-investor.edit', $item->id), $item->name);
            })
            ->editColumn('checkbox', function ($item) {
                return $this->getCheckbox($item->id);
            })
            ->editColumn('created_at', function ($item) {
                return BaseHelper::formatDate($item->created_at);
            })
            ->editColumn('status', function ($item) {
                return $item->status->toHtml();
            })
            ->addColumn('operations', function ($item) {
                return $this->getOperations('post-investor.edit', 'post-investor.destroy', $item);
            });

        return $this->toJson($data);
    }

    /**
     * {@inheritDoc}
     */
    public function query()
    {
        $query = $this->repository->getModel()
            ->select([
               'id',
               'name',
               'created_at',
               'status',
           ]);
           
        if(Auth::user()->hasPermission('posts.current')) {
            $query
                ->whereAuthorType(get_class(Auth::user()))
                ->whereAuthorId(Auth::id());
        }

        return $this->applyScopes($query);
    }

    /**
     * {@inheritDoc}
     */
    public function columns()
    {
        return [
            'id' => [
                'title' => trans('core/base::tables.id'),
                'width' => '20px',
            ],
            'name' => [
                'title' => trans('core/base::tables.name'),
                'class' => 'text-left',
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'width' => '100px',
            ],
            'status' => [
                'title' => trans('core/base::tables.status'),
                'width' => '100px',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function buttons()
    {
        return $this->addCreateButton(route('post-investor.create'), 'post-investor.create');
    }

    /**
     * {@inheritDoc}
     */
    public function bulkActions(): array
    {
        return $this->addDeleteAction(route('post-investor.deletes'), 'post-investor.destroy', parent::bulkActions());
    }

    /**
     * {@inheritDoc}
     */
    public function getBulkChanges(): array
    {
        return [
            'name' => [
                'title'    => trans('core/base::tables.name'),
                'type'     => 'text',
                'validate' => 'required|max:120',
            ],
            'status' => [
                'title'    => trans('core/base::tables.status'),
                'type'     => 'select',
                'choices'  => BaseStatusEnum::labels(),
                'validate' => 'required|in:' . implode(',', BaseStatusEnum::values()),
            ],
            'created_at' => [
                'title' => trans('core/base::tables.created_at'),
                'type'  => 'date',
            ],
        ];
    }

    /**
     * @return array
     */
    public function getFilters(): array
    {
        return $this->getBulkChanges();
    }
}
