<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartecipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partecipants', function (Blueprint $table) {
        	$table->increments('id');
        	$table->string('name');
        	$table->string('surname');
        	$table->string('email');
        	//$table->default(+39);
        	$table->string('phone_number');
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
        Schema::drop('partecipants');
    }
}