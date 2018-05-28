<?php

namespace MoinFood\Models;

use Illuminate\Database\Eloquent\Model;

class Lokal extends Model
{
    protected $table = 'lokal';



    public function lokaltyp() {
        return $this->belongsTo(Lokaltyp::class, 'lokal_typ_id');
    }

    public function ort() {
        return $this->belongsTo(Ort::class, 'ort_id');
    }
}
