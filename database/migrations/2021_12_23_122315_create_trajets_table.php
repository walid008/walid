<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('adress_depart');
            $table->string('adress_arriver');
            $table->integer('nombre_km');
            $table->date('date_trajet');
            $table->string('heure_depart'); 
            $table->string('heure_arriver');
            // peut-etre mettre time pour l heure
            $table->integer('nombre_passager');
            $table->string('type_voiture');
            $table->integer('prix');
            // favoris_id
            // user_id
            // societe_id
            // facture_id
            $table->timestamps();
 
            $table->foreignId('id_societe_trajet')->nullable();
            $table->foreign('id_societe_trajet')
                  ->references('id')
                  ->on('societes');

            $table->foreignId('id_user_trajet')->nullable();
            $table->foreign('id_user_trajet')
                  ->references('id')
                  ->on('users');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trajets');
    }
}
