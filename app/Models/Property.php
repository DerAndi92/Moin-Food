<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [
        'id',
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurants_properties');
    }

}
