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
    <form method="POST" style="margin-top: 10%;" action="{{ url('mon-panier') }}">
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
            @foreach(Session::all()['produits'] as $prod)
                <tr>
                    <td>{{ $prod['nom'] }}</td>
                    <td>{{ $prod['cout'] }}</td>
                    <td>{{ $prod['quantite'] }}</td>
                    <td><input type="checkbox" name="produit" id="{{$prod['produit']}}" class="produit" value="{{ $prod['produit'] }}"/> <label for="{{$prod['produit']}}"></label></td>
                </tr>
            @endforeach
            </tbody>
        </table>
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