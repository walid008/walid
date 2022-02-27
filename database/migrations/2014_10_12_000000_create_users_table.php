<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            // $table->string('prenom_user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->integer('numero_de_tel_user');
            $table->rememberToken();
            $table->unsignedBigInteger('role_id')->nullable();
            // $table->bigInteger('role_id')->unsigned();
            // $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            // $table->foreignId('role_id')->constrained();

            $table->timestamps();
            $table->foreignId('id_user_role')->nullable();
            $table->foreign('id_user_role')
                    ->references('id')
                    ->on('roles');
            
                    
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
