@extends('layout')

@section('titre')
    Formation
@endsection

@section('specific-css')
    <link href="{{ asset('css/vitrine/formation.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div class="row">
        <div class="col s12 mt50" id="bloc-formation">
            <h1>Etablissements de formation</h1>
            <div class="divider-custom"></div>
            <iframe src="https://www.google.com/maps/d/embed?mid=ztTTZ-64BfUk.knoVA-yqbM5M" width="640" height="480"></iframe>
        </div>
    </div>
@endsection