@extends('layout-app')

@section('titre')
    Gestion des laboratoires
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
                <th>id_laboratoire</th>
                <th>nom</th>
                <th>ref_id_image</th>
                <th>adresse</th>
                <th>tel</th>
                <th>faxe</th>
                <th>site</th>
            </tr>
            </thead>
            <tbody>
            @foreach($laboratoire as $lab)
                <tr>
                    <td><a href="{{ url('/admin/gestion-laboratoires/'.$lab['id_laboratoire']) }}">{{ $lab['id_laboratoire'] }}</a></td>
                    <td>{{ $lab['nom'] }}</td>
                    <td>{{ $lab['ref_id_image'] }}</td>
                    <td>{{ $lab['adresse'] }}</td>
                    <td>{{ $lab['tel'] }}</td>
                    <td>{{ $lab['faxe'] }}</td>
                    <td>{{ $lab['site'] }}</td>
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