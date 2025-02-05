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



    public function users(): HasMany
    {
        return $this->hasMany(user::class);
    }
    public function coach():hasone
    {
        return $this->hasOne(user::class,'coach_id');
    }
    public function captain():hasone
    {
        return $this->hasOne(user::class,'captain_id');
    }


    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\TeamFactory::new();
    }
}
