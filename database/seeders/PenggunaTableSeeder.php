<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengguna = [
            ['nama' => 'Sopian'],
            ['nama' => 'Alzan'],
            ['nama' => 'Rizki'],
            ['nama' => 'Sendi'],
            ['nama' => 'Faraas'],
        ];
        //Mengirim/insert data di atas yang di bungkus dengan $posts ke table posts
        DB::table('penggunas')->insert($pengguna);
    }
}
