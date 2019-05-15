@extends('layouts.template', ['title' => 'A propos'])

@section('mot_page')
     <h1>Qu’est-ce que Laravel ?</h1>
@endsection

@section('content')
<div class="col-md-12">
        <p>Laravel, créé par Taylor Otwel, initie une nouvelle façon de concevoir un framework en utilisant
                ce qui existe de mieux pour chaque fonctionnalité. Par exemple toute application web a besoin d’un système
                qui gère les requêtes HTTP. Plutôt que de réinventer quelque chose, le concepteur de Laravel a tout simplement
                utilisé celui de Symfony en l’étendant pour créer un système de routage efficace. De la même manière,
                l’envoi des emails se fait avec la bibliothèque SwiftMailer. En quelque sorte Otwel a fait son marché
                parmi toutes les bibliothèques disponibles. Nous verrons dans ce cours comment cela est réalisé.
                Mais Laravel ce n’est pas seulement le regroupement de bibliothèques existantes, c’est aussi de nombreux
                composants originaux et surtout une orchestration de tout ça. <br/><br/>

                   Vous allez trouver dans Laravel :<br/></p>
    </div>

    <div class="col-md-10 col-md-offset-2">
        <ul>
            <li>un système de routage (RESTFul et ressources),</li>
            <li>un créateur de requêtes SQL et un ORM,</li>
            <li>un moteur de template,</li>
            <li>un système d’authentification pour les connexions,</li>
            <li>un système de validation,</li>
            <li>un système de pagination,</li>
            <li>un système de migration pour les bases de données,</li>
            <li>un système d’envoi d’emails,</li>
            <li>un système de cache,</li>
            <li>Et d’autres choses encore que nous allons découvrir ensemble. Il est probable que certains éléments de cette
            liste ne vous évoquent pas grand-chose, mais ce n’est pas important pour le moment, tout cela deviendra plus
            clair au fil des chapitres.</li>
     </div>
</div>
@endsection

