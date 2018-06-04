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
            <form method="post" action="{{ url('admin/gestion-commandes/modifier/'.$commande['id_commande'])}}">
                @csrf
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
                    <tr>
                        <td>{{$commande['id_commande'] }}  <input type="hidden" name="id_commande" value="{{ $commande['id_commande'] }}"> </td>
                        <td>{{ $commande['ref_id_utilisateur'] }}  <input type="hidden" name="ref_id_utilisateur" value="{{ $commande['ref_id_utilisateur'] }}"> </td>
                        <td> {{ $commande['ref_id_produit'] }}  <input type="hidden" name="ref_id_produit" value="{{ $commande['ref_id_produit'] }}"> </td>
                        <td> {{ $commande['date'] }}  <input type="hidden" name="date" value="{{ $commande['date'] }}"> </td>
                        <td> {{ $commande['quantite'] }}  <input type="hidden" name="quantite" value="{{ $commande['quantite'] }}"></td>
                        <td contenteditable><input type="text" name="statut" value="{{ $commande['statut'] }}"> </td>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn waves-effect">Mettre à jour</button>
            </form>
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