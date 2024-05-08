<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Produk2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ["nama_produk" => "Ps 2", "jumlah" => 54, "merk_id" => 1],
            ["nama_produk" => "Ps 3", "jumlah" => 57, "merk_id" => 1],
            ["nama_produk" => "Sony Xperia 5", "jumlah" => 31, "merk_id" => 2],
            ["nama_produk" => "Sony Xperia 1", "jumlah" => 22, "merk_id" => 2],
            ["nama_produk" => "Iphone 11 pro", "jumlah" => 53, "merk_id" => 3],
            ["nama_produk" => "Iphone 11", "jumlah" => 43, "merk_id" => 3],
        ];
        DB::table('produk2s')->insert($produks);
    }
}
