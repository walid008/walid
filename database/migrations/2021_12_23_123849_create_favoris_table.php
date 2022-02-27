<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris', function (Blueprint $table) {
            $table->bigIncrements('id');
            // trajet_id
            // user_id 
            // (societe_id ?)
            $table->timestamps();

            $table->foreignId('id_user_favoris');
            $table->foreign('id_user_favoris')
                  ->references('id')
                  ->on('users');
            
            $table->foreignId('id_trajet_favoris');
            $table->foreign('id_trajet_favoris')
                  ->references('id')
                  ->on('trajets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoris');
    }
}
