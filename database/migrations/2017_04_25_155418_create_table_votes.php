<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVotes extends Migration
{
    /**
     * Run the migrations.
     *
     // * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('vote');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts');
            
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     // * @return void
     */
    public function down()
    {
        Schema::drop('votes');
    }
}
