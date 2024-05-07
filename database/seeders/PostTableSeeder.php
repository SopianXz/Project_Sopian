<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title' => 'Cara Farming Xp Cepat', 'content' => 'hsr'],
            ['title' => 'Cara Farming Gold Cepat', 'content' => 'hsr'],
            ['title' => 'Cara Farming Gem Cepat', 'content' => 'hsr']
        ];
        //Mengirim/insert data di atas yang di bungkus dengan $posts ke table posts
        DB::table('posts')->insert($post);
    }
}
