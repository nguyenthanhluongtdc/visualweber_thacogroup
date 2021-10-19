<?php

namespace Platform\ListFieldActivity\Models;

use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Platform\Slug\Traits\SlugTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'parent_id', 
        'status', 
        'author_name',
        'description',
        'content',
        'author_id', 
        'is_featured'
    ];

    /**
     * @var array  
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
    public function parent(): BelongsTo {
        return $this->belongsTo(ListFieldActivity::class, 'parent_id')->withDefault();
    }
}
