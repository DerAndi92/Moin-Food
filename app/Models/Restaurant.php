<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [
        'id',
    ];

    public function restaurantType() {
        return $this->belongsTo(RestaurantType::class, 'restaurant_type_id');
    }

    public function place() {
        return $this->belongsTo(Place::class, 'place_id');
    }

    public function openingTimes() {
        return $this->hasMany(OpeningTime::class, 'restaurant_id');
    }

    public function images() {
        return $this->hasMany(Image::class, 'restaurant_id');
    }

    public function properties() {
        return $this->belongsToMany(Property::class, 'restaurants_properties');
    }

    public function kitchens() {
        return $this->belongsToMany(Kitchen::class, 'restaurants_kitchens');
    }
}
