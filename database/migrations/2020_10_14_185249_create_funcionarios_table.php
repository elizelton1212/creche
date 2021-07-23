<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('genero');
            $table->string('estadoCivil')->nullable();
            $table->string('nBi')->nullable();
            $table->string('inss')->nullable();
            $table->string('nacionalidade');
            $table->string('iban')->nullable();
            $table->double('salarioBruto');
            $table->double('salarioLiquido');
            $table->double('salarioBase')->nullable();
            $table->string('bonus')->nullable();
            $table->string('telefone')->nullable();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('funcionarios');
    }
}
