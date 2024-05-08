<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penjualan = [
            ['nama_pelanggan' => 'Sopian', 'sub_total' => 100000, 'diskon' => '10%', 'grand_total' => 90000],
            ['nama_pelanggan' => 'Alzan', 'sub_total' => 100000, 'diskon' => '10%', 'grand_total' => 90000],
            ['nama_pelanggan' => 'Rizki', 'sub_total' => 100000, 'diskon' => '10%', 'grand_total' => 90000],
            ['nama_pelanggan' => 'Sendi', 'sub_total' => 100000, 'diskon' => '10%', 'grand_total' => 90000],
            ['nama_pelanggan' => 'Faraas', 'sub_total' => 100000, 'diskon' => '10%', 'grand_total' => 90000],
        ];
        //Mengirim/insert data di atas yang di bungkus dengan $posts ke table posts
        DB::table('penjualans')->insert($penjualan);
    }
}
