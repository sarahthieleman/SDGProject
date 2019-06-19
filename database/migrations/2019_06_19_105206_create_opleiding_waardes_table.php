<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpleidingWaardesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opleiding_waardes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('opleiding_id')->unsigned();

            $table->integer('poverty')->default(0);
            $table->integer('hunger')->default(0);
            $table->integer('health')->default(0);
            $table->integer('education')->default(0);
            $table->integer('gender_equality')->default(0);
            $table->integer('clean_water')->default(0);
            $table->integer('energy')->default(0);
            $table->integer('economic_growth')->default(0);
            $table->integer('infrastructure')->default(0);
            $table->integer('reduced_inequalities')->default(0);
            $table->integer('sustainable_cities')->default(0);
            $table->integer('durability')->default(0);
            $table->integer('climate')->default(0);
            $table->integer('water_life')->default(0);
            $table->integer('land_life')->default(0);
            $table->integer('peace')->default(0);
            $table->integer('partnership')->default(0);

            $table->string('timestamp');

            //foreign keys
            $table->foreign('opleiding_id')
                ->references('id')->on('opleidingen')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opleiding_waardes');
    }
}
