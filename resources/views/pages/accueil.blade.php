@extends('layouts/template', ['title' => 'Accueil'])

@section('mot_page')
     <h1>Le meilleur framework PHP</h1>
@endsection

@section('content')
    <div class="row marketing">
        <div class="col-md-7">
            <h2>Du code soigné</h2>
            <p>Les concepteurs de Laravel ont apporté un soin particulier à ce qu'ils vous présentent.
                À titre d'exemple, dans l'API de Laravel, le code contient de nombreux commentaires.
                Lorsque plus d'une ligne est requise, on retrouve toujours 3 caractères de différence
                entre chacune des lignes.</p>

            <h2>Une communauté active</h2>
            <p>Lorsque la communauté qui utilise un framework est active, ceci signifie que le framework
                est appelé à évoluer et que les ressources pour faciliter votre développement seront plus nombreuses.
                Vous trouverez de nombreux sites Web, livres et forums pour vous aider à vous approprier Laravel
                et vous donner un coup de pouce lorsque vous vous retrouvez bloqué par une problématique particulière.</p>
        </div>

        <div class="col-md-2 col-md-offset-1">
            <br/><br/><img src={{ asset('images/Laravel-logo.png') }} alt="">
         </div>
    </div>
@endsection
