@component('mail::message')
# Hola, {{ $admin->name }} Se ha creado un nuevo post

A continuacion mostramos la informacion del post.

@component('mail::table')
    | Username | Id del post |
    | :--------|:--------|
    |{{ $user->name }} | {{ $post->id }}
@endcomponent
@component('mail::button', ['url' => ''])

@endcomponent

Saludos,<br>
{{ config('app.name') }}
@endcomponent
