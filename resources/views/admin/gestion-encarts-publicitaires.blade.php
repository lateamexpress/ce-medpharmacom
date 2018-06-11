@extends('layout-app')

@section('titre')
    Gestion encarts publicitaires
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-encarts-publicitaires.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('specific-content-dashboard')
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">{{$pub}}
                <h1>Gestion des encarts publicitaires</h1>
                <p>Cette page vous permet de gérer l'ordre d'affichage de vos encarts publicitaires</p>
                <div>
                    <h1 class="left-align">Vitrine</h1>
                    <div class="input-field col s3">
                        <input type="text" name="nomImage" placeholder="Nom de l'image...">
                    </div>
                    <div class="input-field col s3">
                        <input type="text" name="lienImage" placeholder="Lien de l'image...">
                    </div>
                    <div class="input-field col s3">
                        <select>
                            <option value="" disabled selected>Actif ?</option>
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                    </div>
                    <div class="input-field col s3">
                        <button type="submit" class="btn waves-effect">Mettre à jour</button>
                    </div>
                    <table id="pubVitrineTable" class="hover">
                        <thead>
                        <tr>
                            <th>id_pub</th>
                            <th>nom</th>
                            <th>lien</th>
                            <th>ref_id_image</th>
                            <th>actif</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pub as $p)
                            <tr>
                                <td>{{ $p['id_pub'] }}</td>
                                <td>{{ $p['nom'] }}</td>
                                <td>{{ $p['lien'] }}</td>
                                <td>{{ $p['ref_id_image'] }}</td>
                                <td>{{ $p['actif'] }}</td>
                                <td><input type="checkbox" name="delete" value="{{ $pb['id_pub'] }}"><label for="{{ $pb['id_pub'] }}"></label></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <h1 class="left-align">App</h1>
                    <table id="pubAppTable" class="hover">
                        <thead>
                        <tr>
                            <th>id_pub</th>
                            <th>nom</th>
                            <th>lien</th>
                            <th>ref_id_image</th>
                            <th>actif</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td contenteditable>Pub 3</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td contenteditable>NULL</td>
                            <td><input type="checkbox" name="delete"  id="test5" value=""> <label for="test5"></label></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#pubAppTable, #pubVitrineTable').DataTable({
                "lengthChange": false,
                "bInfo": false,
                responsive: true
            });
            $('select').material_select();
        } );
    </script>
@endsection