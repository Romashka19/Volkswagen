<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char('name');
            $table->integer('price');
            $table->char('photo');
            $table->char('photo_first');
            $table->char('photo_second');
            $table->char('photo_customise');
            $table->char('other_text');
            $table->char('tagline');
            $table->char('title_first');
            $table->char('text_first');
            $table->char('title_second');
            $table->char('text_second');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}
