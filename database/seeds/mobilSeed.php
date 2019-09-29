<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class mobilSeed extends Seeder
{
    /** 
     * * bothify
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = ['toyota','avanza','isuzu','daihatsu','honda'];
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 7; $i++) { 
            DB::table('mobil_module')->insert([
                'merk' => ucfirst($jenis[$faker->numberBetween(0,4)]),
                'plat_nomer' => ucwords($faker->bothify('?? ### ## ??')),
                'harga' => ($faker->numberBetween(1,10)*2000),
                'status' => 1,
                'created_at' => $faker->dateTimeBetween($dateStart='-2 days',$endDate=now()),
                'updated_at' => $faker->dateTimeBetween($dateStart=now(),$endDate="+2 days"),
            ]);
        }
    }
}
