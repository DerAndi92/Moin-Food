<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantType extends Model
{
    protected $guarded = [
        'id',
    ];

    public function restaurants() {
        return $this->hasMany(Restaurant::class, 'restaurant_type_id');
    }
}
