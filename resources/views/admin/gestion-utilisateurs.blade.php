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
                <p>Cette page permet d'ajouter / modifier ou supprimer un utilisateur depuis une modale ou en insérant un fichier CSV.</p>

                <!-- Modal Trigger -->
                <a class="btn-floating waves-effect waves-light btn modal-trigger green" href="#modal1"><i class="material-icons">person_add</i></a>
                <a class="btn-floating waves-effect waves-light btn modal-trigger blue" href="#modal2"><i class="material-icons">edit</i></a>
                <a class="btn-floating waves-effect waves-light btn modal-trigger red" href="#modal3"><i class="material-icons">delete_forever</i></a>

                <form action="#">
                    <div class="file-field input-field col s10">
                        <div class="btn">
                            <span>File</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="waves-effect btn">Insérer</button>
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
                            <td>1</td>
                            <td>admin@admin.fr</td>
                            <td>$2y$10$YzM9YGTuRCqxujhdZPQRLuOWz6u14V3SUEW1sTAfuBUSimMlJgUF2</td>
                            <td>Noemie</td>
                            <td contenteditable>Treil</td>
                            <td>NULL</td>
                            <td>131 Marius Berliet</td>
                            <td>69008</td>
                            <td>Lyon</td>
                            <td>0</td>
                            <td>admin</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>users@users.com</td>
                            <td>$2y$10$YzM9YGT5dRuTvriskL50d44sBUSimMlJgUF2</td>
                            <td>Daums</td>
                            <td contenteditable>Keld</td>
                            <td>NULL</td>
                            <td>89 bd des etats unis</td>
                            <td>69008</td>
                            <td>Lyon</td>
                            <td>200</td>
                            <td>users</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Ajout d'un utilisateur</h4>
                        <div class="input-field col l6 s12 mt20">
                            <input id="prenom" name="prenom" type="text" class="validate">
                            <label for="prenom">Prénom</label>
                        </div>
                        <div class="input-field col l6 s12 mt20">
                            <input id="nom" name="nom" type="text" class="validate">
                            <label for="nom">Nom</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="password" type="password" class="validate">
                            <label for="password">Mot de passe</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="tel" type="text" class="validate">
                            <label for="tel">Tél</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="adresse" type="text" class="validate">
                            <label for="adresse">Adresse</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="cp" type="text" class="validate">
                            <label for="cp">Code postal</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="ville" type="text" class="validate">
                            <label for="ville">Ville</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="role" type="text" class="validate">
                            <label for="role">Role</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" value="Créer">
                    </div>
                </div>

                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <h4>Modification d'un utilisateur</h4>
                        <div class="input-field col l6 offset-l6 s12">
                            <input type="text" id="user-update" name="user-update" class="autocomplete">
                            <label for="user-update">Rechercher...</label>
                        </div>
                        <div class="input-field col l6 s12 mt20">
                            <input id="prenom" name="prenom" type="text" class="validate">
                            <label for="prenom">Prénom</label>
                        </div>
                        <div class="input-field col l6 s12 mt20">
                            <input id="nom" name="nom" type="text" class="validate">
                            <label for="nom">Nom</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="password" type="password" class="validate">
                            <label for="password">Mot de passe</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="tel" type="text" class="validate">
                            <label for="tel">Tél</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="adresse" type="text" class="validate">
                            <label for="adresse">Adresse</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="cp" type="text" class="validate">
                            <label for="cp">Code postal</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="ville" type="text" class="validate">
                            <label for="ville">Ville</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="role" type="text" class="validate">
                            <label for="role">Role</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" value="Modifier">
                    </div>
                </div>

                <!-- Modal Structure -->
                <div id="modal3" class="modal">
                    <div class="modal-content">
                        <h4>Suppression d'un utilisateur</h4>
                        <div class="input-field col l6 offset-l6 s12">
                            <input type="text" id="user-delete" name="user-delete" class="autocomplete">
                            <label for="user-delete">Rechercher...</label>
                        </div>
                        <div class="input-field col l6 s12 mt20">
                            <input id="prenom" name="prenom" type="text" class="validate">
                            <label for="prenom">Prénom</label>
                        </div>
                        <div class="input-field col l6 s12 mt20">
                            <input id="nom" name="nom" type="text" class="validate">
                            <label for="nom">Nom</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="password" type="password" class="validate">
                            <label for="password">Mot de passe</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="tel" type="text" class="validate">
                            <label for="tel">Tél</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="adresse" type="text" class="validate">
                            <label for="adresse">Adresse</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="cp" type="text" class="validate">
                            <label for="cp">Code postal</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="ville" type="text" class="validate">
                            <label for="ville">Ville</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="role" type="text" class="validate">
                            <label for="role">Role</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat" value="Supprimer">
                    </div>
                </div>
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