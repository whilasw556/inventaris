<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $visible = ['barang'];
    // memberikan akses data apa saja yang bisa diisi
    protected $fillable = ['barang'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamp = true;

    public function barangmasuk(){
        $this->hasMany('App\Models\barangmasuk','id_barang');
    }
}
