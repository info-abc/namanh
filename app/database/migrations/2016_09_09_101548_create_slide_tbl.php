<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slides', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name2');
            $table->string('summary',1000);
            $table->string('url');
            $table->string('image');
            $table->integer('type')->default(SLIDE_BANNER);
            $table->integer('status')->default(ACTIVE);
            $table->softDeletes();
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
		Schema::drop('slides');
	}

}
