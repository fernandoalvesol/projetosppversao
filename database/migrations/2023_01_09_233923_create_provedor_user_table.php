<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvedorUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedor_user', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('provedores_id')->unsigned();
            $table->foreign('provedores_id')
                  ->references('id')
                  ->on('provedores');

            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')
                        ->references('id')
                        ->on('users');
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
        Schema::dropIfExists('provedor_user');
    }
}
