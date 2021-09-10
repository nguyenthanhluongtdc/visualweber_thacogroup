<?php

namespace Platform\PostInvestor\Models;

use Platform\InvestorRelations\Models\InvestorRelations;
use Platform\Base\Traits\EnumCastable;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PostInvestor extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'app_post_investors';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function categories() : BelongsToMany{
        return $this->belongsToMany(InvestorRelations::class, 'app_post_investor_categories','post_investor_id','investor_relation_id');
    }
}
