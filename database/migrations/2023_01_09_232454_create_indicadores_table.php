<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadores', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('blacklist_id')->unsigned();
            $table->foreign('blacklist_id')
                  ->references('id')
                  ->on('blacklist')
                  ->onDelete('cascade');
            $table->text('indicadores');
            $table->boolean('visivel');
            $table->date('dtindicadores');
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
        Schema::dropIfExists('indicadores');
    }
}
