<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    use HasFactory;

    public function barang(){
        return $this->belongsTo('App\Models\barang','id_barang');
     }
}
