<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {

		# primary key
		$table->increments('id');

		# generates  `created_at` and `updated_at` 
		$table->timestamps();

		$table->text('text');
		$table->string('submitted_on');
		$table->integer('language_id')->unsigned();
        $table->foreign('language_id')->references('id')->on('languages');
        $table->integer('person_id')->unsigned();
        $table->foreign('person_id')->references('id')->on('people');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biographies');
    }
}
