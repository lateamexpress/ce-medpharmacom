@extends('layout-user')

@section('titre')
    Panier
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/panier.css') }}">
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
                    <tr>
                        <td>{{ $prod['nom'] }}</td>
                        <td>{{ $prod['cout'] }}</td>
                        <td>{{ $prod['quantite'] }}</td>
                        <td><input type="checkbox" name="produit" id="{{$prod['idProduit']}}" class="produit" value="{{ $prod['idProduit'] }}"/> <label for="{{$prod['nom']}}"></label></td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
        <br>
        <div class="divider-custom" style="margin-left: 0;"></div>
        <br>
        <span>Total du panier: </span>
        <br>
        <input type="submit" class="btn btn-waves mt50" value="Passer la commande" name="Commander">
    </form>
@endsection

@section('specific-js')
    <script>
        $(function () {
            $('.produit').each(function () {
               $(this).on('click', function () {
                  alert('bro');
                   $.ajax({
                       type:'POST',
                       url:'{{ url('mon-panier')}}',
                       data:{
                           test: 'chalachiasse'
                       },
                       success:function(data){
                           alert(data.success);
                       }
                   });


               });
            });
        });
    </script>
@endsection