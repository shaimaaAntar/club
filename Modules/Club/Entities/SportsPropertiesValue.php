<?php

namespace Modules\Club\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class sports_properties_value extends Model
{
    use HasFactory;

    protected $fillable = ['*'];

    public function userable(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function newFactory()
    {
        return \Modules\Club\Database\factories\SportsPropertiesValueFactory::new();
    }
}
