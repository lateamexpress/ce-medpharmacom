@extends('layout-app')

@section('titre')
    Formation
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('specific-content-dashboard')
    <!-- TO DO CONTENT DASHBOARD HOME -->
    <div class="row no-mb">
        <div class="col l3 m6 s12 block-home">
            <h1>Citation aléatoire</h1>
            <div class="divider-custom"></div>
            <p><span class="number">X</span> produits vendus</p>
        </div>
        <div class="col l3 s12 block-home">
            <h1>Total produits vendus</h1>
            <div class="divider-custom"></div>
            <p><span class="number">X</span> produits vendus</p>
        </div>
        <div class="col l3 s12 block-home">
            <h1>Total produits vendus</h1>
            <div class="divider-custom"></div>
            <p><span class="number">X</span> produits vendus</p>
        </div>
        <div class="col l3 s12 block-home">
            <h1>Total produits vendus</h1>
            <div class="divider-custom"></div>
            <p><span class="number">X</span> produits vendus</p>
        </div>
    </div>
    <div class="col s3 block-home block-graph">
        <h1>Récapitulatif des produits</h1>
        <div class="divider-custom mb20"></div>
        <canvas id="pie"></canvas>
    </div>
    <div class="col s3 block-home block-graph">
        <h1>Récapitulatif des produits</h1>
        <div class="divider-custom mb20"></div>
        <canvas id="line"></canvas>
    </div>
    <div class="col s3 block-home block-graph">
        <h1>Récapitulatif des produits</h1>
        <div class="divider-custom mb20"></div>
        <canvas id="horizontal-bar"></canvas>
    </div>
    <div class="col s3 block-home block-graph">
        <h1>Récapitulatif des produits</h1>
        <div class="divider-custom mb20"></div>
        <canvas id="polar-area"></canvas>
    </div>
    <div class="col s3 block-lg">
        <h1>Récapitulatif des produits</h1>
        <div class="divider-custom mb20"></div>
        <canvas id="doughnut"></canvas>
    </div>
@endsection

@section('specific-js')
    <script src="{{ asset('js/admin/admin.js') }}"></script>
@endsection