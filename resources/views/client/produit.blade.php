@extends('layout-user')

@section('titre')
    Nom du produit
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/produit.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('contenu-container')
    <div class="row" style="min-height: 80vh; margin-top: 100px;">
        <div class="col l6 s12">
            <img class="responsive-img materialboxed" src="{{ (!is_null($produit->image) ? asset('img/' . $produit->image->lien) : 'http://via.placeholder.com/300x200') }}" style="margin-top: 70px;"/>
        </div>
        <div class="col l6 s12">
            <h2 id="nomProduit" style="font-size: 15px;">{{ $produit['nom_produit'] }}</h2>
            <input type="hidden" name="produit" value="{{ $produit['id_produit'] }}" id="idProduit">
            <span>Ref : {{ $produit['ref_id_categorie'] }}</span>
            <div class="input-field col s6">
                <input id="quantite" name="quantite" type="text" value="1">
                <label for="quantite">Quantité</label>
            </div>
            <div class="description-produit mt50">
                <p>
                   {{ $produit['description'] }}
                </p>
            </div>
            <div class="right-align mt50">
                <span class="point-value">{{ $produit['cout'] }}</span> pts
                <button type="button" class="btn btn-waves add-product">Ajouter au panier</button>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script>
        $(function(){
            let arrayProduits = [];
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.add-product').each(function () {
                $(this).click(function(e){
                    Materialize.toast('Produit ajouté à ce panier', 3000);
                    e.preventDefault();
                    let produit = $('#idProduit').val();
                    let quantite = $('#quantite').val();
                    let nom = $('#nomProduit').text();
                    let cout = $('.point-value').text();
                    $.ajax({
                        type:'POST',
                        url:'{{ url('catalogue')}}',
                        data:{
                            produit: produit,
                            quantite: quantite,
                            nom: nom,
                            cout:cout
                        },
                        success:function(data){

                        }
                    });
                });
            });
        });
    </script>
@endsection