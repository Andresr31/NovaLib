@extends('layouts.app')
@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Modulo Usuarios</h5>
                <div class="d-grid gap-2">
                    <a href="{{route('users.index')}}" class="btn btn-primary">Entrar</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
