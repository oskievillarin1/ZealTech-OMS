<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run(){
		DB::table('users')->delete();

		$user = array(
			 'user_fname' => 'oskie',
			 'user_lname' => 'villarin',
			 'user_position' => 'salesperson',
			 'contact' => '2234133',
			 'username' => 'oskie10',
			 'password' => 'kingkong'
		);

		$user1 = array(
					 'user_fname' => 'jp',
					 'user_lname' => 'daga-ang',
					 'user_position' => 'manager',
					 'contact' => '2234133',
					 'username' => 'jp',
					 'password' => 'test'
				);

		DB::table('users')->insert($user);
		DB::table('users')->insert($user1);
	}
}
