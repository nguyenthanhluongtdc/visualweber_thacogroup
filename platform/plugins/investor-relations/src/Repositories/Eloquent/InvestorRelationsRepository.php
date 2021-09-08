<?php

namespace Platform\InvestorRelations\Repositories\Eloquent;

use Platform\Support\Repositories\Eloquent\RepositoriesAbstract;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Platform\Base\Enums\BaseStatusEnum;

class InvestorRelationsRepository extends RepositoriesAbstract implements InvestorRelationsInterface
{
    public function getAllCategory() {
        $data = $this->model
                ->where('status', BaseStatusEnum::PUBLISHED)
                ->orderBy('created_at', 'DESC');

        return $this->applyBeforeExecuteQuery($data)->get();
    }
}
