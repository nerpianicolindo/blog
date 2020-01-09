@extends('admin.layouts.layout')

@section('content')
    <h1>Usuario autenticado: {{ auth()->user()->name }}</h1>
    <h1>Correo elctrónico: {{ auth()->user()->email }}</h1>
@endsection
