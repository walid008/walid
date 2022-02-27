<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_facture');
            $table->date('date_fin_facture');
            $table->integer('pourcent_tva');
            $table->integer('montant_ttc');
            $table->integer('montant_ht');
            $table->string('statut_facture');
            $table->foreignId('id_user_facture');
            $table->foreign('id_user_facture')
                  ->references('id')
                  ->on('users');
                  
            $table->foreignId('id_prix_facture');
            $table->foreign('id_prix_facture')
                  ->references('id')
                  ->on('prixs');
        
            $table->foreignId('id_societe_facture');
            $table->foreign('id_societe_facture')
                  ->references('id')
                  ->on('societes');

            $table->foreignId('id_trajet_facture');
            $table->foreign('id_trajet_facture')
                    ->references('id')
                    ->on('trajets');
         
            
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
        Schema::dropIfExists('factures');
    }
}
