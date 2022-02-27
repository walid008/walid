<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Middleware\societe as MiddlewareSociete;
use App\Models\Facture;
use Illuminate\Http\Request;
use App\Models\Societe;
use App\Models\Trajet;
use App\Models\Factures_items;
use Illuminate\Support\Facades\DB;
use GrahamCampbell\ResultType\Success;
use Carbon\Carbon;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $firs= Carbon::now()->startOfMonth()->toDateString();
        $firs =Carbon::parse($firs)->format('Y-m-d');
        $end= Carbon::now()->endOfMonth()->toDateString();
        $end =Carbon::parse($end)->format('Y-m-d');
        $societe = Societe::all();
        foreach ($societe as $key) {
            $trajet= Trajet::where('id_societe_trajet',$key->id)
            
            ->whereBetween('trajets.created_at', [$firs, $end])->get();

            $prix_total_ht= Trajet::join('prixs','prixs.id','prix')->where('id_societe_trajet',$key->id)
            ->whereBetween('trajets.created_at', [$firs, $end])->sum('prixs.prix_total_ht');
            $prix_total_ttc= Trajet::join('prixs','prixs.id','prix')->where('id_societe_trajet',$key->id)
            ->whereBetween('trajets.created_at', [$firs, $end])->sum('prixs.prix_total_ttc');
$facture = new Facture();
$facture->date_facture=$firs;
$facture->date_fin_facture=$end;
$facture->pourcent_tva=6;
$facture->montant_ttc=$prix_total_ttc;
$facture->montant_ht=$prix_total_ht;
$facture->statut_facture='En cours ';
$facture->	id_societe_facture =$key->id;
$facture->save();
$id_facture = Facture::latest('id')->first();
            foreach ($trajet as $keyt) {
                $factureI = new Factures_items();
                $factureI->id_societe=$key->id;
                $factureI->id_facture=$id_facture->id;
                $factureI->id_trajet=$keyt->id;
                $factureI->save();
            }

            # code...
        }
    }
}
