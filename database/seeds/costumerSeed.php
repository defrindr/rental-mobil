<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class costumerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 30; $i++) { 
            DB::table('costumers_module')->insert([
                'nama' => $faker->unique()->name,
                'no_ktp' => $faker->unique()->numberBetween(111111111111111111,999999999999999999),
                'alamat' => $faker->address,
                'no_hp' => $faker->unique()->e164PhoneNumber,
                'email' => $faker->unique()->email,
                'created_at' => $faker->dateTimeBetween($dateStart='-2 days',$endDate=now()),
                'updated_at' => $faker->dateTimeBetween($dateStart=now(),$endDate="+2 days"),
            ]);
        }
    }
}
