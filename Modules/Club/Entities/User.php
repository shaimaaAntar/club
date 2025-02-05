<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class user extends Model
{
    use softdeletes;

    use HasFactory;

    protected $fillable = ['*'];
//    protected $hidden =['password'];

    public function properties(): MorphMany
    {
        return $this->morphMany(sports_properties_value::class, 'userable');
    }
     public function team() :belongsTo
     {
         return $this->belongsTo(team::class);
     }


    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\UserFactory::new();
    }
}
