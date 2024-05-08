<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_penjualan', 'id_barang', 'jumlah', 'total_harga'];
    public $timestamps = true;
    public function barang()
    {
        return $this->belongsToMany(barang::class, 'id');
    }
    public function penjualan()
    {
        return $this->belongsToMany(penjualan::class, 'id');
    }
}
