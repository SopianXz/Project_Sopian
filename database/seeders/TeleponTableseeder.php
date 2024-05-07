<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepon = [
            ['nomor_telepon' => '08925526282', 'pengguna_id' => 1],
            ['nomor_telepon' => '08932562929', 'pengguna_id' => 2],
            ['nomor_telepon' => '08926625283', 'pengguna_id' => 3],
            ['nomor_telepon' => '08926735624', 'pengguna_id' => 4],
            ['nomor_telepon' => '08389748365', 'pengguna_id' => 5],
        ];
        //Mengirim/insert data di atas yang di bungkus dengan $posts ke table posts
        DB::table('telepons')->insert($telepon);
    }
}
