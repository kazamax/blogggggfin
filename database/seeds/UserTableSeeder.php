<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Curso\User;


class UserTableSeeder extends Seeder {

	public function run(){

		User::create(
			[
				'name'     => 'Roberto Figuera',
				'email'    => 'robertsilkro@hotmail.com',
				'username' => 'Kazamax',
				'password' => \Hash::make('secreta'),
			]
		);
		User::create(
			[
				'name'     => 'Rigoberto Figuera',
				'email'    => 'rigo@hotmail.com',
				'username' => 'Rigoberto',
				'password' => \Hash::make('secreta'),
			]
		);
		
	}

}

?>