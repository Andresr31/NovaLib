@extends('layouts.app')
@section('title', 'Ver Usuarios')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h1> <i class="fa fa-search"></i> Ver Usuario</h1>
        <hr>
        <form>
            
            <div class="mb-3">
                <label for="name" class="">Nombre</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" disabled autocomplete="name" autofocus>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="">Correo electrónico</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" disabled autocomplete="email" autofocus>
                </div>
            </div>

            
            
            <div class="d-grid gap-2 mb-3">
              
                <a href="{{route('users.index')}}" class="btn btn-primary btn-block text-uppercase">Volver <i class="fa fa-left"></i></a>
              
            </div>
            
        </form>
    </div>
</div> 
@endsection
