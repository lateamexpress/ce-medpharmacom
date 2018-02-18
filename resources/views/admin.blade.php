@extends('layout-app')

@section('titre')
    Formation
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/admin.css') }}">
@endsection

@section('specific-content-dashboard')
    <!-- TO DO CONTENT DASHBOARD HOME -->
    <div class="col s3 block-home">
        <h1>Citation aléatoire</h1>
        <div class="divider-custom"></div>
        <p><span class="number">X</span> produits vendus</p>
    </div>
    <div class="col s3 block-home">
        <h1>Total produits vendus</h1>
        <div class="divider-custom"></div>
        <p><span class="number">X</span> produits vendus</p>
    </div>
    <div class="col s3 block-home">
        <h1>Total produits vendus</h1>
        <div class="divider-custom"></div>
        <p><span class="number">X</span> produits vendus</p>
    </div>
    <div class="col s3 block-home">
        <h1>Total produits vendus</h1>
        <div class="divider-custom"></div>
        <p><span class="number">X</span> produits vendus</p>
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
    <div class="col s6" id="block-table">
        <input type="search" class="right col s2" placeholder="Rechercher">
        <!-- INSERT DATAS -->
        <table id="recapitulatif-produits" class="responsive-table highlight bordered">
            <thead>
                <tr>
                    <th>ID Produit</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casquette</td>
                    <td>Vêtement</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Casquette</td>
                    <td>Vêtement</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Casquette</td>
                    <td>Vêtement</td>
                    <td>1000</td>
                </tr>
            </tbody>
        </table>
        <!-- INSERT DATAS -->
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
    <div class="col s3 block-lg">
        <h1>Récapitulatif des produits</h1>
        <div class="divider-custom mb20"></div>
        <canvas id="doughnut"></canvas>
    </div>
    <div class="col s3 block-md">
        <p class="stats">
            <span class="strong">50</span> commandes
        </p>
    </div>
    <div class="col s3 block-md mt5">
        <p class="stats">
          Graphisme
        </p>
    </div>
    <div class="col s1"></div>
@endsection

@section('specific-js')

@endsection