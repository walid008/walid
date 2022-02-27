<?php

namespace App\Http\Controllers;
use App\Models\Societe;
use Illuminate\Http\Request;

class WebmasterController extends Controller
{
    public function index(){

        return view('webmaster/indexwm');
    }
    public function ajouter_societe(){

        return view('webmaster/ajouter_societe');
    }
    public function ajouter_societe_post(Request $request){
        $data=$request->all();
        
        $societe = new Societe();
        $societe->nom_societe=$data['name'];
        $societe->adresse_societe=$data['adresse'];
        $societe->email_societe=$data['email'];
        $societe->num_tel_societe=$data['phone'];
        $societe->label_societe=$data['description'];
        $societe->tva_societe=$data['TVA'];
        $societe->p_nom_societe=$data['nom_admin'];
        $societe->p_prenom_societe=$data['prenom_admin'];
        $societe->p_tel_societe=$data['telephone_admin'];
        $societe->save();

        return view('webmaster/ajouter_societe');
    }
}
