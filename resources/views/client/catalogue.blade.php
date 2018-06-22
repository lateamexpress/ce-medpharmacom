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
        <ul id="block-filter-products-mobile" class="collapsible show-on-medium" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">arrow_drop_down</i>FILTRES</div>
                <div class="collapsible-body" id="collapseProduct">
                    <div id="header-filter-products">
                        <h2 class="h2-catalog center-align">Filtres de recherche</h2>
                        <div class="row">
                            <div class="col s12 l12">
                                <div class="col s12 l3">
                                    <h3>Gamme</h3>
                                    <div id="gamme-prix"></div>
                                </div>
                                <div class="col s12 l3">
                                    <h3>Catégorie</h3>
                                    <select multiple>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                                <div class="col s12 l3">
                                    <h3>Sous-catégorie</h3>
                                    <select multiple>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                                <div class="col s12 l3">
                                    <h3>Marque</h3>
                                    <select multiple>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                                <div class="col s12 l3">
                                    <h3>Référence</h3>
                                    <input type="text">
                                </div>
                                <div class="col s12 l3">
                                    <h3>Mots clefs</h3>
                                    <div class="chips chips-autocomplete"></div>
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
        <div class="block-filter-products show-on-large hide-on-med-and-down" style="padding-right: 10%; padding-left: 10%;">
            <div id="header-filter-products">
                <h2 class="h2-catalog center-align">Filtres de recherche</h2>
                <div class="row">
                    <div class="col l12">
                        <div class="col l3">
                            <h3>Gamme</h3>
                            <div id="gamme-prix"></div>
                        </div>
                        <div class="col l3">
                            <h3>Catégorie</h3>
                            <select multiple>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="col l3">
                            <h3>Sous-catégorie</h3>
                            <select multiple>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="col l3">
                            <h3>Marque</h3>
                            <select multiple>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="col l3">
                            <h3>Référence</h3>
                            <input type="text">
                        </div>
                        <div class="col l3">
                            <h3>Mots clefs</h3>
                            <div class="chips chips-autocomplete"></div>
                        </div>
                        <div class="col l3 mt50">
                            <button class="btn btn-waves">Rechercher</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="{{ asset('js/client/nouislider.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js"></script>
    <script>
        $(function(){
            var slider = document.getElementById('gamme-prix');
            noUiSlider.create(slider, {
                start: [20, 80],
                connect: true,
                step: 1,
                orientation: 'horizontal',
                range: {
                    'min': 0,
                    'max': 100
                },
            });
            $('.chips-autocomplete').material_chip({
                autocompleteOptions: {
                    data: {
                        'Apple': null,
                        'Microsoft': null,
                        'Google': null
                    },
                    limit: 3
                }
            });
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