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
                @foreach($commande as $cmd)
                <tr>
                    <td><a href="{{ url('commande/'.$cmd['id_commande']) }}">{{ $cmd['id_commande'] }}</a></td>
                    <td>{{ $cmd['date'] }}</td>
                    <td>{{ $cmd['statut'] }}</td>
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
        $(function(){
            $('#mes-commandes').DataTable({
                "language": {
                    "info": "Affiche de _START_ sur _END_ pages ( _TOTAL_ résultats )",
                    "paginate": {
                        "previous": "Précédent",
                        "next": "Suivant"
                    }
                }
            });
        });
    </script>
@endsection