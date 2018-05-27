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
            <h1>Gestion des produits</h1>
            <div class="divider-custom"></div>
            <p>Sur cette page vous pouvez gérer vos produits en important via un fichier Excel ou en voulant modifier, supprimer ou insérer un nouveau produit.</p>
            <form action="#">
                <div class="file-field input-field col s12 l4">
                    <div class="btn">
                        <span>File</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </form>
            <br>
            <button type="submit" class="waves-effect btn-floating blue"><i class="material-icons">edit</i></button>
            <table id="productsTable" class="hover">
                <thead>
                <tr>
                    <th>id_produit</th>
                    <th>nom_produit</th>
                    <th>cout</th>
                    <th>description</th>
                    <th>ref_id_image</th>
                    <th>ref_id_categorie</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td contenteditable>Montre Cosmic Rock, Bracelet en métal, blanc, ton argenté</td>
                    <td contenteditable>279</td>
                    <td contenteditable>Resplendissez avec cette nouvelle montre – la première à être ornée des célèbres Ultrafine Crystal Rocks de Swarovski. Audacieuse et élégante, elle étincelle avec un somptueux revêtement de cristaux argentés. Le boîtier en acier inoxydable, le bracelet-jonc et le cadran en rayon de soleil blanc argenté complètent l’élégant design. Apportant une touche brillante de glamour à votre look de tous les jours, la montre associe parfaitement une esthétique moderne et notre qualité de renommée mondiale. Le bracelet-jonc est conçu pour s’adapter à tous les poignets, et sa longueur peut se régler facilement. Spécifications : Boîtier – 29 mm ; étanche jusqu’à 50 m ; Swiss made.</td>
                    <td contenteditable>NULL</td>
                    <td contenteditable>NULL</td>
                    <td><button class="waves-light btn-floating red"><i class="material-icons">delete_forever</i></button></td>
                </tr>
                <tr>
                    <td>20</td>
                    <td contenteditable>Montre Stella, Bracelet en cuir, blanc, ton argenté</td>
                    <td contenteditable>249</td>
                    <td contenteditable>Optez pour une pièce sophistiquée avec la nouvelle montre Stella. Somptueusement fuselée et élégante, elle vous accompagnera à la perfection du matin au soir. Le cadran en motif rayon de soleil blanc argenté est rehaussé par un boîtier en acier inoxydable, des cornes de forme ovale ornées de cristaux incolores sertis pavé, et un bracelet blanc en cuir véritable. Elle incarne à la perfection le style féminin raffiné. Spécifications : Boîtier – 29x35 mm ; étanche jusqu’à 30 m ; Swiss made. </td>
                    <td contenteditable>NULL</td>
                    <td contenteditable>NULL</td>
                    <td><button class="waves-light btn-floating red"><i class="material-icons">delete_forever</i></button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('specific-js')
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#productsTable').DataTable({
                "lengthChange": false,
                "bInfo": false,
                responsive: true
            });
        } );
    </script>
@endsection