@extends('layouts/template', ['title' => 'Me contacter'])
@section('mot_page')
     <h1>Formulaire de contact</h1>
@endsection


@section('content')
<div class="col-md-6 col-md-offset-1">
     <form action="{{ route('contact_path') }}" method="POST" novalidate>
               {{ csrf_field() }}
                <div class="form-group {{ $errors -> has('nom') ? 'has-error' : ''}}">
                    <label for="nom" class="control-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="votre nom de famille" required="required">
                    {!! $errors -> first('nom', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group {{ $errors -> has('prenom') ? 'has-error' : ''}}">
                    <label for="prenom" class="control-label">Prénom(s)</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" placeholder="vos prénoms -si vous en avez plusieurs" required="required">
                    {!! $errors -> first('prenom', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group {{ $errors -> has('email') ? 'has-error' : ''}}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="votre adresse mail" required="required">
                    {!! $errors -> first('email', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group {{ $errors -> has('message') ? 'has-error' : ''}}">
                    <label for="message" class="control-label">Votre message</label>
                    <textarea class="form-control" rows="3" name="message" id="message"  placeholder="Alors, Que voudriez-vous me dire ?" required="required"></textarea>
                    {!! $errors -> first('message', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
               </div>
     </form>
</div>
@endsection
