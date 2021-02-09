<?php

namespace App\Models;
use App\Models\Kelurahan;
use App\Models\Kasus1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    public function kelurahan() {
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }
    public function kasus1() {
        return $this->hasMany('App\Models\Kasus1', 'id_rw');
    }
    use HasFactory;
}
