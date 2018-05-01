<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('specific-css')
</head>
<body>
<div class="preloader-wrapper big active" id="loader">
    <div class="spinner-layer spinner-custom">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div><div class="gap-patch">
            <div class="circle"></div>
        </div><div class="circle-clipper right">
            <div class="circle"></div>
        </div>
    </div>
</div>
<div id="container-all">
    <nav id="menu">
        <div class="nav-wrapper">
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/logo-new.jpg') }}" alt="medpharmacom-logo" title="medpharmacom-logo" id="logo-medpharmacom-menu" />
            </a>
            <ul id="nav-mobile" class="left">
                <li style="width:20%;"><a id="logo-home-pc" href="{{ url('/') }}"><img src="{{ asset('img/logo-new.jpg') }}" alt="medpharmacom-logo" title="medpharmacom-logo" id="logo-medpharmacom-menu-pc"/></a></li>
                <li class="li-menu"><a href="{{ url('/catalogue') }}">Catalogue</a></li>
                <li class="li-menu"><a href="{{ url('/mes-commandes') }}">Mes commandes</a></li>
                <li class="li-menu"><a href="{{ url('/mon-compte') }}">Mon compte</a></li>
                <li class="li-menu"><a href="http://medpharmacom.ipmeo.com">Retourner sur medpharmacom</a></li>
                <li class="li-menu"><a href="{{ url('logout') }}">Se déconnecter</a></li>
                <li class="li-menu" id="burger-menu"><a href="#" data-activates="slide-out" class="button-collapse-side right"><i class="material-icons">menu</i></a></li>
            </ul>
        </div>
    </nav>
    <!-- START SIDE NAV -->
    <ul id="slide-out" class="side-nav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="https://www.sciencedaily.com/images/2016/05/160504085309_1_900x600.jpg">
                </div>
                <img class="circle" alt="avatar-login" title="avatar-login" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/8c/8cd2d593555cf702a6cf8231bc105d1897987ebf_medium.jpg">
                <span id="title-side-nav">Admin Panel</span>
            </div>
        </li>
        <li><a href="{{ url('/catalogue') }}">Catalogue</a></li>
        <li><a href="{{ url('/mes-commandes') }}">Mes commandes</a></li>
        <li><a href="{{ url('/mon-compte') }}">Mon compte</a></li>
        <li><a href="http://medpharmacom.ipmeo.com">Retourner sur medpharmacom</a></li>
        <li><a href="{{ url('logout') }}">Se déconnecter</a></li>
    </ul>
    <!-- END SIDE NAV -->
    @yield('contenu')
    <div class="container">
        @yield('contenu-container')
    </div>
    <footer class="page-footer grey darken-3">
        <div class="container container-footer">
            <div class="row">
                <div class="col l4 s12">
                    <h5 class="white-text">A propos de Medpharmacom</h5>
                    <p class="grey-text text-lighten-4">Destinés aux professionnels de santé, Medpharmacom permet de trouver facilement toutes les équivalences génériques des médicaments.</p>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Nos différents sites</h5>
                    <p class="grey-text text-lighten-4"></p>
                    <ul>
                        <li><a href="medpharmacom.ipmeo.com">Notre site vitrine</a></li>
                        <li><a href="ce-medpharmacom.ipmeo.com">Notre application</a></li>
                    </ul>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">Nous contacter</h5>
                    <p class="grey-text text-lighten-4">53 Rue de Vauban 69006 Lyon</p>
                    <p class="grey-text text-lighten-4">Tel : 01 83 80 46 03 / 06 51 40 43 38 </p>
                    <p class="grey-text text-lighten-4">Siret : 812 261 535 Rcs Lyon</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright grey darken-4">
            <div class="container">
                © 2018 Copyright Medpharmacom.fr
                <a class="waves-effect waves-light btn btn-network" style="float: right;" href="https://fr.linkedin.com/company/medpharmacom"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <!-- Authors :
        Moché Matagrin
        Nicolas-Killian Duchassin
        https://www.linkedin.com/in/k%C3%A9vin-dintanavong-539049115/ Kévin Dintanavong
        -->
    </footer>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
@yield('specific-js')
</body>
</html>