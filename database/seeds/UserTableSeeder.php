<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder 
{

	public function run() {

	$faker = Faker::create();
    	foreach (range(1,10) as $user) {
	        DB::table('users')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'password' => Hash::make('secret')
	        ]);
        }
    }
}


?>