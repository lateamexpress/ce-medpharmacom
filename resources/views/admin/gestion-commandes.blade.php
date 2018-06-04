@extends('layout-app')

@section('titre')
    Gestion encarts publicitaires
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-commandes.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('specific-content-dashboard')
    <div class="container">
        <div class="col l12 center-align">
            <table id="commandesTable" class="hover">
                <thead>
                <tr>
                    <th>id_commande</th>
                    <th>ref_nom_user</th>
                    <th>ref_nom_produit</th>
                    <th>date</th>
                    <th>quantité</th>
                    <th>statut</th>
                </tr>
                </thead>
                <tbody>
                @foreach($commande as $cmd)
                    <tr>
                        <td><a href="{{ url('/admin/gestion-commandes/'.$cmd['id_commande']) }}">{{ $cmd['id_commande'] }}</a></td>
                        <td>{{ $cmd['ref_id_utilisateur'] }}</td>
                        <td> {{ $cmd['ref_id_produit'] }}</td>
                        <td> {{ $cmd['date'] }}</td>
                        <td> {{ $cmd['quantite'] }}</td>
                        <td> {{ $cmd['statut'] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#commandesTable').DataTable({
                "lengthChange": false,
                "bInfo": false,
                responsive: true
            });
        } );
    </script>
@endsection