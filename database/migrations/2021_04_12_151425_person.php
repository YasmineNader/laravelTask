<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Person extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person',function(Blueprint $table){

            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('phone');
            $table->string('nationalid');
            $table->string('password');
            $table->string('address');
            $table->text('aboutme');
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
        //
    }
}
