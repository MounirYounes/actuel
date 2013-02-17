<?php

class Create_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('type', 10);
			$table->string('first_name', 20);
			$table->string('last_name', 20);
			$table->string('email', 50);
			$table->boolean('gender');
			$table->integer('country_id');
			$table->string('website',100);
			$table->string('facebook',100);
			$table->string('twitter',100);
			$table->string('linked_in',100);
			$table->string('github',100);
			$table->string('password', 64);
			$table->string('description', 255);
			$table->string('avatar', 12);
			$table->integer('company_id');
			$table->string('position', 40);
			$table->integer('university_id');
			$table->string('major',40);
			$table->boolean('verified');
			$table->timestamps();
		});
		DB::table('users')->insert(array(
			'email'  => 'test',
			'password'  => Hash::make('test')
			));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');

	}

}