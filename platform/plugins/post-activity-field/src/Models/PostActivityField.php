<?php

namespace Platform\PostActivityField\Models;

use Platform\ListFieldActivity\Models\ListFieldActivity;
use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostActivityField extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_post_activity_fields';
 
    /**
     * @var array 
     */
    protected $fillable = [
        'name',
        'status', 
        'author_name',  
        'description',
        'content',
        'image',
        'is_featured',
        'status',
        'author_id',
    ]; 
 
    /**
     * @var array
     */
    protected $casts = [ 
        'status' => BaseStatusEnum::class,
    ];
    public function categories() : BelongsToMany{
        return $this->belongsToMany(ListFieldActivity::class, 'app_post_activity_fields_categories','post_activity_fields_id','list_field_activities_id');
    }
}
