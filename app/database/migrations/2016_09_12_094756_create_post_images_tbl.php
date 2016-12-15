<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostImagesTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('summary',1000);
            $table->string('url');
            $table->string('image');
            $table->integer('post_id');
            $table->integer('status')->default(ACTIVE);
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
		Schema::drop('post_images');
	}

}
