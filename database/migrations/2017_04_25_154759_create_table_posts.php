<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     // * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->text('content');

            //The following HAVE TO GO TOGETHER FOR IT TO WORK!!*
            //column definition
            $table->integer('created_by')->unsigned();
            //foreign key definition
            $table->foreign('created_by')->references('id')->on('users');
            

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
        Schema::drop('posts');
    }
}
