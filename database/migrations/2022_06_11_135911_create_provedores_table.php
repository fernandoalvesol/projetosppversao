<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razaosocial');
            $table->string('nomefantasia');
            $table->string('email');
            $table->string('site');
            $table->enum('tipo',['cnpj', 'cpf']);
            $table->string('inestadual');
            $table->string('inmunicipal');
            $table->string('atoanatel');
            $table->string('fone');
            $table->string('contato');
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
        Schema::dropIfExists('provedores');
    }
}
