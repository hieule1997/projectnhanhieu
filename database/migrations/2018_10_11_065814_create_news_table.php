<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');   
            $table->string('newsTitle')->nullable();
            $table->string('linkNews')->nullable();
            $table->string('newsImage')->nullable();
            $table->longText('newsInfor')->nullable();
            $table->dateTime('newsDate')->nullable();
            $table->string('linkShow')->nullable();

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
        Schema::dropIfExists('news');
    }
}
