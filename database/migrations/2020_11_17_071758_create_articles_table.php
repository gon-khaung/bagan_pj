<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('first_part');
            $table->longText('second_part');
            $table->string('first_photo');
            $table->string('second_photo');
            $table->string('third_photo');
            $table->string('background_photo');
            $table->string('article_title');
            $table->date('date');
            $table->boolean('popular')->nullable();
            $table->boolean('local')->nullable();
            $table->boolean('global')->nullable();
            $table->boolean('environmental')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
