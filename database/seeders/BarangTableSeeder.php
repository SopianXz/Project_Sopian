<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama_barang' => 'Pensil', 'harga_barang' => 100000, 'qty' => 10],
            ['nama_barang' => 'Pulpen', 'harga_barang' => 100000, 'qty' => 10],
            ['nama_barang' => 'Pensil Warna', 'harga_barang' => 100000, 'qty' => 10],
            ['nama_barang' => 'Penghapus', 'harga_barang' => 100000, 'qty' => 10],
            ['nama_barang' => 'Buku', 'harga_barang' => 100000, 'qty' => 10],
        ];
        //Mengirim/insert data di atas yang di bungkus dengan $posts ke table posts
        DB::table('barangs')->insert($barang);
    }
}
