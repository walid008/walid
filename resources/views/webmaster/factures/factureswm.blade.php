
@extends('layouts.master')

@section('content')
@include('webmaster.Page-indexwm.section1')

<div class="container-fluid">
<div class="mt-5">
            <div class="text-center">
            <div class=" mb-4">
                <h3>Clients du Pack Multi-User</h3>
                <br>
              </div>
                <img src="img/img_11.svg" alt="Image" class="img">
              
            </div>
          </div>
<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Ref</th>
                <th scope="col">Nom </th>
                <th scope="col">Mobile</th>
                <th scope="col">Personne de contact</th>
                <th scope="col">E-mail</th>
                <th scope="col">Date d'inscription</th>

            </tr>
        </thead>
        <tbody>
          
  
            @forelse ($societe as $item)

                <tr>
                        <td>{{ $item -> id}}</td>
                        <td>{{ $item -> nom_societe }}</td>
                        <td>{{ $item -> num_tel_societe }}</td>
                        <td>{{ $item -> p_nom_societe }}</td>
                        <td>{{ $item -> email_societe }}</td>
                        <td>{{ $item -> created_at }}</td>
                        <td><a  href="{{ url('factureCreate', [$item-> id] ) }}" type="button" class="btn btn-outline-dark btn-sm">Voir les factures</a></td>

                </tr>

            @empty   

                <tr>
                    <td>Aucun utilisateur</td>
                </tr>

            @endforelse  

        </tbody>
    </table>
</div>

</div>

@endsection
@include('component/footer')