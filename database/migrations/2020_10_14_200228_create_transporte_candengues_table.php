<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransporteCandenguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporte_candengues', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transporte_id')->unsigned();
            $table->foreign('transporte_id')->references('id')->on('transportes')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('candengue_id')->unsigned();
            $table->foreign('candengue_id')->references('id')->on('candengues')->onDelete('cascade')->onUpdate('cascade');
            $table->string('obcervacao')->nullable();
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
        Schema::dropIfExists('transporte_candengues');
    }
}
