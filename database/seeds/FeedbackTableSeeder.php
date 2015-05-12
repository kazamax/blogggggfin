<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;
use Curso\Feedback;


class FeedbackTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 20 ; $i++) { 
			# code...
		
		\DB::table('feedbacks')->insert(array (
		'usuario'   => $faker->sentence($nbWords = 10),
		'content' => $faker->text
		));
		}
	}
}

?>


