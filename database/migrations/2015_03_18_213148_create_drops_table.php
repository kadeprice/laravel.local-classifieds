<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDropsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drops', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('pin');
            $table->string('drop_date');
            $table->text('description');
            $table->string('api_key');
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
		Schema::drop('drops');
	}

}
