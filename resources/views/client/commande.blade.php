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
    <div class="row" id="commande-recap">
        <div class="col s12">
            <h1 class="center-align">Voici un récapitulatif de la commande effectuée pour ce produit</h1>
            <div class="divider-custom"></div>
            <table class="highlight responsive-table mt20">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Solde restant</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Stylo Medpharmacom</td>
                    <td>750</td>
                    <td>1000 - 750 = <b>250</b></td>
                </tr>
                </tbody>
            </table>
            <div id="infos-cmd">
                <a class="waves-effect waves-light btn mt20" href="{{url('mes-commandes')}}" class="">Envoyer ma demande</a>
                <blockquote>Apres avoir envoyer votre demande, merpharmacom validera votre achat sous 48h</blockquote>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="{{ asset('js/client/commande.js') }}"></script>
@endsection