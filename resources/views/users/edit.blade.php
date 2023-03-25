@extends('layouts.app')
@section('title', 'Editar Usuarios')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h1> <i class="fa fa-pen"></i> Editar Usuario</h1>
        <hr>
        
        <form method="POST" action="{{route('users.update',$user->id)}}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="">Nombre Completo</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="">Correo electrónico</label>

                <div class="">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3">
                <label for="password" class="">Contraseña</label>
                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            
            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary btn-block text-uppercase"> Agregar <i class="fa fa-save mx-2"></i></button>
            </div>
            
        </form>
    </div>
</div> 
@endsection
