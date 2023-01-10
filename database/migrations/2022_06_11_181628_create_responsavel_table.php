<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsavelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsavel', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('provedores_id')->unsigned();
            $table->foreign('provedores_id')
                  ->references('id')
                  ->on('provedores')
                  ->onDelete('cascade');
            $table->string('name');
            $table->integer('cpf');
            $table->integer('rg');
            $table->string('logradouro');
            $table->integer('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('cep');
            $table->string('uf');
            $table->string('email');
            $table->integer('fone');
            $table->integer('celular');
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
        Schema::dropIfExists('responsavel');
    }
}
