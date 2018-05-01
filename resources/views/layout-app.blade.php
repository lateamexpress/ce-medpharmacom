<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<div class="row no-mb">
    <div class="col s2 no-pdr no-pdl" id="menu-left-admin">
        <div style="background: #2e3c54;" class="pdb20 pdt20 center-align">
            <h1 style="color: white;">Interface administrateur</h1>
        </div>
        <ul class="collapsible" data-collapsible="accordion" id="vertical-menu">
            <li class="vertical-menu-item">
               <a href="{{ url('admin/gestion-centres') }}"><i class="material-icons">school</i> Gestion des centres de formation</a>
            </li>
            <li class="vertical-menu-item">
               <a href="{{ url('admin/gestion-commandes') }}"><i class="material-icons">shopping_cart</i> Gestion des commandes</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('admin/gestion-encarts-publicitaires') }}"><i class="material-icons">library_add</i> Gestion des encarts publicitaires</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('admin/gestion-equivalences') }}"><i class="material-icons">healing</i> Gestion des équivalences génériques</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('admin/gestion-laboratoires') }}"><i class="material-icons">donut_small</i> Gestion des laboratoires</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('admin/gestion-visiteurs')}}"><i class="material-icons">people</i> Gestion du nombre de visiteurs</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('admin/gestion-partenaires')}}"><i class="material-icons">group_add</i> Gestion des partenaires</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('admin/gestion-produits')}}"><i class="material-icons">add_shopping_cart</i> Gestion des produits</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('admin/gestion-utilisateurs')}}"><i class="material-icons">person_pin</i> Gestion des utilisateurs</a>
            </li>
            <li class="vertical-menu-item">
                <a href="{{ url('logout')}}"><i class="material-icons">sync_disabled</i> Se déconnecter</a>
            </li>
        </ul>
    </div>
    <div class="col s10 no-pdl no-pdr" id="container-admin">
        <nav id="horizontal-menu-dashboard">
            <div class="nav-wrapper">
                <ul id="slide-out" class="side-nav">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="https://images.pexels.com/photos/370799/pexels-photo-370799.jpeg?cs=srgb&dl=abstract-art-background-370799.jpg&fm=jpg">
                            </div>
                            <a href="#!user"><img class="circle" src="https://n6-img-fp.akamaized.net/free-vector/doctor-character-background_1270-84.jpg?size=338&ext=jpg"></a>
                            <a href="#!name"><span class="white-text name">John Doe</span></a>
                            <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-centres') }}"><i class="material-icons">school</i> Centres de formation</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-commandes') }}"><i class="material-icons">shopping_cart</i> Commandes</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-encarts-publicitaires') }}"><i class="material-icons">library_add</i> Encarts publicitaires</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-equivalences') }}"><i class="material-icons">healing</i> Equivalences génériques</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-laboratoires') }}"><i class="material-icons">donut_small</i> Laboratoires</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-visiteurs')}}"><i class="material-icons">people</i> Nombre de visiteurs</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-partenaires')}}"><i class="material-icons">group_add</i> Partenaires</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-produits')}}"><i class="material-icons">add_shopping_cart</i> Produits</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/gestion-utilisateurs')}}"><i class="material-icons">person_pin</i> Utilisateurs</a>
                    </li>
                    <li>
                        <a href="{{ url('logout')}}"><i class="material-icons">sync_disabled</i> Se déconnecter</a>
                    </li>
                </ul>
                <ul>
                    <li class="ml10" id="menu-mobile" style="width: 25%;">
                        <a href="#" data-activates="slide-out" class="button-collapse"><i style="color: #A5A5A5" class="material-icons">menu</i></a>
                    </li>
                    <li id="logo-mobile" style="width: 70%;">
                        <a href="{{ url('admin') }}">
                            <img src="{{ asset('img/logo-new.jpg') }}" id="logo-mobile" alt="logo-entreprise" title="logo-entreprise"/>
                        </a>
                    </li>
                    <li id="logo-admin" style="margin-left:40%">
                        <a href="{{ url('admin') }}">
                            <img src="{{ asset('img/logo-new.jpg') }}" alt="logo-entreprise" title="logo-entreprise"/>
                        </a>
                    </li>
                    <li class="right settings-pc">
                        <a class="dropdown-button" href="#!" data-activates="dropdown1">
                            <img src="https://cdn2.iconfinder.com/data/icons/users-6/100/USER7-512.png" id="avatar-admin" alt="avatar-admin" title="avatar-admin" class="circle">
                            <i class="material-icons right" style="color: #A5A5A5">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
       <div id="specific-admin-container" class="mt5">
           @yield('specific-content-dashboard')
       </div>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="{{ route('logout') }}">Deconnexion</a></li>
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