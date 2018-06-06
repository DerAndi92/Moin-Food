<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $guarded = [
        'id',
    ];

    public function restaurants() {
        return $this->hasMany(Restaurant::class, 'place_id');
    }
}
