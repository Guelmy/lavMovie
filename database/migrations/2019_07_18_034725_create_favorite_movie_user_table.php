<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteMovieUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favrite_movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('movie_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //creating assciation with movie and user
            // $table->foreign('movie_id')->references('id')->on('movies');
            // $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorite_movie_user');
    }
}
