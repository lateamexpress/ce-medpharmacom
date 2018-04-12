@extends('layout')

@section('titre')
    Laboratoire
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vitrine/laboratoire.css') }}">
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div class="row">
        <div class="offset-l2 col m12 s12 l7" style="margin-top: 75px; margin-bottom: 50vh;">
            <form method="POST">
                <div class="input-field col s12 card-search">
                    <i class="material-icons prefix">search</i>
                    <input id="equivalence-generique" type="text" class="validate">
                    <label for="equivalence-generique">Rechercher les laboratoires</label>
                    <div class="btn-laboratoire">
                        <button type="submit" class="waves-effect waves-light btn">Afficher les résultats</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4 m4 mt50">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://www.insights.com/media/1097/client-logos-astrazeneca-transparent.png?width=300&height=200&rnd=131399128710000000">
                                <span class="card-title">AstraZeneca</span>
                            </div>
                            <div class="card-content">
                                <p>ASTRAZENECA GROUPE ASTRAZENECA</p>
                                <ul>
                                    <li>Tél : 0141294000</li>
                                    <li>FAX : 0141294001</li>
                                    <li>Adresse : 1 place Renault 92844, Rueil-Malmaison Cedex</li>
                                </ul>
                            </div>
                            <div class="card-action">
                                <a href="#">Lien laboratoire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection