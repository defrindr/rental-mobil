<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class adminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('admin_module')->insert([
            'username' => $faker->firstName,
            'email' => 'admin@rental.com',
            'password' => Hash::make("admin1234"),
            'created_at' => $faker->dateTimeBetween($dateStart='-2 days',$endDate=now()),
            'updated_at' => $faker->dateTimeBetween($dateStart=now(),$endDate="+2 days"),
        ]);
        for($i=0;$i<10;$i++){
            DB::table('admin_module')->insert([
                'username' => $faker->firstName,
                'email' => $faker->email,
                'password' => Hash::make("admin1234"),
                'created_at' => $faker->dateTimeBetween($dateStart='-2 days',$endDate=now()),
                'updated_at' => $faker->dateTimeBetween($dateStart=now(),$endDate="+2 days"),
            ]);
        }
    }
}
