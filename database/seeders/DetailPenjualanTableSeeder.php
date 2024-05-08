<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_penjualan = [
            ['id_penjualan' => 1, 'id_barang' => 5, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 2, 'id_barang' => 4, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 3, 'id_barang' => 3, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 4, 'id_barang' => 2, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 5, 'id_barang' => 1, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 1, 'id_barang' => 5, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 2, 'id_barang' => 4, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 3, 'id_barang' => 3, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 4, 'id_barang' => 2, 'jumlah' => 10, 'total_harga' => 90000],
            ['id_penjualan' => 5, 'id_barang' => 1, 'jumlah' => 10, 'total_harga' => 90000],
        ];
        //Mengirim/insert data di atas yang di bungkus dengan $posts ke table posts
        DB::table('detail_penjualans')->insert($detail_penjualan);
    }
}
