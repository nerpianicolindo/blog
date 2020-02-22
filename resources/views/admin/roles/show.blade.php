@extends('admin.layouts.layout')

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card card-primary card-outline">
                <div class="card-header text-center">
                    <h1>{{$role->name}}</h1>
                </div>
                <div class="card-body box-profile">
                    <h3>El rol tiene ámbito: {{ $role->guard_name }}</h3>
                    <h3>Tiene los siguientes permisos: </h3>
                    <ul class="list-group">
                        @foreach($role->permissions->pluck('name') as $permission)
                            <li class="list-group-item">{{ $permission }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
