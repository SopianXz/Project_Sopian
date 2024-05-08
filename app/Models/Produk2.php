<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk2 extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_produk', 'jumlah', 'merk_id'];
    public $timestamps = true;
    public function merk()
    {
        return $this->belongsToMany(merk::class, 'id');
    }
}
