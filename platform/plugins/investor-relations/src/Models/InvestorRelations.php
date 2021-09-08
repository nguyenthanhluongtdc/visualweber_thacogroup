<?php

namespace Platform\InvestorRelations\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;

class InvestorRelations extends BaseModel
{
    use EnumCastable, SlugTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_investor_relations';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'parent_id',
        'is_featured',
        'order',
        'is_default',
        'template',
        'status',
        'author_id',
        'author_type',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}
