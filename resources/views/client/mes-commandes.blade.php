@extends('layout-user')

@section('titre')
    Mes commandes
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/mes-commandes.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('contenu-container')
    <div class="row mt50" id="mes-commandes-block">
        <div class="col s12">
            <table id="mes-commandes">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Date</th>
                    <th>Statut</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Stylo Medpharmacom</td>
                    <td>2009/01/12</td>
                    <td>En cours de validation</td>
                </tr>
                <tr>
                    <td>Etui</td>
                    <td>2010/02/11</td>
                    <td>Validé</td>
                </tr>
                <tr>
                    <td>T-shirt</td>
                    <td>2002/01/01</td>
                    <td>Livré</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(function(){
            $('#mes-commandes').DataTable();
        });
    </script>
@endsection