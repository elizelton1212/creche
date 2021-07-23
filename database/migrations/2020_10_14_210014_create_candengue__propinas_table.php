<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandenguePropinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candengue__propinas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('candengue_id')->unsigned();
            $table->foreign('candengue_id')->references('id')->on('candengues')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('propina_id')->unsigned();
            $table->foreign('propina_id')->references('id')->on('propinas')->onDelete('cascade')->onUpdate('cascade');

            $table->string('ano');
            $table->string('estado');
    
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
        Schema::dropIfExists('candengue__propinas');
    }
}
