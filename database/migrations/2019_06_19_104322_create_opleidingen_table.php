<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpleidingenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opleidingen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('onderzoek_groep_id')->unsigned();
            $table->string('contact')->nullable();

            //foreign keys
            $table->foreign('onderzoek_groep_id')
                ->references('id')->on('onderzoek_groepen')
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
        Schema::dropIfExists('opleidingen');
    }
}
