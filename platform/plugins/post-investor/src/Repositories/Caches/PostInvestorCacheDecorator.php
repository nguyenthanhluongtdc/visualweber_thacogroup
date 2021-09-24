<?php

namespace Platform\PostInvestor\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\PostInvestor\Repositories\Interfaces\PostInvestorInterface;

class PostInvestorCacheDecorator extends CacheAbstractDecorator implements PostInvestorInterface
{
    public function getByCategory(int $categoryId, int $paginate = 6, int $limit = 0) {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
