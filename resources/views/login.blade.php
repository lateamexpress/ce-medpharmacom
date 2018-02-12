<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('specific-css')
</head>
<body id="login">
<div id="overlay">
    <div class="container">
        <form method="POST" id="form-login" class="mt20">
            <div class="row">
                <h1>Espace client</h1>
                <div class="divider-custom"></div>
                <div class="col s12">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <small id="forgotten-password" class="right">Mot de passe oublié ?</small>
            </div>
            <button type="submit" class="waves-effect waves-light btn"><i class="material-icons left"></i>Se connecter</button>
        </form>
    </div>
    <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large">
            <i class="large material-icons">home</i>
        </a>
        <ul>
            <li><a href="{{ url('/') }}" class="btn-floating red"><i class="material-icons">school</i></a></li>
            <li><a href="{{ url('laboratoire') }}" class="btn-floating yellow darken-1"><i class="material-icons">local_pharmacy</i></a></li>
            <li><a href="{{ url('news') }}" class="btn-floating green"><i class="material-icons">publish</i></a></li>
            <li><a href="{{ url('equivalence-generique') }}" class="btn-floating blue"><i class="material-icons">search</i></a></li>
            <li><a href="{{ url('equivalence-generique') }}" class="btn-floating red"><i class="material-icons">contact_mail</i></a></li>
        </ul>
    </div>
</div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>