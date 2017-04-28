<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder 
{

	public function run() {

	$faker = Faker::create();
		foreach (range(1,10) as $index) {
			DB::table('posts')->insert([
				'title' => $faker->realText(mt_rand (10, 15)),
				'url' => $faker->url,
				'content' => $faker->realText(mt_rand (50, 1000)),
				'created_by' => mt_rand (2, 100)
			]);
		}
	}
}

?>