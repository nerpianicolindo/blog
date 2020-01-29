@extends('admin.layouts.layout')
@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
@endsection

@section('content')
    <h1>Usuario autenticado: {{ auth()->user()->name }}</h1>
    <h1>Correo electrónico: {{ auth()->user()->email }}</h1>
@endsection
