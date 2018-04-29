@extends('layout-app')

@section('titre')
    Gestion encarts publicitaires
@endsection

@section('specific-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/gestion-commandes.css') }}">
@endsection

@section('specific-content-dashboard')
    <div class="container">
        <div class="col l12 center-align">
            <h1>Vous pouvez modifier sur cette page manuellement l'état d'une commande</h1>
            <div class="divider-custom"></div>
            <div id="live_data"></div>
        </div>
    </div>
@endsection

@section('specific-js')
    <script>

        fetch_data();

        function fetch_data()
        {
            const AJAX_PATH = '../../app/Controllers/CommandeController.php';
            $.ajax({
                url: AJAX_PATH,
                method:"POST",
                success:function(data){
                    $('#live_data').html(data);
                }
            });
        }
    </script>
@endsection