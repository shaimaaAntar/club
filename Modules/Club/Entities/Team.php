<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;


class team extends Model
{




    use HasFactory;

    protected $fillable = ['*'];
//    protected $hidden=['created_at','updated_at'];


    public function properties(): MorphMany
    {
        return $this->morphMany(sports_properties_value::class, 'userable');
    }



    public function players(): HasMany
    {
        return $this->hasMany(player::class);
    }

    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\TeamFactory::new();
    }
}
