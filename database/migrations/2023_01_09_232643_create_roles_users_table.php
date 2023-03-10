<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_users', function (Blueprint $table) {
            $table->increments('id');            
            $table->integer('roles_id')->unsigned();
            $table->foreign('roles_id')
                  ->references('id')
                  ->on('roles');

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
        Schema::dropIfExists('roles_users');
    }
}
