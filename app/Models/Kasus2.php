<?php

namespace App\Models;
use App\Models\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    public function country() {
        return $this->belongsTo('App\Country', 'id_country');
    }
}
