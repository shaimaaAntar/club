<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class role extends Model
{
    use HasFactory;

    protected $fillable = ['*'];
    
    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\RoleFactory::new();
    }
}
