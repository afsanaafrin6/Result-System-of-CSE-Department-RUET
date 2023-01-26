<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attends', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('code');
            $table->string('semester');
            $table->string('section');
            $table->string('course1');
            $table->string('cycle')->nullable()->default(0);
            $table->string('day')->nullable()->default(0);
            $table->datetime('date');
            $table->boolean('attendance');
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
        Schema::dropIfExists('attends');
    }
}
