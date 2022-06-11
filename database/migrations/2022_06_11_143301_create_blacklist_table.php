<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlacklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blacklist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provedores_id')
                  ->constrained('provedores')
                  ->onDelete('cascade');
            $table->string('tipodepessoa');
            $table->enum('tipo',['cnpj', 'cpf']);
            $table->string('razaosocial');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->integer('cep');
            $table->string('uf');
            $table->string('email');
            $table->integer('fone');
            $table->integer('celular');
            $table->string('natoperacao');
            $table->date('dtocorrencia');
            $table->integer('numcontrato');
            $table->double('valor', 8, 2);
            $table->text('observacoes');
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
        Schema::dropIfExists('blacklist');
    }
}
