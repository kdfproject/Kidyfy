<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImagenesPosteos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //
      Schema::create('images_posts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('src');
        $table->timestamps();
        $table->integer('post_id')->unsigned();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images_posts');
    }

}
