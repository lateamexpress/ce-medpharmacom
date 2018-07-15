@extends('layout-user')

@section('titre')
    Mon compte
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/mon-compte.css') }}">
@endsection

@section('contenu-container')
    <div class="row" style="height: 80vh; margin-top: 100px;">
        <form class="col s12 m12 offset-l3 l6" id="form-info" method="POST" action="{{ url('mon-compte') }}">
            <h1 class="center-align">Gérer ses informations personnelles</h1>
            <div class="divider-custom"></div>
            <div class="row mt20">
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="prenom" name="prenom" type="text" class="validate">
                    <label for="prenom">Prénom</label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nom" name="nom" type="text" class="validate">
                    <label for="nom">Nom</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">mail_outline</i>
                    <input id="email" name="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">phone</i>
                    <input id="tel" name="tel" type="tel" class="validate">
                    <label for="tel">Telephone</label>
                </div>
            </div>
            <button type="submit" class="waves-effect waves-light btn" id="update-info"><i class="material-icons left">update</i>Mettre à jour</button>
        </form>
    </div>
@endsection

@section('specific-js')

@endsection