<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk2;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostTableSeeder::class);
        $this->call(ProduksTableSeeder::class);
        $this->call(PenggunaTableSeeder::class);
        $this->call(TeleponTableSeeder::class);
        $this->call(MerkTableSeeder::class);
        $this->call(Produk2TableSeeder::class);
        $this->call(PenjualanTableSeeder::class);
        $this->call(BarangTableSeeder::class);
        $this->call(DetailPenjualanTableSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
