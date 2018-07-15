@extends('layout-user')

@section('titre')
    Finalisation de la commande
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/finaliser-commande.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <form method="POST" style="margin-top: 120px; min-height: 70vh;" action="{{ url('mon-panier') }}">
        @csrf
        <div class="row" id="commande-recap">
            <div class="col s12">
                <h1>Informations de livraison :</h1>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="nom" type="text" class="validate">
                        <label for="nom" name="nom">Nom</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="rue" name="rue" type="text" class="validate">
                        <label for="rue">Nom de rue</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="cp" name="cp" type="text" class="validate">
                        <label for="cp">Code postal</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="ville" name="ville" type="text" class="validate">
                        <label for="ville">Ville</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="tel" name="tel" type="tel" class="validate">
                        <label for="tel">Tel</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="societe" name="societe" type="text" class="validate">
                        <label for="societe">Société</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div id="infos-cmd">
                    <input type="submit" name="Confirmer" class="waves-effect waves-light btn" value="Confirmer ma demande">
                </div>
            </div>
        </div>
    </form>
@endsection

@section('specific-js')
    <script src="{{ asset('js/client/commande.js') }}"></script>
@endsection