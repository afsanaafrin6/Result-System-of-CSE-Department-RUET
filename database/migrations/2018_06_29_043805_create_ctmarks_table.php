<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctmarks', function (Blueprint $table) {
            $table->increments('id');

             $table->integer('code');
            $table->string('semester');
            $table->string('section');
            $table->string('course1');
             $table->integer('ct1')->nullable()->default(0);
            $table->integer('ct2')->nullable()->default(0);
            $table->integer('ct3')->nullable()->default(0);
            $table->integer('ct4')->nullable()->default(0);
            $table->integer('average')->nullable()->default(0);
            $table->integer('boardviva')->nullable()->default(0);
            $table->integer('exam')->nullable()->default(0);
            
            $table->integer('attendmark')->nullable()->default(0);
             $table->integer('totalmarks')->nullable()->default(0);
           
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
        Schema::dropIfExists('ctmarks');
    }
}
