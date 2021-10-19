<?php

namespace Platform\ListFieldActivity\Repositories\Caches;

use Platform\Support\Repositories\Caches\CacheAbstractDecorator;
use Platform\ListFieldActivity\Repositories\Interfaces\ListFieldActivityInterface;

class ListFieldActivityCacheDecorator extends CacheAbstractDecorator implements ListFieldActivityInterface
{
 /**
    * {@inheritDoc}
    */
    public function getAllCategory()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
