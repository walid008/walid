
@extends('layouts.master')

@section('content')
@include('webmaster.Page-indexwm.section1')

<div class="container-fluid">
<div class="mt-5">
            <div class="text-center">
            <div class=" mb-4">
                <h3>{{$id->nom_societe}}</h3>
                <br>
              </div>
                <img src="{{ URL::asset('img/img_11.svg')}}" alt="Image" class="img" style="width: 19%;">
              
            </div>
          </div>
<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Date Facture</th>
                <th scope="col">Date Facture </th>
                <th scope="col">Montant Total</th>
                <th scope="col">Satut</th>
                <th scope="col">Ouvrir</th>
                <th scope="col">PDF</th>

            </tr>
        </thead>
        <tbody>
          
  
            @forelse ($items as $item)

                <tr>
                        <td>{{ $item ->date_facture}}</td>
                        <td>{{ $item -> date_fin_facture }}</td>
                        <td>{{ $item -> montant_ttc }}</td>
                        <td>{{ $item -> statut_facture }}</td>
                        <td><a  href="{{ route('ouvrirfacture', [$item-> id,$id->id,1] ) }}" type="button" class="btn btn-outline-dark btn-sm">Voir les factures</a></td>
                        <td><a  href="{{ route('ouvrirfacture', [$item-> id,$id->id,2] ) }}" type="button" class="btn btn-outline-dark btn-sm">Voir les factures</a></td>
                        <td><a  href="{{ route('ouvrirfacture', [$item-> id,$id->id,3] ) }}" type="button" class="btn btn-outline-dark btn-sm">Voir les factures</a></td>
                       
                        

                </tr>

            @empty   

                <tr>
                    <td>Aucune facture</td>
                </tr>

            @endforelse  

        </tbody>
    </table>
   
</div>

</div>
@endsection
@include('component/footer')