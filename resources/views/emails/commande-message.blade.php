<p>{{ $user->prenom }}, {{ $user->nom }}</p>
<p>{{ $user->tel }}</p>
<p>{{ $user->adresse }}</p>
<p>{{ $user->code_postal }}, {{ $user->ville }}</p>
<p>{{ $user->nbr_point }}</p>

<p>Panier :</p>
@isset(Session::all()['produits'])
    @foreach(Session::all()['produits'] as $prod)
        <tr>
            <td>{{ $prod['nom'] }}</td>
            <td>{{ $prod['cout'] }}</td>
            <td>{{ $prod['quantite'] }}</td>
        </tr>
    @endforeach
@endisset
<p>Total :{{$total}}</p>