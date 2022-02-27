<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_societe');
            $table->string('adresse_societe')->nullable();
            $table->string('email_societe');
            $table->string('num_tel_societe');
            $table->text('label_societe');
            $table->string('tva_societe');
            $table->string('p_nom_societe');
            $table->string('p_prenom_societe');
            $table->string('p_tel_societe');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->on('users')
            // ->references('id')
            // ->onDelete('cascade')
            // ->onUpdate('cascade');
            // user_id
            // trajet_id
            // facture_id
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
        Schema::dropIfExists('societes');
    }
}
