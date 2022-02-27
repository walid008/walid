<table border="0" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th>REF</th>
            <th class="text-left">TRAJETS</th>
            <th class="text-right">NBR KM</th>
            <th class="text-right">PRIX/KM</th>
            <th class="text-right">TOTAL</th>
        </tr>
    </thead>
    <tbody>
       
    @forelse ($items as $item)
            <!-- <form action="{{ url('factureCreate', [$item-> id_societe_trajet] ) }}" method="POST"> -->
                                <!-- @csrf  -->
                <tr>
                        <td>{{ $item->id}}</td>
                        <td>Date: {{ $item->date_trajet}}
                            De : {{ $item->adress_depart}}
                             a : {{ $item->adress_arriver}}
                        
                        </td>
                        <td>{{ $item->nombre_km}}</td>
                        <td>{{ $item->prix}}</td>
                        
                        <td> 
                        {{ $item->prix_total_ttc}}
                            
                              
                        </td>
                </tr>
            </form>  
            @empty   

                <tr>
                    <td>Aucun trajets</td>
                </tr>

            @endforelse  
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">TOTAL HT</td>
            <td>{{$facture->montant_ht}} €</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 6%</td>
            <td>{{$facture->montant_ht*0.06}} €</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2"> Vanne 15%</td>
            <td>{{$facture->montant_ht*0.15}} €</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2"> TOTAL TTC</td>
            <td>{{$facture->montant_ttc}} €</td>
        </tr>
        
    </tfoot>
</table>