@extends('layout')

@section('titre')
    Medpharmacom - L'annuaire du pharmacien et du médecin
@endsection

@section('specific-css')
    <link href="{{ asset('css/vitrine/home.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/assets/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
@endsection

@section('contenu')
    <div class="carousel carousel-slider center" id="slider-home">
        <div class="carousel-item white-text">
           <img class="responsive-img" src="http://www.otayrx.com/wp-content/themes/otaylakespharmacy/images/slides/2.jpg" alt="slide1" title="slide1">
        </div>
        <div class="carousel-item white-text">
            <img class="responsive-img" src="https://0201.nccdn.net/1_2/000/000/094/9a0/slider1_rev1.jpg" alt="slide3" title="slide3">
        </div>
    </div>
@endsection

@section('contenu-container')
        <div class="head-home">
            <div class="container">
                <h1>Services</h1>
                <p><strong>Medpharmacom</strong></p>
                <div class="divider-custom"></div>
                <p>Le répertoire du pharmacien</p>
                <div class="row">
                    <div class="col s12 m12 l4 xl4">
                        <div class="card">
                            <div class="card-image">
                                <i class="material-icons">location_on</i>
                            </div>
                            <a href="{{ url('laboratoire') }}"><span class="card-title">Recherchez intelligemment</span></a>
                            <div class="card-content">
                                <p>Trouver le laboratoire le plus adapté</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4 xl4">
                        <div class="card">
                            <div class="card-image">
                                <i class="material-icons">search</i>
                            </div>
                            <a href="{{ url('equivalence-generique') }}"><span class="card-title">Trouvez vos médicaments</span></a>
                            <div class="card-content">
                                <p>Notre fonction de recherche analyse votre requête de façon optimisée.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l4 xl4">
                        <div class="card">
                            <div class="card-image">
                                <i class="material-icons">add</i>
                            </div>
                            <a href="{{ url('news') }}"><span class="card-title">Un espace intuitif</span></a>
                            <div class="card-content">
                                <p>Notre site a été réalisé pour vous offrir la meilleure expérience utilisateur pour rendre votre navigation la plus simple possible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row alternate-div">
                <div class="container">
                    <div class="col s12">
                        <h1 class="center-align">Découvrez notre catalogue cadeaux</h1>
                        <div class="divider-custom"></div>
                        <p>
                            Un large catalogue est à votre disposition, votre fidélité est récompensé !
                            Des cadeaux pour tous selon vos envies.
                            Notre entreprise a pour vocation de vous fournir des produits de bonnes qualités.
                            <img class="responsive-img mt20" src="{{ asset('img/mockup.jpg') }}" alt="mockup" title="mockup"/>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h1 class="center-align">Nos partenaires</h1>
                        <div class="divider-custom"></div>
                        <div class="owl-carousel mt50">
                            <div>
                                <img src="{{ asset('img/abbott.png') }}" alt="abott-logo" title="abott-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/adp.jpg') }}" alt="adp-laboratoire-logo" title="adp-laboratoire-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/ea-pharma.png') }}" alt="ea-pharma-logo" title="ea-pharma-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/asepta.png') }}" title="asepta-logo" alt="asepta-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/astrazeneca.png') }}" alt="astrazeneca-logo" title="astrazeneca-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/bailleul.jpg') }}" alt="bailleul-logo" title="bailleul-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/arrow-laboratoire.jpg') }}" alt="arrow-gen-logo" title="arrow-gen-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/arkopharma.jpg') }}" title="arkopharma-logo" alt="arkopharma-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/alk.png') }}" title="alk-abello-logo" alt="alk-abello-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/bayer.png') }}" alt="bayer-logo" title="bayer-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/bioalliance.jpg') }}" title="bioalliance-logo" alt="bioalliance-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/biocodex.jpg') }}" alt="biocodex-logo" title="biocodex-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/assurance-maladie.jpg') }}" alt="assurance-maladie-logo" title="assurance-maladie-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/ansm.png') }}" alt="ansm-logo" title="ansm-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/has.jpg') }}" alt="has-logo" title="has-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/ministere.png') }}" alt="ministere-logo" title="ministere-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/eurekasante.jpg') }}" alt="eurekasante-logo" title="eurekasante-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/vidal.jpg') }}" alt="vidal-logo" title="vidal-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/doctissimo.png') }}" alt="doctissimo-logo" title="doctissimo-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/cyclamed.jpg') }}" alt="cyclamed-logo" title="cyclamed-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/lequotidiendumedecin.jpg') }}" alt="lequotidiendumedecin-logo" title="lequotidiendumedecin-logo"/>
                            </div>
                            <div>
                                <img src="{{ asset('img/lequotidiendupharmacien.jpg') }}" alt="lequotidiendupharmacien-logo" title="lequotidiendupharmacien-logo"/>
                            </div>
                        </div>
                    </div>
                    <!-- Découpage à faire -->
                    <div class="col s6 mt50">
                        <img src="{{ asset('img/12.PNG') }}"/>
                    </div>
                    <div class="col s6">
                        <img src="{{ asset('img/14.PNG') }}"/>
                    </div>
                    <!-- Découpage à faire -->
                </div>
            </div>
            <div class="row no-mb">
                <div class="parallax-container">
                    <div class="parallax">
                        <img src="http://www.atrix-recrutement-medical.com/images/atrix-international-medical-slide04.jpg">
                        <div class="centered">Une large gamme de produits vous y attend !</div>
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

        {{--
    @foreach($datas as $new) {

        {{ $new }}
    }
    @endforeach

    --}}
@endsection

@section('specific-js')
    <script src="{{ asset('js/vitrine/home.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.2/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items:4,
                loop:true,
                autoplay:true,
                autoplayTimeout:4000,
            });
            $('.parallax').parallax();
            if ($('#back-to-top').length) {
                var scrollTrigger = 100, // px
                    backToTop = function () {
                        var scrollTop = $(window).scrollTop();
                        if (scrollTop > scrollTrigger) {
                            $('#back-to-top').addClass('show');
                        } else {
                            $('#back-to-top').removeClass('show');
                        }
                    };
                backToTop();
                $(window).on('scroll', function () {
                    backToTop();
                });
                $('#back-to-top').on('click', function (e) {
                    e.preventDefault();
                    $('html,body').animate({
                        scrollTop: 0
                    }, 1500);
                });
            }
        });
    </script>
@endsection