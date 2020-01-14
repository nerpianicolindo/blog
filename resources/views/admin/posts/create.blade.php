@extends('admin.layouts.layout')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark"><small>Crear un post</small></h1>

        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                <li class="breadcrumb-item active">Crear post</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                Crear un post nuevo
            </h3>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    {{ csrf_field() }}
                    <div class="col-md-8">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Título del post</label>
                                    <input type="text" name="title" class="form-control" placeholder="Escribe el título del post">
                                    <div class="form-group">
                                        <label for="body">Contenido del post</label>
                                        <textarea class="form-control" name="body" rows="10" placeholder="Escribe el texto del post"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="excerpt">Extracto del post</label>
                                    <textarea class="form-control" name="excerpt" placeholder="Escribe un extracto del post"></textarea>
                                </div>
                                <!-- Date range -->
                                <div class="form-group">
                                    <label>Fecha de publicación</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                             </span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="published_at" name="published_at">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
