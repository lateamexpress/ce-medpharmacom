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
                        <th>date</th>
                        <th>statut</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$commande['id_commande'] }}  <input type="hidden" name="id_commande" value="{{ $commande['id_commande'] }}"> </td>
                        <td>{{ $commande->utilisateur->nom }}  <input type="hidden" name="ref_id_utilisateur" value="{{ $commande['ref_id_utilisateur'] }}"> </td>
                        <td> {{ $commande['date'] }}  <input type="hidden" name="date" value="{{ $commande['date'] }}"> </td>
                        <td>
                            <select name="statut">
                                <option id="option_1" value=""></option>
                                <option id="option_2" value=""></option>
                                <option id="option_3" selected value="{{ $commande['statut'] }}">{{ $commande['statut'] }}</option>
                                <option id="option_4" value=""></option>
                            </select>
                        </td>
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
            $('select').material_select();

        // Worst method... We must create a table and fetch the array... (lazy back)

        const optVal = document.querySelector('#option_3').value;
        switch(optVal) {
            case 'Validé':
                $('#option_1').text('En cours').val('En cours');
                $('#option_2').text('Annulé').val('Annulé');
                $('#option_4').text('Autre').val('Autre');
                $('select').material_select();
                break;
            case 'En cours':
                $('#option_1').text('Validé').val('Validé');
                $('#option_2').text('Annulé').val('Annulé');
                $('#option_4').text('Autre').val('Autre');
                $('select').material_select();
                break;
            case 'Annulé':
                $('#option_1').text('En cours').val('En cours');
                $('#option_2').text('Validé').val('Validé');
                $('#option_4').text('Autre').val('Autre');
                $('select').material_select();
                break;
                break;
            case 'Autre':
                $('#option_1').text('En cours').val('En cours');
                $('#option_2').text('Annulé').val('Annulé');
                $('#option_4').text('Validé').val('Validé');
                $('select').material_select();
                break;
            default:
                break;
        }
        });
    </script>
@endsection