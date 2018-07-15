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
    <div style="min-height: 110vh;">
        <div class="row">
            <div class="col s6 l3">
                <div class="panel-home">
                    <a href="{{ url('catalogue') }}">Catalogue</a>
                </div>
            </div>
            <div class="col s6 l3">
                <div class="panel-home">
                    <a href="{{ url('mes-commandes') }}">Mes sélections</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <h1 class="center-align">Informations</h1>
                <div class="divider-custom"></div>
                <p class="center-align mb50">Découvrez notre gamme de cadeaux d'affaires incentives</p>
                <div id="header-home">
                    <div class="col l4">
                        <img class="responsive-img partners" src="{{ asset('img/partenaires/727.png') }}">
                    </div>
                    <div class="col l4">
                        <img class="responsive-img partners" src="{{ asset('img/partenaires/alpina.png') }}">
                    </div>
                    <div class="col l4">
                        <img class="responsive-img partners" src="{{ asset('img/partenaires/braun.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="col l4">
                    <img class="responsive-img partners" src="{{ asset('img/partenaires/delonghi.png') }}">
                </div>
                <div class="col l4">
                    <img class="responsive-img partners" src="{{ asset('img/partenaires/kenwood.png') }}">
                </div>
                <div class="col l4">
                    <img class="responsive-img partners" src="{{ asset('img/partenaires/kreafunk.png') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="col l4">
                    <img class="responsive-img partners" src="{{ asset('img/partenaires/frederique.png') }}">
                </div>
                <div class="col l4">
                    <img class="responsive-img partners" src="{{ asset('img/partenaires/trimm.png') }}">
                </div>
                <div class="col l4">
                    <img class="responsive-img partners" src="{{ asset('img/partenaires/weber.png') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="col l4">
                    <img class="responsive-img partners" src="{{ asset('img/partenaires/meistersinger.png') }}">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 120px;">
            <div class="col s12">
                <div class="owl-carousel owl-theme">
                    <div class="col l4">
                        <img class="partnersNoBorder" src="{{ asset('img/partenaires/at.JPG') }}">
                    </div>
                    <div class="col l4">
                        <img class="partnersNoBorder" src="{{ asset('img/partenaires/hairspring.png') }}">
                    </div>
                    <div class="col l4">
                        <img class="partnersNoBorder" src="{{ asset('img/partenaires/Konjac-HiRes.jpg') }}">
                    </div>
                    <div class="col l4">
                        <img class="partnersNoBorder" src="{{ asset('img/partenaires/Samsonite.png') }}">
                    </div>
                    <div class="col l8">
                        <img class="partnersNoBorder" src="{{ asset('img/partenaires/theoriginalbb.png') }}">
                    </div>
                    <div class="col l4">
                        <img class="partnersNoBorder" src="{{ asset('img/partenaires/Tumi.png') }}">
                    </div>
                    <div class="col l4">
                        <img class="partnersNoBorder" src="{{ asset('img/partenaires/wetbrush.png') }}">
                    </div>
                    <!--
                    <div class="col l4"><img src="{{ asset('img/vertbaudet.png') }}" class="test-img" alt="vertbaudet" title="vertbaudet"/></div>
                    <div class="col l4"><img src="{{ asset('img/Le_Creuset_Logo.png') }}" class="test-img" alt="Le_Creuset_Logo" title="Le_Creuset_Logo"/></div>
                    <div class="col l4"><img src="{{ asset('img/swarovski.png') }}" class="test-img" alt="swarovski" title="swarovski"/></div>
                    <div class="col l4"><img src="{{ asset('img/DELSEY_LOGO.png') }}" class="test-img" alt="Delsey logo" title="Delsey logo"/></div>
                    <div class="col l4"><img src="{{ asset('img/longchamp.png') }}" class="test-img" alt="longchamp" title="longchamp"/></div>
                    <div class="col l4"><img src="{{ asset('img/apple.png') }}"  class="responsive-img test-img" alt="apple" title="apple"/></div>
                    -->
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
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });
    </script>
@endsection