<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    protected $guarded = [
        'id',
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'restaurants_kitchens');
    }
}
