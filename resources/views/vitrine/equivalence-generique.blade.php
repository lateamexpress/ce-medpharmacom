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
            <form method="post" action="{{ route('equivalence-medicament.store') }}">
                {{ csrf_field() }}
                <div class="input-field col s12 card-search">
                    <i class="material-icons prefix">search</i>
                    <input id="equivalence-generique" name="equivalence-generique" type="text" class="validate">
                    <label for="equivalence-generique">Equivalence générique</label>
                    <div class="btn-equivalence-generique">
                        <button type="submit" class="waves-effect waves-light btn">Afficher le générique</button>
                        <button type="submit" class="waves-effect waves-light btn">Afficher le médicament</button>
                    </div>
                </div>
                <div class="row">
                    @isset($medicament)
                        @foreach ($medicament as $med)
                            <div class="col s3 m3 mt50">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                        <span class="card-title">{{ $med['actif'] }}</span>
                                    </div>
                                    <div class="card-content">
                                        <p>{{ $med['title'] }}</p>
                                        <p>{{ $med['classe'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                    @isset($generique)
                            @foreach ($generique as $gen)
                                <div class="col s3 m3 mt50">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="http://saint-andre-d-olerargues.com/wpdossier/wp-content/uploads/2015/03/paracetamole.jpg">
                                            <span class="card-title">{{ $gen['actif'] }}</span>
                                        </div>
                                        <div class="card-content">
                                            <p>{{ $gen['title'] }}</p>
                                            <p>{{ $gen['classe'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    @endisset
                </div>
            </form>
        </div>
    </div>
@endsection