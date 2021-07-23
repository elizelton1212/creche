<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandengueTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candengue_turmas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('candengue_id')->unsigned();
            $table->foreign('candengue_id')->references('id')->on('candengues')->onDelete('cascade')->onUpdate('cascade');
           $table->string('ano')->nullable;
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
        Schema::dropIfExists('candengue_turmas');
    }
}
