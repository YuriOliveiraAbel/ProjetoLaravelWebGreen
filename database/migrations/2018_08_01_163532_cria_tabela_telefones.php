<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaTelefones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ddd');
            $table->string('telefone');
            $table->integer('pessoa_id')->unsigned();//cria no banco uma varia para referenciar a tabela pessoa.
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade');//cria no banco a referencia do pessoa_id para o telefone.
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
        Schema::drop('telefones');
    }
}
