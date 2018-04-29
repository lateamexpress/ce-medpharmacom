@extends('layout-app')

@section('titre')
    Gestion encarts publicitaires
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-encarts-publicitaires.css') }}">
@endsection

@section('specific-content-dashboard')
    <div class="col s12 large-block">
        <div class="container" id="block-encarts">
            <h1>Gestion des encarts publicitaires</h1>
            <div class="divider-custom"></div>
            <p>Cette page vous permet de gérer l'ordre d'affichage de vos encarts publicitaires</p>
            <div class="col s10">
                <select id="contentlist" class="browser-default mt20" multiple="multiple">
                    <option value="1">Pub. 1</option>
                    <option value="2">Pub. 2</option>
                    <option value="3">Pub. 3</option>
                    <option value="4">Pub. 4</option>
                    <option value="5">Pub. 5</option>
                </select>
                <button class="btn waves-effect waves-light mt20" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
            <div class="col s2">
                <button id="up" class="waves-effect waves-light btn mt20"><i class="material-icons">arrow_drop_up</i></button>
                <div class="clearfix"></div>
                <button id="down" class="waves-effect waves-light btn mt20"><i class="material-icons">arrow_drop_down</i></button>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="{{ asset('js/admin/gestion-encarts-publicitaires.js') }}"></script>
@endsection