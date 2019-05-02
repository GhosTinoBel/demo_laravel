@extends('layouts/template', ['title' => 'Me contacter']) 
@section('mot_page')
     <h1>Formulaire de contact</h1>
@endsection


@section('content')
<div class="col-md-6 col-md-offset-3">
     <form>
               <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nom">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Prénom(s)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Prénom(s)">
               </div>
               <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
               </div>
               <div class="form-group">
                    <label for="exampleInputPassword1">Votre message</label>
                    <textarea class="form-control" rows="3"  placeholder="Que voudriez-vous me dire ?"></textarea>     
               </div>
               <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Envoyer</button>  
               </div>
     </form>
</div>
@endsection  