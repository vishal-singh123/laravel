<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MovieTable', function (Blueprint $table){
            $table->increments('id');
            $table->string('image_url');
            $table->string('name');
            $table->string('release_year');
            $table->string('country');
            $table->string('trailer_link');
            $table->boolean('featured');
            $table->integer('rating');
            $table->text('description');
            $table->string('genre');
            $table->string('duration');
            $table->string('thumbnail');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MovieTable');
    }
}
