<?php

namespace Platform\PostActivityField\Repositories\Interfaces;

use Platform\Support\Repositories\Interfaces\RepositoryInterface;

interface PostActivityFieldInterface extends RepositoryInterface
{
    public function getByCategory(int $categoryId, int $paginate = 6, int $limit = 0);
}
