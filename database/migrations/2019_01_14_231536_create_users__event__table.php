<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->integer('age');
            $table->string('link');
            $table->string('token');
            $table->string('optone');
            $table->string('opttwo');
            $table->string('optthree');
            $table->integer('Price');
            $table->integer('host');
            $table->string('userstate')->default('out');
            $table->boolean('Accepted')->default('0');
            $table->boolean('Paid')->default('0');




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
        Schema::dropIfExists('users_event');
    }
}
