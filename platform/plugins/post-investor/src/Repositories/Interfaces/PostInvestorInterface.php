<?php

namespace Platform\PostInvestor\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface PostInvestorInterface extends RepositoryInterface
{
    public function getByCategory(int $categoryId, int $paginate = 6, int $limit = 0);
    public function getAll(int $paginate = 6);
}
