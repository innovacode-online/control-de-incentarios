@extends('layouts.auth')

@section('header')
    <h1>Inicia Sesion</h1>
    <p>Comienza a gestionar tu inventario</p>
@endsection


@section('content')
    
    <form action="" class="auth__login--form">
        @csrf

        <div class="form-control">
            <label>Correo electronico: </label>
            <input 
                type="email" 
                name="email"
                placeholder="correo@example.com"
                
            >
            
        </div>

        <div class="form-control">
            <label>Contraseña: </label>
            <input 
                type="password"  
                name="password"
                placeholder="Ingresa tu contraseña"
                
            >
            
        </div>

        <button class="btn-primary w-full">Iniciar Sesion</button>

    </form>

@endsection