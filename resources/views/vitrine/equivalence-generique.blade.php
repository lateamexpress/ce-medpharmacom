@extends('layout')

@section('titre')
    Equivalence générique
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vitrine/equivalence-generique.css') }}">
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
                    <label for="equivalence-generique">Equivalence générique</label>
                    <div class="btn-equivalence-generique">
                        <button type="submit" class="waves-effect waves-light btn">Afficher le générique</button>
                        <button type="submit" class="waves-effect waves-light btn">Afficher le médicament</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3 m3 mt50">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                <span class="card-title">Doliprane</span>
                            </div>
                            <div class="card-content">
                                <p>Description du produit...</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Link sur le produit ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s3 m3 mt50">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                <span class="card-title">Doliprane</span>
                            </div>
                            <div class="card-content">
                                <p>Description du produit...</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Link sur le produit ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s3 m3 mt50">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                <span class="card-title">Doliprane</span>
                            </div>
                            <div class="card-content">
                                <p>Description du produit...</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Link sur le produit ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s3 m3 mt50">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                <span class="card-title">Doliprane</span>
                            </div>
                            <div class="card-content">
                                <p>Description du produit...</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Link sur le produit ?</a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection