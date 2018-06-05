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
            <img class="responsive-img materialboxed" src="https://cdn.shopify.com/s/files/1/0757/9123/products/linjer-classic-watch-34-rose-gold-tan-1-front_400x400_crop_center.jpg?v=1520751203"/>
        </div>
        <div class="col l6 s12">
            <div>
                <div class="right-align"><button class="btn" style="border-radius:1000px;" type="submit"><i class="material-icons">add_shopping_cart</i></button></div>
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