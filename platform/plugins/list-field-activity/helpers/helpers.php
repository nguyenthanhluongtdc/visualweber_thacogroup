<?php

use Platform\ListFieldActivity\Repositories\Interfaces\ListFieldActivityInterface;
use Platform\Base\Enums\BaseStatusEnum;

if(!function_exists('get_all_list_field_categories')) { 
    function get_all_list_field_categories() {
        return app(ListFieldActivityInterface::class)->getAllCategory();
    }
}       