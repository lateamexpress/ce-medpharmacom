@extends('layout-user')

@section('titre')
    Catalogue
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/catalogue.css') }}">
@endsection

@section('contenu-container')
    <div class="row">
        <div class="col s12">
            <h1 class="center-align">Liste des produits</h1>
            <div class="divider-custom"></div>
            <div class="col s3 block-produits">
                <img class="mt10 responsive-img" src="http://via.placeholder.com/310x310" title="" alt="">
                <p>Description</p>
                <div>
                    <span class="quantity-text">Quantité : <input type="number" value="0" class="quantity"></span>
                    <div class="right-align mb20">
                        <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                        <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                    </div>
                </div>
            </div>
            <div class="col s3 block-produits">
                <img class="mt10 responsive-img" src="http://via.placeholder.com/310x310" title="" alt="">
                <p>Description</p>
                <div>
                    <span class="quantity-text">Quantité : <input type="number" value="0" class="quantity"></span>
                    <div class="right-align mb20">
                        <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                        <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                    </div>
                </div>
            </div>
            <div class="col s3 block-produits">
                <img class="mt10 responsive-img" src="http://via.placeholder.com/310x310" title="" alt="">
                <p>Description</p>
                <div>
                    <span class="quantity-text">Quantité : <input type="number" value="0" class="quantity"></span>
                    <div class="right-align mb20">
                        <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                        <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                    </div>
                </div>
            </div>
            <div class="col s3 block-produits">
                <img class="mt10 responsive-img" src="http://via.placeholder.com/310x310" title="" alt="">
                <p>Description</p>
                <div>
                    <span class="quantity-text">Quantité : <input type="number" value="0" class="quantity"></span>
                    <div class="right-align mb20">
                        <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                        <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="{{ asset('js/client/catalogue.js') }}"></script>
@endsection