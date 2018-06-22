@extends('layout-app')

@section('titre')
    Gestion encarts publicitaires
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-produits.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('specific-content-dashboard')
    <div class="col s12">
        <div class="container">
            <h1>Gestion des produits</h1>
            <div class="divider-custom"></div>
            <p>Sur cette page vous pouvez gérer vos produits en important via un fichier Excel ou en voulant modifier, supprimer ou insérer un nouveau produit.</p>
            <form action="{{  url('admin/gestion-produits') }}" method="post">
                <div class="file-field input-field col s12 l4">
                    <div class="btn">
                        <span>File</span>
                        <input name="fileName" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <button type="submit" class="waves-effect btn-floating blue"><i class="material-icons">edit</i></button>
                <table id="productsTable" class="hover">
                    <thead>
                    <tr>
                        <th>id_produit</th>
                        <th>nom_produit</th>
                        <th>cout</th>
                        <th>description</th>
                        <th>ref_id_image</th>
                        <th>ref_id_categorie</th>
                        <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($produit as $prod)
                        <tr>
                            <td><a href="{{ url('/admin/gestion-produits/'.$prod['id_produit']) }}">{{ $prod['id_produit'] }}</a></td>
                            <td>{{ $prod['nom_produit'] }}</td>
                            <td>{{ $prod['cout'] }}</td>
                            <td>{{ $prod['description'] }}</td>
                            <td>{{ $prod['ref_id_image'] }}</td>
                            <td>{{ $prod['ref_id_catégorie'] }}</td>
                            <td><button class="waves-light btn-floating red"><i class="material-icons">delete_forever</i></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#productsTable').DataTable({
                "lengthChange": false,
                "bInfo": false,
                responsive: true
            });
            $('#vertical-menu').css('min-height', '400vh');
        } );
    </script>
@endsection