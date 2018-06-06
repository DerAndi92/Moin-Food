<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class ImageType extends Model
{
    protected $guarded = [
        'id',
    ];

    public function images() {
        return $this->hasMany(Image::class, 'image_type_id');
    }
}
