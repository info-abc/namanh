<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsiteTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configsite', function(Blueprint $table) {
            $table->increments('id');
            $table->string('meta_title');
            $table->string('meta_description',1000);
            $table->string('meta_keyword',1000);
            $table->string('meta_image');
            $table->text('code');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->text('company_information');
            $table->text('company_contact');
            $table->text('map');
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
		Schema::drop('configsite');
	}

}
