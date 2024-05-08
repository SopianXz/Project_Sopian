<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Merk extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_merk'];
    public $timestamps = true;
    public function produk2()
    {
        return $this->hasMany(Produk2::class, 'merk_id');
    }
}
