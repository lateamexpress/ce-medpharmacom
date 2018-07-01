@extends('layout-user')

@section('titre')
    Catalogue
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/commande.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <form method="POST" action="{{ url('client/commande') }}">
        <div class="row" id="commande-recap">
            <div class="col s12">
                <h1 class="center-align">Voici un récapitulatif de la commande effectuée pour ce produit </h1>
                <div class="divider-custom"></div>
                <table class="highlight responsive-table mt20">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Cout</th>
                        <th>Quantite</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(Session::all()['produits'] as $prod)
                        <tr>
                            <td>{{ $prod['nom'] }}</td>
                            <td>{{ $prod['cout'] }}</td>
                            <td>{{ $prod['quantite'] }}</td>
                        </tr>
                    @endforeach
                    <?php
                        var_dump(session()->get('produits')[0]['produit']);
                    ?>
                    </tbody>
                </table>
                <div id="infos-cmd">
                    <a class="waves-effect waves-light btn" href="{{url('mes-commandes')}}">Envoyer ma demande</a>
                    <blockquote>Apres avoir envoyé votre demande, merpharmacom validera votre achat sous 48h, le total est de : METTRE VALUE</blockquote>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('specific-js')
    <script src="{{ asset('js/client/commande.js') }}"></script>
@endsection