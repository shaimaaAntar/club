<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class user extends Model
{
    use softdeletes;
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function properties(): MorphMany
    {
        return $this->morphMany(sports_properties_value::class, 'userable');
    }

    public function role(){
        return $this->belongsTo(role::class);
    }


    public function player(): HasOne
    {
        return $this->hasOne(player::class);
    }



    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\UserFactory::new();
    }
}
