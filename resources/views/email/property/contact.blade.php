<x-mail::message>
# Introduction

Bonjour,

Nous avons bien reçu votre demande de contact pour la propriété {{$property->title}}  à {{$property->city}} {{$property->postal_code}}

Nous reviendrons vers vous au plus vite.

Merci,<br>
{{ config('app.name') }}
</x-mail::message>

