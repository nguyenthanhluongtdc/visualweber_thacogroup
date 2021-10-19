<?php

namespace Platform\PostActivityField\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\PostActivityField\Repositories\Interfaces\PostActivityFieldInterface;

class PostActivityFieldRepository extends RepositoriesAbstract implements PostActivityFieldInterface
{
    public function getByCategory($categoryId, $paginate = 6, $limit = 0)
    {
        if (!is_array($categoryId)) {
            $categoryId = [$categoryId];
        } 

        $data = $this->model
            ->whereHas('categories', function ($query) use ($categoryId) {
                $query->whereIn('app_list_field_activities.id', $categoryId);
            });
        
        $data->orderBy('created_at','desc');

        if ($paginate != 0) {
            return $this->applyBeforeExecuteQuery($data)->paginate($paginate)->onEachSide(1);
        }

        return $this->applyBeforeExecuteQuery($data)->limit($limit)->get();
    }
}
