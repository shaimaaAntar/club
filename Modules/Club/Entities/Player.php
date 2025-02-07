<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class player extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\PlayerFactory::new();
    }


    public function team() :belongsTo
    {
        return $this->belongsTo(team::class);
    }
    public function user() :belongsTo
        {
            return $this->belongsTo(user::class);
        }

}
