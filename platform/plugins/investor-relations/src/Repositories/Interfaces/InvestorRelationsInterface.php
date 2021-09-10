<?php

namespace Platform\InvestorRelations\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface InvestorRelationsInterface extends RepositoryInterface
{
    public function getAllCategory();
}
