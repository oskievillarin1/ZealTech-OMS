<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table){
		$table->increments('id');
		$table->string('user_fname', 200);
		$table->string('user_lname', 200);
		$table->string('user_position', 100);
		$table->string('contact', 50);
		$table->string('username', 60)->unique();
		$table->string('password', 60);
		$table->rememberToken();
		$table->timestamps();
	  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
