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
                <div class="file-field input-field col s6">
                    <div class="btn">
                        <span>Upload CSV</span>
                        <input name="fileCsv" type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
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
                        @foreach($utilisateur as $user)
                        <tr>
                            <td><a href="{{ url('/admin/gestion-utilisateurs/'.$user['id_utilisateur']) }}">{{ $user['id_utilisateur'] }}</a></td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['password'] }}</td>
                            <td>{{ $user['nom'] }}</td>
                            <td contenteditable>{{ $user['prenom'] }}</td>
                            <td>{{ $user['tel'] }}</td>
                            <td>{{$user['adresse']}}</td>
                            <td>{{$user['code_postal']}}</td>
                            <td>{{ $user['ville'] }}</td>
                            <td>{{ $user['nbr_point'] }}</td>
                            <td>{{ $user['role'] }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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