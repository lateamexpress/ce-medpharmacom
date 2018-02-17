<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="{{ asset('css/style-connected.css') }}" rel="stylesheet" type="text/css" >
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
<div class="row no-mb">
    <div class="col s2 no-pdr no-pdl">
        <div id="logo-admin" class="pdb20 pdt20">
            <!-- INSERT LOGO COMPANY -->
            <a href="{{ url('admin') }}">
                <img src="" alt="logo-entreprise" title="logo-entreprise"/>
            </a>
            <!-- INSERT LOGO COMPANY -->
        </div>
        <ul class="collapsible" data-collapsible="accordion" id="vertical-menu">
            <li>
                <div class="collapsible-header"><a href=""><i class="material-icons">school</i>Gestion des centres de formation</a></div>
            </li>
            <li>
                <div class="collapsible-header"><a href=""><i class="material-icons">shopping_cart</i>Gestion des commandes</a></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">library_add</i>Gestion des encarts publicitaires</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">healing</i>Gestion des équivalences génériques</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">donut_small</i>Gestion des laboratoires</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">people</i>Gestion du nombre de visiteurs</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">group_add</i>Gestion des partenaires</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">add_shopping_cart</i>Gestion des produits</div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">person_pin</i>Gestion des utilisateurs</div>
            </li>
        </ul>
    </div>
    <div class="col s10 no-pdl no-pdr">
        <nav id="horizontal-menu-dashboard">
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">
                            <img src="http://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/d6/d6bb00249634bb8d1cffafd78b308740e2bf736f_full.jpg" id="avatar-admin" alt="avatar-admin" title="avatar-admin" class="circle">
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
       <div id="specific-admin-container">
           @yield('specific-content-dashboard')
       </div>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Paramètres</a></li>
            <li><a href="#!">Deconnexion</a></li>
        </ul>
    </div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
@yield('specific-js')
</body>
</html>