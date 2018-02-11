<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('titre')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
<body>
<nav id="menu">
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="left hide-on-med-and-down li-menu">
            <li><a href="/">Accueil</a></li>
            <li><a href="/formation">Formation</a></li>
            <li><a href="/news">Actualités</a></li>
            <li><a href="/equivalence-generique">Equivalence générique</a></li>
            <li><a href="/laboratoire">Laboratoire</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
</nav>
    @yield('contenu')
<div class="container">
    @yield('contenu-container')
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>