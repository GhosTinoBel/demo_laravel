@component('mail::message')
# Salut à vous cher admin,

Je me nomme {{ $msg->nom }} {{  $msg->prenom }},
et je tenais à vous faire part de ceci : <br> 
@component('mail::panel')
" {{ $msg->message }} " 
@endcomponent


Envoyé depuis le formulaire de contact du site #MyBlog.com 
@endcomponent
