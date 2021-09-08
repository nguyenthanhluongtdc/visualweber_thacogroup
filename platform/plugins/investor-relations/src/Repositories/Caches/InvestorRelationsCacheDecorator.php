<?php

namespace Platform\InvestorRelations\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;

class InvestorRelationsCacheDecorator extends CacheAbstractDecorator implements InvestorRelationsInterface
{
    /**
    * {@inheritDoc}
    */
    public function getAllCategory()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
