@extends('layout-app')

@section('titre')
    Gestion des laboratoires
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-produits.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('specific-content-dashboard')
    <form method="post" action="{{ url('admin/gestion-laboratoires/modifier/'.$laboratoire['id_laboratoire'])}}">
        @csrf
        <div class="col s12">
            <table id="commandesTable" class="hover">
                <thead>
                <tr>
                    <th>id_laboratoire</th>
                    <th>nom</th>
                    <th>ref_id_image</th>
                    <th>adresse</th>
                    <th>tel</th>
                    <th>fax</th>
                    <th>site</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $laboratoire['id_laboratoire'] }}</td>
                    <td><input type="text" name="nom" value="{{ $laboratoire['nom'] }}"></td>
                    <td><input type="text" name="ref_id_image" value="{{ $laboratoire['ref_id_image'] }}"></td>
                    <td><input type="text" name="adresse" value="{{ $laboratoire['adresse'] }}"></td>
                    <td><input type="text" name="tel" value="{{ $laboratoire['tel'] }}"></td>
                    <td><input type="text" name="fax" value="{{ $laboratoire['fax'] }}"></td>
                    <td><input type="text" name="site" value="{{ $laboratoire['site'] }}"></td>
                </tr>
                </tbody>
            </table>
            <button type="submit" class="btn waves-effect">Mettre à jour</button>
        </div>
    </form>
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