<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {

		# primary key
		$table->increments('id');

		# generates  `created_at` and `updated_at` 
		$table->timestamps();

		$table->string('name_first');
		$table->string('name_last');
		$table->string('city')->nullable();
		$table->string('country')->nullable();
		$table->string('org')->nullable();


	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('people');
    }
}
