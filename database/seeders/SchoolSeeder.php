<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); // Set locale to Indonesian

        for ($i = 0; $i < 20; $i++) {
            DB::table('sekolah')->insert([
                'id' => $faker->unique()->numberBetween(1, 1000),
                'NPSN' => $faker->unique()->numberBetween(10000000, 99999999),
                'nama_sekolah' => $faker->company,
                'alamat' => $faker->address,
                'kota' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
        }
    }
}
