@extends('layout')

@section('titre')
    Medpharmacom - L'annuaire du pharmacien et du médecin
@endsection

@section('specific-css')
    <link href="{{ asset('css/vitrine/home.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('contenu')
    <div class="carousel carousel-slider center">
        <div class="carousel-item white-text">
           <img class="responsive-img" src="http://www.otayrx.com/wp-content/themes/otaylakespharmacy/images/slides/2.jpg" alt="slide1" title="slide1">
        </div>
        <div class="carousel-item white-text">
            <img class="responsive-img" src="https://www.letsenrol.com/blog/wp-content/uploads/2017/06/pharmacist-300x130.jpg" alt="slide2" title="slide2">
        </div>
        <div class="carousel-item white-text">
            <img class="responsive-img" src="https://0201.nccdn.net/1_2/000/000/094/9a0/slider1_rev1.jpg" alt="slide3" title="slide3">
        </div>
    </div>
@endsection

@section('contenu-container')
        <div class="head-home">
            <h1>Services</h1>
            <p><strong>Medpharmacom</strong></p>
            <div class="divider-custom"></div>
            <p>Le répertoire du pharmacien</p>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <i class="material-icons">location_on</i>
                        </div>
                        <span class="card-title">Recherchez intelligemment</span>
                        <div class="card-content">
                            <p>Trouver le laboratoire le plus adapté</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <i class="material-icons">search</i>
                        </div>
                        <span class="card-title">Trouvez vos médicaments</span>
                        <div class="card-content">
                            <p>Notre fonction de recherche analyse votre requête de façon optimisée.</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <i class="material-icons">add</i>
                        </div>
                        <span class="card-title">Un espace intuitif</span>
                        <div class="card-content">
                            <p>Notre site a été réalisé pour vous offrir la meilleure expérience utilisateur possible pour rendre votre navigation la plus simple possible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- TO DO RESPONSIVE LOGO
    <div class="row">
        <div class="col s12 row-logo">
            <div class="col s1">
                <img class="responsive-img logo-sante" src="{{ asset('img/cpam-logo.png') }}" alt="assurance-maladie-logo" title="assurance-maladie-logo"/>
            </div>
            <div class="col s1">
                <img class="responsive-img logo-sante" src="{{ asset('img/ansm.png') }}" alt="ansm-logo" title="ansm-logo"/>
            </div>
            <div class="col s1">
                <img class="responsive-img logo-sante" src="{{ asset('img/ministere.png') }}" alt="ministere-logo" title="ministere-logo"/>
            </div>
            <div class="col s1">
                <img class="responsive-img logo-sante" src="{{ asset('img/cpam-logo.png') }}" alt="assurance-maladie-logo" title="assurance-maladie-logo"/>
            </div>
        </div>
    </div>
    --}}
@endsection

@section('specific-js')
    <script src="{{ asset('js/vitrine/home.js') }}"></script>
@endsection