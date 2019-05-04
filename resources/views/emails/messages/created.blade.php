@component('mail::message')
# Hey Admin,

- {{ $nom }} {{ $prenom }}
- {{ $email }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
