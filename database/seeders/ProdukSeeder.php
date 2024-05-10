<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach(range(1, 10) as $index) {
            DB::table('tb_produk')->insert([
                'judulProduk' => $faker->name,
                'deskripsi' => $faker->text,
                'harga' => $faker->randomDigit,
                'gambar' => 'wolf.jpg'    
            ]);
        }
    }
}
