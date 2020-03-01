<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('wheels_id');
            $table->unsignedBigInteger('complectation_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('interior_id');
            $table->integer("price");

            $table->foreign('wheels_id')
                ->references('id')
                ->on('wheels');
            $table->foreign('complectation_id')
                ->references('id')
                ->on('complectations');
            $table->foreign('color_id')
                ->references('id')
                ->on('colors');
            $table->foreign('interior_id')
                ->references('id')
                ->on('interiors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
