@extends('layouts.master')

@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}">
@include('webmaster.Page-indexwm.section1')
{{-- Code de base --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajouter Un Pack Multi Admin</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ajouter_societe') }}">
                        @csrf
    
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">Adresse</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" >

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">Téléphone</label>

                            <div class="col-md-6">
                                <input type="tel" name="phone" id="phone" class="form-control @error('telephone') is-invalid @enderror"  value="{{ old('telephone') }}" required  >

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="TVA" class="col-md-4 col-form-label text-md-right">TVA</label>

                            <div class="col-md-6">
                                <input id="TVA" type="text" class="form-control @error('TVA') is-invalid @enderror" name="TVA" value="{{ old('TVA') }}" required autocomplete="TVA" >

                                @error('TVA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('Description') }}" required autocomplete="description" >

                                @error('Description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nom_admin" class="col-md-4 col-form-label text-md-right">Nom Admin</label>

                            <div class="col-md-6">
                                <input id="nom_admin" type="text" class="form-control @error('nom_admin') is-invalid @enderror" name="nom_admin" value="{{ old('nom_admin') }}" required autocomplete="nom_admin" >

                                @error('nom_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="prenom_admin" class="col-md-4 col-form-label text-md-right">Prenom Admin</label>

                            <div class="col-md-6">
                                <input id="prenom_admin" type="text" class="form-control @error('prenom_admin') is-invalid @enderror" name="prenom_admin" value="{{ old('prenom_admin') }}" required autocomplete="prenom_admin" >

                                @error('prenom_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telephone_admin" class="col-md-4 col-form-label text-md-right">Téléphone Admin</label>

                            <div class="col-md-6">
                                <input id="telephone_admin" type="text" class="form-control @error('telephone_admin') is-invalid @enderror" name="telephone_admin" value="{{ old('telephone_admin') }}" required autocomplete="telephone_admin" >

                                @error('telephone_admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
        
    </div>
</div>















@include('component/footer')

<script src="build/js/intlTelInput.js"></script>
<script>
// Vanilla Javascript
var input = document.querySelector("#phone");
window.intlTelInput(input, ({
    // options here
}));


$(document).ready(function() {
    $('.iti__flag-container').click(function() {
        var countryCode = $('.iti__selected-flag').attr('title');
        var countryCode = countryCode.replace(/[^0-9]/g, '')
        $('#phone').val("");
        $('#phone').val("+" + countryCode + " " + $('#phone').val());
     
    });
    
});
</script>
@endsection
