@extends('layout-user')

@section('titre')
    Panier
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/panier.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <form method="POST" style="margin-top: 10%; min-height: 800px;" action="{{ url('mon-panier') }}">
        @csrf
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Cout</th>
                <th>Quantité</th>
                <th>Supprimer (?)</th>
            </tr>
            </thead>
            <tbody>
            @isset(Session::all()['produits'])
                @foreach(Session::all()['produits'] as $prod)
                    <tr class="rowProduit">
                        <td>{{ $prod['nom'] }}</td>
                        <td>{{ $prod['cout'] }} pts</td>
                        <td>{{ $prod['quantite'] }}</td>
                        <td><input class="deleteProduit" value="{{ $prod['idProduit'] }}" type="checkbox" id="{{ $prod['idProduit'] }}" /><label for="{{ $prod['idProduit'] }}"></label></td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
        <br>
        <div class="divider-custom" style="margin-left: 0;"></div>
        <br>
        <span>Total du panier : {{ $total }} pts</span>
        <br>
        <a class="btn btn-waves mt50" name="Commander" href="{{ url('enregistrer-commande') }}">Passer la commande</a>
    </form>
@endsection

@section('specific-js')
    <script>
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.deleteProduit').each(function () {
               $(this).on('click', function () {
                   let currentRow = $(this);
                   let produit = $(this).val();
                   $.ajax({
                       type:'POST',
                       url:'{{ url('mon-panier')}}',
                       data:{
                           produit: produit
                       },
                       success:function(data){
                           currentRow.parent().parent('.rowProduit').fadeOut();
                       }
                   });
               });
            });
        });
    </script>
@endsection