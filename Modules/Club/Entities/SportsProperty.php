<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sports_property extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\SportsPropertyFactory::new();
    }
}
