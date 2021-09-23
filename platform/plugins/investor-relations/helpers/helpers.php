<?php

use Platform\InvestorRelations\Repositories\Interfaces\InvestorRelationsInterface;
use Platform\Base\Enums\BaseStatusEnum;

if(!function_exists('get_all_investor_categories')) {
    function get_all_investor_categories() {
        return app(InvestorRelationsInterface::class)->getAllCategory();
    }
}
