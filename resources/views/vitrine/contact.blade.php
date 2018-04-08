@extends('layout')

@section('titre')
    Contact
@endsection

@section('specific-css')
    <link href="{{ asset('css/vitrine/contact-form.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('contenu')

@endsection

@section('contenu-container')
    <div class="row">
        <div class="offset-l2 col m12 s12 l7" id="contact-form">
            <div id="info-contact">
                <h1>Formulaire de contact</h1>
                <p>Vous pouvez nous contacter pour des informations complémentaires via le formulaire de contact ci-dessous.</p>
                <p>Nous nous engageons à ce que vos données personnelles soient protégées, nous ne divulguerons pas vos informations de contact.</p>
            </div>
            <form class="col s12" id="contact">
                <div class="row">
                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">First Name</label>
                    </div>
                    <div class="input-field col s6 m6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">Telephone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 s12">
                        <i class="material-icons prefix">home</i>
                        <input id="addresse" type="text" class="validate">
                        <label for="addresse">Addresse</label>
                    </div>
                    <div class="input-field col s6 m6 s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="tel" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="message" class="materialize-textarea"></textarea>
                        <label for="message">Votre message</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
@endsection