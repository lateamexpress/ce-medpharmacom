@extends('layout-user')

@section('titre')
    Panier
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/panier.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <form method="POST" action="{{ url('') }}">
        @csrf

        <p>T'es qu'une merde !!!</p>

    </form>
@endsection

@section('specific-js')

@endsection