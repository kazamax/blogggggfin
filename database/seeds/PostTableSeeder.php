<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;
use Curso\Post;


class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 20 ; $i++) { 
			# code...
		
		\DB::table('posts')->insert(array (
		'title'   => $faker->sentence,
		'content' => $faker->text(1000), 
		'tags'    => $faker->creditCardType,
		'photo'   => $faker->imageUrl,
		'slug'   => $faker->slug
		));
	}
}
}
?>