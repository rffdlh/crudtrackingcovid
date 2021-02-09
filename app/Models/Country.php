<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['kode_country','nama_country'];
    public $timestamps = true;

    public function kasus2() {
        return $this->hasMany('App\Kasus2', 'id_country');
    }
}
