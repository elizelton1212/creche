<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propinas', function (Blueprint $table) {
            $table->id();
            $table->string('mes');
            //$table->bigInteger('candengue_id')->unsigned();
            //$table->foreign('candengue_id')->references('id')->on('candengues')->onDelete('cascade')->onUpdate('cascade');
            //$table->bigInteger('funcionario_id')->unsigned();
          //  $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('propinas');
    }
}
