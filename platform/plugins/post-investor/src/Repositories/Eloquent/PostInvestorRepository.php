<?php

namespace Platform\PostInvestor\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;

class PostInvestorRepository extends RepositoriesAbstract implements PostInvestorInterface
{
    public function getByCategory($categoryId, $paginate = 6, $limit = 0)
    {
        if (!is_array($categoryId)) {
            $categoryId = [$categoryId];
        }

        $data = $this->model
            ->whereHas('categories', function ($query) use ($categoryId) {
                $query->whereIn('app_investor_relations.id', $categoryId);
            });

        if ($paginate != 0) {
            return $this->applyBeforeExecuteQuery($data)->paginate($paginate);
        }

        return $this->applyBeforeExecuteQuery($data)->limit($limit)->get();
    }
    public function getAll($paginate = 6){
        $data = $this->getModel()
        ->whereStatus(BaseStatusEnum::PUBLISHED)
        ->orderBy('is_featured', 'desc')
        ->orderBy('created_at', 'desc')
        ->orderBy('id', 'desc');
        return $this->applyBeforeExecuteQuery($data)->paginate($paginate);
    }
}
