@extends('layout-user')

@section('titre')
    Nom du produit
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/produit.css') }}">
@endsection

@section('contenu-container')
    <div class="row" style="min-height: 80vh; margin-top: 100px;">
        <div class="col l6 s12">
            <img class="responsive-img materialboxed" src="{{ (!is_null($produit->image) ? asset('img/' . $produit->image->lien) : 'http://via.placeholder.com/300x200') }}" style="margin-top: 70px;"/>
        </div>
        <div class="col l6 s12">
            <div>
                <div class="right-align"><a href="{{ url('commande/'.$produit['id_produit']) }}"><i class="material-icons">add_shopping_cart</i></a></div>
            </div>
            <h2 style="font-size: 15px;">{{ $produit['nom_produit'] }}</h2>
            <span>Ref : {{ $produit['ref_id_categorie'] }}</span>
            <div class="description-produit mt20">
                <p>
                   {{ $produit['description'] }}
                </p>
            </div>
            <div class="right-align mt50">
                <span class="point-value">{{ $produit['cout'] }} pts</span>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')

@endsection