@extends('layouts.master')

@section('content')
<div class="container-fluid">
<div class="mt-5">
            <div class="text-center">
            <div class=" mb-4">
                <h3>Ajouter un trajet a la facture </h3>
                <br>
              </div>
              
            </div>
          </div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ref trajet</th>
                <th scope="col">nombre de passager</th>
                <th scope="col">depart</th>
                <th scope="col">arrivé</th>
                <th scope="col">km</th>
                <th scope="col">date</th>
                <th scope="col">ref utilisateur</th>
                <th scope="col">type de voiture</th>
                <th scope="col">prix</th>
                <th scope="col">ajouter</th>

            </tr>
        </thead>
        <tbody>
          
            @forelse ($trajet as $item)
            <form action="{{ url('factureCreate', [$item-> id_societe_trajet] ) }}" method="POST">
                                @csrf 
                <tr>
                        <td>{{ $item['id']}}</td>
                        <td>{{ $item['nombre_passager']}}</td>
                        <td>{{ $item['adress_depart']}}</td>
                        <td>{{ $item['adress_arriver']}}</td>
                        <td>{{ $item['nombre_km']}}</td>
                        <td>{{ $item['date_trajet']}}</td>
                        <td>{{ $item['id_user_trajet']}}</td>
                        <td>{{ $item['type_voiture']}}</td>
                        <td>{{ $item['prix']}}</td>
                        
                        <td> 
                        <input type="hidden" name="trajet_id" value="{{ $item['id']}}">
                        <input type="hidden" name="societe_id" value="{{ $item['id_societe_trajet']}}">
                            <button class="btn btn-success" > + </button>
                              
                        </td>
                </tr>
            </form>  
            @empty   

                <tr>
                    <td>Aucun trajets</td>
                </tr>

            @endforelse  
        </tbody>
    </table>
</div>


@endsection
