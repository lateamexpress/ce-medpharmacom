@extends('layout-user')

@section('titre')
    Catalogue
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/catalogue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/client/nouislider.css') }}">
@endsection

@section('contenu')
    <div class="row mt50">
        <form method="post" action="{{ url('catalogue') }}">
            @csrf
            <ul id="block-filter-products-mobile" class="collapsible show-on-medium" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>FILTRES</div>
                    <div class="collapsible-body" id="collapseProduct">
                        <div id="header-filter-products">
                            <h2 class="h2-catalog center-align">Filtres de recherche</h2>
                            <div class="row">
                                <div class="col s12 l12">
                                    <div class="col s12 l3">
                                        <h3>Nom du produit</h3>
                                        <input type="text" name="nom_produit">
                                    </div>
                                    <div class="col s12 l3">
                                        <h3>Catégorie</h3>
                                        <select name="ref_id_categorie" multiple>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col s12 l3">
                                        <h3>Marque</h3>
                                        <select name="ref_id_marque" multiple>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <div class="col s12 l3">
                                        <h3>Coût</h3>
                                        <input type="text" name="cout">
                                    </div>
                                    <div class="col l3">
                                        <button class="btn btn-waves">Rechercher</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </form>
        <form method="post" action="{{url('catalogue')}}">
            <div class="block-filter-products show-on-large hide-on-med-and-down" style="padding-right: 10%; padding-left: 10%;">
                <div id="header-filter-products">
                    <h2 class="h2-catalog center-align">Filtres de recherche</h2>
                    <div class="row">
                        <div class="col l12">
                            <div class="col l3">
                                <h3>Nom du produit</h3>
                                <input type="text" name="nom_produit">
                            </div>
                            <div class="col l3">
                                <h3>Catégorie</h3>
                                <select name="ref_id_categorie" multiple>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div class="col l3">
                                <h3>Marque</h3>
                                <select name="ref_id_marque" multiple>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div class="col l3">
                                <h3>Coût</h3>
                                <input type="text" name="cout">
                            </div>
                            <div class="col l3 mt50">
                                <button class="btn btn-waves">Rechercher</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div class="blockProduits" style="min-height: 80vh; padding-right: 10%; padding-left: 10%;">
        <div>
            <div id="block-tendances-header">
                <h1 class="center-align">Les articles tendances</h1>
            </div>
            <div id="block-tendances-content" class="center-align">
                <div class="row">
                    @foreach($produitLastFive as $produitTendance)
                        <div class="col l4 s12">
                            <a href="{{ url('produit/'.$produitTendance['id_produit']) }}">
                            <div class="produit-block">
                                <h1 class="marque-produit">{{ $produitTendance['nom_produit'] }}</h1>
                                <span class="nom-produit">{{ $produitTendance['cout'] }} pts</span>
                                <br><br>
                               <img class="produits-catalogue responsive-img" src="{{ (!is_null($produitTendance->image) ? asset('img/' . $produitTendance->image->lien) : 'http://via.placeholder.com/300x200') }}"/>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <div id="block-tendances-header" class="mt50">
                <h1 class="center-align">Découvrir</h1>
            </div>
            <div id="block-tendances-content" class="center-align mb50">
                <div class="row">
                    @foreach($catalogue as $produit)
                        <div class="col l4 s12">
                            <a href="{{ url('produit/'.$produit['id_produit']) }}">
                            <div class="produit-block">
                                <h1 class="marque-produit">{{$produit['nom_produit']}}</h1>
                                <span class="nom-produit">{{ $produit['cout'] }} pts</span>
                                <br><br>
                               <img class="produits-catalogue responsive-img" src="{{ (!is_null($produit->image) ? asset('img/' . $produit->image->lien) : 'http://via.placeholder.com/300x200') }}"/>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{ $catalogue->links('vendor.pagination.default') }}
            </div>
        </div>
    </div>
@endsection

@section('contenu-container')

@endsection

@section('specific-js')
    <script src="{{ asset('js/client/catalogue.js') }}"></script>
    <script>
        $(function(){
            $('.collapsible-header').on('click', () => {
               if(!$('.collapsible-header').hasClass('active')) {
                  $('body').css('overflow', 'hidden');
               }
               else {
                   $('body').css('overflow', 'scroll');
               }
            });
        });
    </script>
@endsection