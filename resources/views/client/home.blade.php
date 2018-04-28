@extends('layout-user')

@section('titre')
    Accueil
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/home.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div style="height: 70vh;">
        <div class="row">
            <div class="col s3">
                <div class="panel-home">
                    <a href="{{ url('catalogue') }}">Catalogue</a>
                </div>
            </div>
            <div class="col s3">
                <div class="panel-home">
                    <a href="{{ url('mes-commandes') }}">Mes sélections</a>
                </div>
            </div>
            <div class="col s6">
                <div class="card-right">
                    <div id="header-card">
                        Vos dernières sélections
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div id="header-home">
                    <h1>Informations</h1>
                    <div class="divider-custom"></div>
                    <p>Découvrez notre gamme de cadeaux d'affaires incentives</p>
                    <div class="owl-carousel owl-theme">
                        <div class="col l4"><img src="{{ asset('img/vertbaudet.png') }}" class="" alt="vertbaudet" title="vertbaudet"/></div>
                        <div class="col l4"><img src="{{ asset('img/Le_Creuset_Logo.png') }}" alt="Le_Creuset_Logo" title="Le_Creuset_Logo"/></div>
                        <div class="col l4"><img src="{{ asset('img/swarovski.png') }}" alt="swarovski" title="swarovski"/></div>
                        <div class="col l4"><img src="{{ asset('img/DELSEY_LOGO.png') }}" alt="Delsey logo" title="Delsey logo"/></div>
                        <div class="col l4"><img src="{{ asset('img/longchamp.png') }}" alt="longchamp" title="longchamp"/></div>
                        <div class="col l4"><img src="{{ asset('img/apple.png') }}"  class="responsive-img" alt="apple" title="apple"/></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin: 30,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });
        });
    </script>
@endsection