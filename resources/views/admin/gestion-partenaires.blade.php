@extends('layout-app')

@section('titre')
    Gestion encarts publicitaires
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-partners.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('specific-content-dashboard')
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <h1>Gestion des encarts publicitaires</h1>
                <p>Cette page vous permet de gérer l'ordre d'affichage de vos partenaires</p>
                <div>
                    <h1 class="left-align">Vitrine</h1>
                    <table id="partnersVitrineTable" class="hover">
                        <thead>
                        <tr>
                            <th>id_partner</th>
                            <th>nom</th>
                            <th>lien</th>
                            <th>ref_id_image</th>
                            <th>actif</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td contenteditable>Hot Spring</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td><button class="waves-light btn-floating red"><i class="material-icons">delete_forever</i></button></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td contenteditable>Swarovski</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td><button class="waves-light btn-floating red"><i class="material-icons">delete_forever</i></button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <h1 class="left-align">App</h1>
                    <table id="partnersAppTable" class="hover">
                        <thead>
                        <tr>
                            <th>id_partner</th>
                            <th>nom</th>
                            <th>lien</th>
                            <th>ref_id_image</th>
                            <th>actif</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td contenteditable>Tauni</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td><button class="waves-light btn-floating red"><i class="material-icons">delete_forever</i></button></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td contenteditable>DELSEY</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td><button class="waves-light btn-floating red"><i class="material-icons">delete_forever</i></button></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#partnersAppTable, #partnersVitrineTable').DataTable({
                "lengthChange": false,
                "bInfo": false,
                responsive: true
            });
        } );
    </script>
@endsection