@extends('layouts/template', ['title' => 'Se connecter'])

@section('mot_page')
     <h1>Connexion, administrateur</h1>
@endsection

@section('content')
<div class="col-md-6 col-md-offset-1">
     <form action="{{ route('seconnecter_path') }}" method="POST" novalidate>
               {{ csrf_field() }}
                <div class="form-group {{ $errors -> has('pseudo') ? 'has-error' : ''}}">
                    <label for="pseudo" class="control-label">Pseudo</label>
                    <input type="text" class="form-control" name="pseudo" id="pseudo" value="{{ old('pseudo') }}" required="required">
                    {!! $errors -> first('pseudo', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group {{ $errors -> has('mot_de_passe') ? 'has-error' : ''}}">
                    <label for="mot_de_passe" class="control-label">Mot de passe</label>
                    <input type="text" class="form-control" name="mot_de_passe" id="mot_de_passe" value="{{ old('mot_de_passe') }}"  required="required">
                    {!! $errors -> first('mot_de_passe', '<span class="help-block">:message</span>') !!}
               </div>
               <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
               </div>
     </form>
</div>
@endsection
