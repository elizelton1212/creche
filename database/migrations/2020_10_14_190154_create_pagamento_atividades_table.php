<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentoAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamento_atividades', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('candengue_id')->unsigned();
            $table->foreign('candengue_id')->references('id')->on('candengues')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('atividade_id')->unsigned();
            $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade')->onUpdate('cascade');
            $table->string('mes');
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
        Schema::dropIfExists('pagamento_atividades');
    }
}
