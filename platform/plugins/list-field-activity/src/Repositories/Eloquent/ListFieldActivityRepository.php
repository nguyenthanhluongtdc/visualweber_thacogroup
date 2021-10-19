<?php

namespace Platform\ListFieldActivity\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\ListFieldActivity\Repositories\Interfaces\ListFieldActivityInterface;
use Platform\Base\Enums\BaseStatusEnum;

class ListFieldActivityRepository extends RepositoriesAbstract implements ListFieldActivityInterface
{
    public function getAllCategory() {
        $data = $this->model
                ->where('status', BaseStatusEnum::PUBLISHED)
                ->orderBy('created_at', 'DESC');

        return $this->applyBeforeExecuteQuery($data)->get();
    }
}
