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
            <h1>Vous pouvez modifier sur cette page manuellement l'état d'une commande</h1>
            <div class="divider-custom"></div>
            <form>
                <div class="left-align">
                    <button type="submit" value="Mettre à jour" class="btn waves-effect">Mettre à jour</button>
                </div>
                <table id="commandesTable" class="hover">
                    <thead>
                    <tr>
                        <th>id_commande</th>
                        <th>ref_id_utilisateur</th>
                        <th>ref_id_produit</th>
                        <th>date</th>
                        <th>statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>5</td>
                        <td>Montre Stella, Bracelet en cuir, blanc, ton argenté</td>
                        <td>22-03-2005</td>
                        <td contenteditable>En cours</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>8</td>
                        <td>Montre Stella, Bracelet en cuir, rose</td>
                        <td>01-11-2010</td>
                        <td contenteditable>Cloturé</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>8</td>
                        <td>Montre Stella, Bracelet en cuir, bleue</td>
                        <td>01-11-2010</td>
                        <td contenteditable>A vérifier</td>
                    </tr>
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
            $('#commandesTable').DataTable({
                "lengthChange": false,
                "bInfo": false,
                responsive: true
            });
        } );
    </script>
@endsection