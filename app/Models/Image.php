<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [
        'id',
    ];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

    public function imageType() {
        return $this->belongsTo(ImageType::class, 'image_type_id');
    }
}
