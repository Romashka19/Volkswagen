<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplectationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complectations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->char('name');

            $table->unsignedBigInteger('engine_id');
            $table->unsignedBigInteger('gearbox_id');
            $table->unsignedBigInteger('model_id');

            $table->foreign('engine_id')
                ->references('id')
                ->on('engines');

            $table->foreign('gearbox_id')
                ->references('id')
                ->on('gearboxes');

            $table->foreign('model_id')
                ->references('id')
                ->on('models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complectations');
    }
}
