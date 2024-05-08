<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merk = [
            ['nama_merk' => 'Sony Playstation'],
            ['nama_merk' => 'Sony Mobile'],
            ['nama_merk' => 'Apple'],
        ];
        //Mengirim/insert data di atas yang di bungkus dengan $posts ke table posts
        DB::table('merks')->insert($merk);
    }
}
