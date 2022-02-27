<?php

namespace App\Http\Controllers;

use App\Http\Middleware\societe as MiddlewareSociete;
use App\Models\Facture;
use Illuminate\Http\Request;
use App\Models\Societe;
use App\Models\Trajet;
use App\Models\Factures_items;
use Illuminate\Support\Facades\DB;
use GrahamCampbell\ResultType\Success;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;
class FactureController extends Controller
{
    public function View(){
        $societe= Societe::all();
        return view('webmaster/factures/factureswm', compact('societe'));
    }

    public function show(Societe $id){

        return view('webmaster/factures/factureCreate', compact('id'));
    }
    public function tous_lesfactures(Societe $id){

        return view('webmaster/factures/tous_lesfactures', compact('id'));
    }

    public function trajet($id){
            $trajet = Trajet::where('id_societe_trajet', '=', $id)->get();
        return view('webmaster/factures/facturetrajet', compact('trajet'));
    }

    public function addTrajetFacture(Request $req, Societe $id){
        $facture= new Factures_items;
        $facture->id_trajet=$req->trajet_id;
        $facture->id_societe=$req->societe_id;
        $facture->save();
        return view('webmaster/factures/factureCreate', compact('id'));
    }
    public function ouvrirfacture($idf ,Societe $id,$btn){
        $items = Facture::join('factures_items','factures.id','factures_items.id_facture')->join('trajets','factures_items.id_trajet','trajets.id')->join('prixs','prixs.id','trajets.prix')->where('factures_items.id_facture',$idf)->get();
        $facture = Facture::where('id',$idf)->first();

        if ($btn==1) {
            return view('webmaster/factures/factureCreate', compact('id','items','facture'));

        }elseif ($btn==2) {
            $pdf = App::make('dompdf.wrapper');
            $facture = $pdf->loadView('webmaster/factures/factureCreate', compact('id','items','facture'))->setOptions(['defaultFont' => 'sans-serif']);
             return $pdf->stream();
        }else {
            # code...
        }
        
        
       
    }

    public function factureItem(Societe $id){
      
       
        $items = Facture::all()->where('id_societe_facture',$id->id);

        return view('webmaster/factures/tous_lesfactures', compact('id', 'items'));

    }

}

// public function historiqueVent($id)
// {
//     $array = DB::table('qte_sortantes')
//         ->select('*')
//         ->join('vendeurs', 'qte_sortantes.vendeur_id', '=', 'vendeurs.id_vd')
//         ->join('recus', 'recus.id_recus', '=', 'qte_sortantes.recus_id')
//         ->join('articles', 'articles.id_ar', '=', 'qte_sortantes.article_id')
//         ->where('qte_sortantes.article_id', '=', $id)
//         ->get()->toArray();
//     $All = json_decode(json_encode($array), true);
//     $designation = DB::table('articles')
//         ->select('*')
//         ->where('articles.id_ar', '=', $id)
//         ->get()->toArray();
//     $des = json_decode(json_encode($designation), true);
//     $data = ['All' => $All, 'nomArticle' => $des];

//     return View("Article.historiqueVente", compact('data'));
// }