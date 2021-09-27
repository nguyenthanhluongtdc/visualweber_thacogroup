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
        
        $data->orderBy('created_at','desc');

        if ($paginate != 0) {
            return $this->applyBeforeExecuteQuery($data)->paginate($paginate)->onEachSide(1);
        }

        return $this->applyBeforeExecuteQuery($data)->limit($limit)->get();
    }
}
