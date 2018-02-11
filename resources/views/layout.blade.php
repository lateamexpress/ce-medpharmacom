<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('titre')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    </head>
<body>
    <div class="container">
    @yield('contenu')
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>