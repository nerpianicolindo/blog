@component('mail::message')
# Hola, {{ $admin->name }} Se ha creado un nuevo post

A continuacion mostramos la informacion del post.

@component('mail::table')
    | Username | Titulo del post |
    | :--------|:--------|
    |{{ $user->name }} | {{ $post->title }}
@endcomponent
@component('mail::button', ['url' => 'http://blog.local/admin/posts'])
    Ir a posts
@endcomponent

Saludos,<br>
{{ config('app.name') }}
@endcomponent
