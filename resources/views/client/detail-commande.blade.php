@extends('layout-user')

@section('titre')
    Détail commande
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/commande.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <form method="POST" action="{{ url('commande') }}">
        @csrf
        <div class="row" id="commande-recap" style="min-height: 70vh;">
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
                    @foreach($commandeProduit as $k => $prod)
                        <tr>
                            <td>
                                {{  $prod->produit->nom_produit }}
                            </td>
                            <td>
                                {{ $prod->produit->cout }} pts
                            </td>
                            <td>
                                {{ $prod['quantite'] }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </form>
@endsection

@section('specific-js')
    <script src="{{ asset('js/client/commande.js') }}"></script>
@endsection