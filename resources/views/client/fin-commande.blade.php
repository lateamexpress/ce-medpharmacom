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
    <div class="row" style="margin-top: 150px; min-height: 60vh;" id="commande-recap">
        Merci pour votre commande Medpharmacom vous tiendra informer dans les prochains jours
        <br><br>
        <a href="{{ url('/') }}">Retour à l'accueil du site</a>
    </div>
@endsection

@section('specific-js')
    <script src="{{ asset('js/client/commande.js') }}"></script>
@endsection