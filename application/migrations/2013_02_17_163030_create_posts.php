<?php

class Create_Posts {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function($table) {
			$table->increments('id');
			$table->string('type', 20);
			$table->text('body');
			$table->integer('author_id');
			$table->integer('wall_id');
			$table->boolean('verified');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');

	}

}