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
        <div>
            <form method="post" action="{{ url('admin/gestion-equivalences/modifier/'.$generique['id_generique'])}}">
                @csrf
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
                    <tr>
                        <td>{{ $generique['id_generique'] }}</td>
                        <td><input type="text" name="CIP7" value="{{ $generique['CIP7'] }}"></td>
                        <td><input type="text" name="title" value="{{ $generique['title'] }}"></td>
                        <td><input type="text" name="princeps" value="{{ $generique['princeps'] }}"></td>
                        <td><input type="text" name="ref_id_image" value="{{ $generique['ref_id_image'] }}"></td>
                        <td><input type="text" name="ref_id_labo" value="{{ $generique['ref_id_labo'] }}"></td>
                        <td><input type="text" name="classe" value="{{ $generique['classe'] }}"></td>
                        <td><input type="text" name="actif" value="{{ $generique['actif'] }}"></td>
                        <td><input type="text" name="exip" value="{{ $generique['exip'] }}"></td>
                        <td><input type="text" name="statut" value="{{ $generique['statut'] }}"></td>
                        <td><input type="text" name="tx" value="{{ $generique['tx'] }}"></td>
                        <td><input type="text" name="presentation" value="{{ $generique['presentation'] }}"></td>
                        <td><input type="text" name="precaution" value="{{ $generique['precaution'] }}"></td>
                        <td><input type="text" name="grosse" value="{{ $generique['grosse'] }}"></td>
                        <td><input type="text" name="effets" value="{{ $generique['effets'] }}"></td>
                        <td><input type="text" name="indic" value="{{ $generique['indic'] }}"></td>
                        <td><input type="text" name="patho" value="{{ $generique['patho'] }}"></td>
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
        });
    </script>
@endsection