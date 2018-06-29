<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viagems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('excursionista_id');
            $table->string('titulo');
            $table->longText('descricao');
            $table->longText('files');
            $table->unsignedInteger('cidade_id');
            $table->boolean('tem_cafe_manha');
            $table->boolean('tem_almoco');
            $table->boolean('tem_lanche_tarde');
            $table->boolean('tem_jantar');
            $table->boolean('tem_cama_box');
            $table->boolean('tem_ar_condicionado');
            $table->boolean('tem_frigobar');
            $table->boolean('tem_banheira');
            $table->boolean('tem_tv_cabo');
            $table->boolean('tem_internet');
            $table->boolean('tem_piscina');
            $table->boolean('tem_salao_jogos');
            $table->boolean('tem_academia');
            $table->boolean('tem_area_kids');
            $table->boolean('tem_churrasqueira');
            $table->boolean('tem_recreacao');
            $table->longText('observacoes');
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
        Schema::dropIfExists('viagems');
    }
}
