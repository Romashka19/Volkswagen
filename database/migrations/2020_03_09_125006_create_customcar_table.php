<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomcarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customcar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('wheels_id');
            $table->unsignedBigInteger('complectation_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('interior_id');
            $table->integer("price");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customcar');
    }
}
