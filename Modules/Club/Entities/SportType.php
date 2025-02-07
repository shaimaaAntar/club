<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class sportType extends Model
{
    use HasFactory;
    protected $table= 'sportTypes';
    protected $guarded = [];
    public $timestamps=false;

    public function Teams() :HasMany
    {
        return $this->hasMany(team::class);
    }
    
    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\SportTypeFactory::new();
    }
}
