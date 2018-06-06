<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class OpeningTime extends Model
{
    protected $guarded = [
        'id',
    ];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}
