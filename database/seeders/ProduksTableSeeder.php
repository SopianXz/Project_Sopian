<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ["nama_produk" => "Ps 2", "merek" => "Sony", "jumlah" => 54],
            ["nama_produk" => "Ps 3", "merek" => "Sony", "jumlah" => 57],
            ["nama_produk" => "Ps 4", "merek" => "Sony", "jumlah" => 31],
            ["nama_produk" => "Ps 5", "merek" => "Sony", "jumlah" => 22],
            ["nama_produk" => "Ps 1", "merek" => "Sony", "jumlah" => 53],
            ["nama_produk" => "Sony Xperia 1", "merek" => "Sony Mobile", "jumlah" => 43],
            ["nama_produk" => "Sony Xperia 5", "merek" => "Sony Mobile", "jumlah" => 51],
            ["nama_produk" => "Iphone XR", "merek" => "Apple", "jumlah" => 42],
            ["nama_produk" => "Iphone 11", "merek" => "Apple", "jumlah" => 20],
            ["nama_produk" => "Iphone 11 PRO", "merek" => "Apple", "jumlah" => 10]
        ];
        DB::table('produks')->insert($produks);
    }
}
