@extends('layout-user')

@section('titre')
    Accueil
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/home.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div class="row">
        <div class="col s3">
            <div class="panel-home">
                <a href="{{ url('catalogue') }}">Catalogue</a>
            </div>
        </div>
        <div class="col s3">
            <div class="panel-home">
                <a href="{{ url('mes-commandes') }}">Mes sélections</a>
            </div>
        </div>
        <div class="col s6">
            <div class="card-right">
                <div id="header-card">
                    Vos dernières sélections
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <div id="header-home">
                <h1>Informations</h1>
                <div class="divider-custom"></div>
                <p>Découvrez notre gamme de cadeaux d'affaires incentives</p>
                <div class="col s3 partners-img">
                    <img src="{{ asset('img/vertbaudet.png') }}" class="" alt="vertbaudet" title="vertbaudet"/>
                </div>
                <div class="col s3 partners-img">
                    <img src="{{ asset('img/Le_Creuset_Logo.png') }}" alt="Le_Creuset_Logo" title="Le_Creuset_Logo"/>
                </div>
                <div class="col s3 partners-img">
                    <img src="{{ asset('img/swarovski.png') }}" alt="swarovski" title="swarovski"/>
                </div>
                <div class="col s3 partners-img">
                    <img src="{{ asset('img/DELSEY_LOGO.png') }}" alt="Delsey logo" title="Delsey logo"/>
                </div>
                <div class="col s3 partners-img">
                    <img src="{{ asset('img/longchamp.png') }}" alt="longchamp" title="longchamp"/>
                </div>
                <div class="col s3 partners-img">
                    <img src="{{ asset('img/apple.png') }}"  alt="apple" title="apple"/>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')

@endsection