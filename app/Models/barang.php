<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_barang', 'harga_barang', 'qty'];
    public $timestamps = true;
    public function detail_penjualan()
    {
        return $this->hasMany(detail_penjualan::class, 'id_barang');
    }
}
