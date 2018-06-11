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
        <table id="commandesTable" class="hover">
            <thead>
            <tr>
                <th>id_generique</th>
                <th>CIP7</th>
                <th>title</th>
                <th>princeps</th>
                <th>ref_id_image</th>
                <th>ref_id_labo</th>
                <th>classe</th>
                <th>actif</th>
                <th>exip</th>
                <th>statut</th>
                <th>tx</th>
                <th>presentation</th>
                <th>precaution</th>
                <th>grosse</th>
                <th>effets</th>
                <th>indic</th>
                <th>patho</th>
            </tr>
            </thead>
            <tbody>
            @foreach($generique as $gen)
                <tr>
                    <td><a href="{{ url('/admin/gestion-equivalences/'.$gen['id_generique']) }}">{{ $gen['id_generique'] }}</a></td>
                    <td>{{ $gen['CIP7'] }}</td>
                    <td>{{ $gen['title'] }}</td>
                    <td>{{ $gen['princeps'] }}</td>
                    <td>{{ $gen['ref_id_image'] }}</td>
                    <td>{{ $gen['ref_id_labo'] }}</td>
                    <td>{{ $gen['classe'] }}</td>
                    <td>{{ $gen['actif'] }}</td>
                    <td>{{ $gen['exip'] }}</td>
                    <td>{{ $gen['statut'] }}</td>
                    <td>{{ $gen['tx'] }}</td>
                    <td>{{ $gen['presentation'] }}</td>
                    <td>{{ $gen['precaution'] }}</td>
                    <td>{{ $gen['grosse'] }}</td>
                    <td>{{ $gen['effets'] }}</td>
                    <td>{{ $gen['indic'] }}</td>
                    <td>{{ $gen['patho'] }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
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
        });
    </script>
@endsection