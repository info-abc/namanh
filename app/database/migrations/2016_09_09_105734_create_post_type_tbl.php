<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTypeTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post_types', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('summary',1000);
            $table->text('description');
            $table->string('image');
            $table->string('meta_title');
            $table->string('meta_description',1000);
            $table->string('meta_keyword',1000);
            $table->string('meta_image');
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
		Schema::drop('post_types');
	}

}
