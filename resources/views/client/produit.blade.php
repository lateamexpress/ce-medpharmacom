@extends('layout-user')

@section('titre')
    Nom du produit
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/client/produit.css') }}">
@endsection

@section('contenu-container')
    <div class="row" style="min-height: 80vh; margin-top: 100px;">
        <div class="col l6 s12">
            <img class="responsive-img materialboxed" src="https://cdn.shopify.com/s/files/1/0757/9123/products/linjer-classic-watch-34-rose-gold-tan-1-front_400x400_crop_center.jpg?v=1520751203"/>
        </div>
        <div class="col l6 s12">
            <div>
                <div class="right-align"><button class="btn" style="border-radius:1000px;" type="submit"><i class="material-icons">add_shopping_cart</i></button></div>
                <h1 style="font-weight: 700">ESPOIR</h1>
            </div>
            <h2 style="font-size: 15px;">Montre</h2>
            <span>Ref : AC964D44F24DFS25</span>
            <div class="description-produit mt20">
                <p>
                    Mauris et tincidunt nulla. Suspendisse porta nisl non volutpat interdum. Sed tristique nunc tellus, auctor accumsan lorem tempus non. Duis auctor vitae sem quis volutpat. Quisque malesuada orci sed rutrum dictum. Nunc quis sagittis tellus. Aliquam ac tellus nec quam varius aliquam at ac arcu. Donec ex nunc, congue at dictum vel, ultricies eget felis. Sed finibus magna ut tortor ullamcorper commodo. Suspendisse aliquam non felis ut viverra. Integer a ultricies nisi. In faucibus pellentesque fermentum. Fusce eget varius arcu, eu blandit nisi. Praesent mauris enim, accumsan egestas sapien et, dignissim vulputate ligula. Morbi bibendum orci id nisl mattis, quis venenatis massa consequat.
                </p>
            </div>
            <div class="right-align mt50">
                <span class="point-value">3000 points</span>
            </div>
        </div>
    </div>
@endsection

@section('specific-js')

@endsection