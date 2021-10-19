<?php

namespace Platform\PostActivityField\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\PostActivityField\Repositories\Interfaces\PostActivityFieldInterface;

class PostActivityFieldCacheDecorator extends CacheAbstractDecorator implements PostActivityFieldInterface
{
    public function getByCategory(int $categoryId, int $paginate = 6, int $limit = 0) {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
