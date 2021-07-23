<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandenguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candengues', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->date('dataNascimento');
            $table->string('genero');
            $table->string('restricao')->nullable();
            $table->string('nomePai');
            $table->string('nomeMae');
            $table->string('telefonePai')->nullable();
            $table->string('telefoneMae')->nullable();
            $table->string('pessoaAlternativa')->nullable();
            $table->string('contactoPessoaAlternativa')->nullable();
            $table->string('imagem')->nullable();
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
        Schema::dropIfExists('candengues');
    }
}
