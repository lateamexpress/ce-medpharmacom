<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('titre')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li class="li-menu"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="li-menu"><a href="{{ url('formation') }}">Formation</a></li>
                    <li class="li-menu"><a href="{{ url('news') }}">Actualités</a></li>
                    <li class="li-menu"><a href="{{ url('equivalence-generique') }}">Equivalence générique</a></li>
                    <li class="li-menu"><a href="{{ url('laboratoire') }}">Laboratoire</a></li>
                    <li class="li-menu"><a href="{{ url('contact') }}">Contact</a></li>
                    <li class="li-menu"><a href="#" data-activates="slide-out" class="button-collapse-side right"><i class="material-icons">menu</i></a></li>
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
            <li><a href="{{ url('login') }}">Espace réservé <i class="material-icons">people</i></a></li>
        </ul>
        <!-- END SIDE NAV -->
        @yield('contenu')
        <div class="container">
            @yield('contenu-container')
        </div>
        <footer class="page-footer grey darken-3">
            <div class="container container-footer">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quam mauris, lobortis at dictum vitae, vestibulum a purus. In ac ornare ante.</p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright grey darken-4">
                <div class="container">
                    © 2018 Copyright Medpharmacom.fr - Created by <a target="_blank" href="https://www.linkedin.com/in/k%C3%A9vin-dintanavong-539049115/">Kévin Dintanavong</a>
                </div>
            </div>
        </footer>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('specific-js')
</body>
</html>