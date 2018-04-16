@extends('layout')

@section('titre')
    Contact
@endsection

@section('specific-css')
    <link href="{{ asset('css/vitrine/contact-form.css') }}" rel="stylesheet" type="text/css" >
    <style>
        .invalid-feedback {
           color:red;
        }
    </style>
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
            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif
            <form class="col s12" id="contact" method="post" action="{{ route('contact.store') }}">
                {{ csrf_field() }}
                <div class="row">

                    <div class="input-field col l6 m6 s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" name="name" type="text" class="validate">
                        @if ($errors->has('name'))
                        <small class="form-text invalid-feedback">{{ $errors->first('name')}}</small>
                        @endif
                        <label for="icon_prefix">Nom *</label>
                    </div>
                    <div class="input-field col s6 m6 s12">
                        <i class="material-icons prefix">phone</i>
                        <input id="icon_telephone" name="tel" type="tel" class="validate">
                        <label for="icon_telephone">Telephone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 s12">
                        <i class="material-icons prefix">home</i>
                        <input id="addresse" name="address" type="text" class="validate">
                        <label for="addresse">Addresse</label>
                    </div>
                    <div class="input-field col s6 m6 s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" name="email" class="validate">
                        @if ($errors->has('email'))
                        <small class="form-text invalid-feedback">{{ $errors->first('email')}}</small>
                        @endif
                        <label for="email">Email *</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col l12 m12 s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="message" name="message" class="materialize-textarea"></textarea>
                        @if ($errors->has('message'))
                            <small class="form-text invalid-feedback">{{ $errors->first('message')}}</small>
                        @endif
                        <label for="message">Votre message *</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </div>
@endsection