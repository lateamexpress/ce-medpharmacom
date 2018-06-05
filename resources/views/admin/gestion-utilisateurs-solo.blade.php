@extends('layout-app')

@section('titre')
    Gestion utilisateurs
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-utilisateurs.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('specific-content-dashboard')
    <div class="">
        <div class="row">
            <div class="col s12 center-align">
                <h1>Gestion des utilisateurs</h1>
                <div class="divider-custom"></div>
                 <form method="post" action="{{ url('admin/gestion-utilisateurs/modifier/'.$utilisateur['id_utilisateur'])}}">
                     @csrf
                     <div class="left-align">
                         <button type="submit" class="waves-effect btn">Modifier</button>
                     </div>
                    <table id="usersTable" class="hover">
                        <thead>
                        <tr>
                            <th>id_utilisateur</th>
                            <th>email</th>
                            <th>password</th>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>tel</th>
                            <th>adresse</th>
                            <th>code_postal</th>
                            <th>ville</th>
                            <th>nbr_point</th>
                            <th>role</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $utilisateur['id_utilisateur'] }}</td>
                            <td><input type="text" name="email" value="{{ $utilisateur['email'] }}"/> </td>
                            <td><input type="text" name="password" value="{{ $utilisateur['password'] }}"/></td>
                            <td><input type="text" name="nom" value="{{ $utilisateur['nom'] }}"/> </td>
                            <td><input type="text" name="prenom" value="{{ $utilisateur['prenom'] }}"/> </td>
                            <td><input type="text" name="tel" value="{{ $utilisateur['tel'] }}"/> </td>
                            <td><input type="text" name="adresse" value="{{$utilisateur['adresse']}}"/> </td>
                            <td><input type="text" name="code_postal" value="{{$utilisateur['code_postal']}}"/> </td>
                            <td><input type="text" name="ville" value="{{ $utilisateur['ville'] }}"/> </td>
                            <td><input type="text" name="nbr_point" value="{{ $utilisateur['nbr_point'] }}"/> </td>
                            <td><input type="text" name="role" value="{{ $utilisateur['role'] }}"/> </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
            $('input.autocomplete').autocomplete({
                data: {
                    "Apple": null,
                    "Microsoft": null,
                    "Google": 'https://placehold.it/250x250'
                },
                limit: 10,
                onAutocomplete: function(val) {
                    // Callback function when value is autcompleted.
                },
                minLength: 1,
            });
            $('#usersTable').DataTable({
                "lengthChange": false,
                "bInfo": false,
                responsive: true
            });
        });
    </script>
@endsection