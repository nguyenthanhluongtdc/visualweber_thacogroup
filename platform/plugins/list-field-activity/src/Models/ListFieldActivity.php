<?php

namespace Platform\ListFieldActivity\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;

class ListFieldActivity extends BaseModel
{
    use EnumCastable, SlugTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_list_field_activities';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
