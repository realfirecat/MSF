<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlashcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flashcards', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('title');
            $table->string('content');
            $table->unsignedBigInteger('fk_userID');
            $table->unsignedBigInteger('fk_themaID');
            $table->foreign('fk_userID')->references('id')->on('user');
            $table->foreign('fk_themaID')->references('id')->on('themas');
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
        Schema::dropIfExists('flashcards');
    }
}
