@extends('layout-user')

@section('titre')
    Catalogue
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/catalogue.css') }}">
    <link rel="stylesheet" href="{{ asset('css/client/nouislider.css') }}">
@endsection

@section('contenu')
    <div class="row">
        <div class="block-filter-products">
            <div id="header-filter-products">
                <h2 class="h2-catalog center-align">Filtres de recherche</h2>
                <div class="block-filter-products-inputs">
                    <h3>Gamme</h3>
                    <div id="gamme-prix"></div>
                    <h3>Catégorie</h3>
                    <div class="input-field col s12" style="margin-top: 0;">
                        <select multiple>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <h3>Sous-catégorie</h3>
                    <div class="input-field col s12" style="margin-top: 0;">
                        <select multiple>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <h3>Marque</h3>
                    <div class="input-field col s12" style="margin-top: 0;">
                        <select multiple>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <h3>Référence</h3>
                    <input type="text">
                    <h3>Mots clefs</h3>
                    <div class="chips chips-autocomplete"></div>
                    <div class="center-align mb10"><button class="btn btn-waves">Rechercher</button></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('contenu-container')
    <div style="min-height: 80vh; margin-top: 100px;">
        <div id="block-tendances-header">
            <h1 class="center-align">Les articles tendances</h1>
            {{ $produitLastFive }}
        </div>
        <div id="block-tendances-content" class="center-align">
            <div class="row">
                <div class="col l4 s12">
                    <h1 class="marque-produit">Apple</h1>
                    <span class="nom-produit">iPhone 7 128 Go Silver</span>
                    <br>
                    <a href="{{ url('produit') }}"><img src="https://i2.cdscdn.com/pdt2/7/0/2/1/300x300/app3700942925702/rw/apple-iphone-5c-rose-8go.jpg"/></a>
                </div>
                <div class="col l4 s12">
                    <h1 class="marque-produit">Moulinex</h1>
                    <span class="nom-produit">CE55800</span>
                    <br>
                    <img src="https://www.media-rdc.com/medias/dc61702f7af3330091ccb1c496969d40/p_300x300/fe260ced833c356ba44faf1857e8aec6.png"/>
                </div>
                <div class="col l4 s12">
                    <h1 class="marque-produit">Samsung</h1>
                    <span class="nom-produit">Galaxy S8 argent artique</span>
                    <br>
                    <img src="https://www.media-rdc.com/medias/3600ed1ee51137479867dab73bd5b4b2/p_300x300/sm-g950f-galaxys8-noir.jpg"/>
                </div>
            </div>
        </div>
        <div id="block-tendances-header" class="mt50">
            <h1 class="center-align">Les nouveautés</h1>
        </div>
        <div id="block-tendances-content" class="center-align mb50">
            <div class="row">
                <div class="col l2 s12">
                    <h1 class="marque-produit">Apple</h1>
                    <span class="nom-produit">iPhone 7 128 Go Silver</span>
                    <br><br>
                    <img src="https://www.materiel.net/live/360387.200.200.jpg"/>
                </div>
                <div class="col l2">
                    <h1 class="marque-produit">Moulinex</h1>
                    <span class="nom-produit">CE55800</span>
                    <br><br>
                    <img src="https://imtc.qccdn.fr/test/robot-cuiseur/produit/moulinex-cuisine-companion-hf800a10_001.jpg"/>
                </div>
                <div class="col l2 s12">
                    <h1 class="marque-produit">Samsung</h1>
                    <span class="nom-produit">Galaxy S8 argent artique</span>
                    <br><br>
                    <img src="https://i2.cdscdn.com/pdt2/6/3/5/1/200x200/sam8806088709635/rw/samsung-galaxy-s8-plus-64go-noir.jpg"/>
                </div>
                <div class="col l2 s12">
                    <h1 class="marque-produit">Apple</h1>
                    <span class="nom-produit">iPhone 7 128 Go Silver</span>
                    <br>
                    <img src="https://www.materiel.net/live/360387.200.200.jpg"/>
                </div>
                <div class="col l2 s12">
                    <h1 class="marque-produit">Jeu PC</h1>
                    <span class="nom-produit">FIFA 18</span>
                    <br><br>
                    <img src="https://apollo-ireland.akamaized.net/v1/files/mzgyjofxxk801-KE/image;s=200x0"/>
                </div>
                <div class="col l2 s12">
                    <h1 class="marque-produit">Samsung</h1>
                    <span class="nom-produit">Galaxy S8 argent artique</span>
                    <br><br>
                    <img src="https://i2.cdscdn.com/pdt2/6/3/5/1/200x200/sam8806088709635/rw/samsung-galaxy-s8-plus-64go-noir.jpg"/>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="row no-mb">
        <div class="col s12">
            <div class="relative">
                <h1 class="center-align" style="margin-top: 80px;">Liste des produits</h1>
                <a id="checkout" class="waves-effect waves-light btn command teal darken-1" href="{{ url('') }}"><i class="material-icons">shopping_cart</i></a>
            </div>
            <div class="divider-custom mb20"></div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://images.sudouest.fr/2014/04/30/57ebbb6d66a4bd6726a04319/widescreen/1000x500/le-tramadol-est-prescrit-pour-lutter-contre-la-douleur-mais-peut-se-reveler-dangereux-pour-la-conduite-d-une-voiture-ou-d-un-velo.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="150"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://www.pharmacie-prado-mermoz.com/gfm/840002/m/img/homeopathie-illutration.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="250"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://images.sudouest.fr/2013/10/09/57ebd82c66a4bd6f77857a8a/widescreen/1000x500/il-y-a-moins-d-un-mois-l-agence-nationale-de-securite-du-medicament-avait-place-l-anticoagulant-de-nouvelle-generation-pradaxa-sous-surveillance-renforcee.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="560"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="data:image/jpeg;base64,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" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="510"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
        </div>
    </div>
    <div class="row no-mb">
        <div class="col s12">
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://pic.clubic.com/v1/images/1472284/raw" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="225"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://www.elsevier.com/__data/assets/image/0003/272442/NASA_Globe_Observer_image.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="2110"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://le-basket.fr/wp-content/uploads/2017/10/t-shirt-de-basket-1000x500.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="680"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text">Quantité : <input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="http://assets.rebelcircus.com/blog/wp-content/uploads/2014/10/plaid-shirt-bg.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="750"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
        </div>
    </div>
    <div class="row no-mb">
        <div class="col s12">
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://static.highsnobiety.com/wp-content/uploads/selectism/2014/03/Needles-Remake-Flannel-00.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="2655"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://9to5toys.files.wordpress.com/2018/02/canon-eos-m50-screen-open.jpg?quality=82&strip=all&w=1000&strip=all" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="666"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://images.sudouest.fr/2017/12/21/5a3d123a66a4bd1d1462c790/widescreen/1000x500/titouan-lamazou-quand-on-est-marin-on-le-reste.jpg?v1" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="184"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
            <div class="col s12 m3 l3 block-produits">
                <img class="mt10 responsive-img materialboxed" src="https://static1.squarespace.com/static/53bf0631e4b027ff2e514842/53bf4cade4b0a131cc9aa4af/5457feabe4b07e2441b108a9/1415052977044/Portraits-15.jpg" title="" alt="">
                <h2 class="h2-catalog">Product</h2>
                <span>Marque : Tramadol</span>
                <br>
                <span>Nb de pts : <input readonly type="number" class="nb-point" value="418"/></span>
                <hr>
                <p class="info-product">
                    <span class="quantity-text"><input type="number" value="1" class="quantity"></span>
                    <button class="btn-floating waves-effect waves-light btn-quantity add"><i class="material-icons">add</i></button>
                    <button class="btn-floating waves-effect waves-light btn-quantity remove"><i class="material-icons minus">-</i></button>
                </p>
            </div>
        </div>
    </div>
    <div class="center-align mt20 mb20">
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
    -->
@endsection

@section('specific-js')
    <script src="{{ asset('js/client/catalogue.js') }}"></script>
    <script src="{{ asset('js/client/nouislider.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js"></script>
    <script>
        $(function(){
            // Début AJAX
            const CATALOG_PATH = '';
            let products = [];
            $.ajax({
                url:  CATALOG_PATH,
                type: 'POST',
                dataType: 'html',
                success: function (html, status) {
                    
                },
                error: function (result, status, error) {
                    
                }
            });

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
        });
    </script>
@endsection