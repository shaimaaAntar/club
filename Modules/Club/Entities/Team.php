<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class team extends Model
{


    use HasFactory;

    protected $guarded = [];

//    protected $hidden=['created_at','updated_at'];


    public function properties(): MorphMany
    {
        return $this->morphMany(sports_properties_value::class, 'userable');
    }


    public function players(): HasMany
    {
        return $this->hasMany(player::class);
    }

    public function coach(): HasOne
    {
        return $this->hasOne(user::class, 'id' );
    }
    public function captain(): HasOne
    {
        return $this->hasOne(user::class, 'id' );
    }
    public function sportType() :belongsTo
    {
        return $this->belongsTo( sportType::class);
    }







    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\TeamFactory::new();
    }
}
