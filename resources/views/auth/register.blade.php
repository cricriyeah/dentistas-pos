@extends('layouts.auth')

@section('title', 'Registrarse')

@section('content')
<div class="row align-items-center justify-content-md-center h-p100">
    <div class="col-12">
        <div class="row justify-content-center g-0">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="bg-white rounded10 shadow-lg">
                    <div class="content-top-agile p-20 pb-0">
                        <h2 class="text-primary">Crear Cuenta</h2>
                        <p class="mb-0">Regístrate para acceder a Detistas POS.</p>
                    </div>
                    <div class="p-40">
                        <form action="{{ route('registro') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <p class="mb-0">{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    <input type="text" name="name" class="form-control ps-15 bg-transparent" placeholder="Nombre completo" value="{{ old('name') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                    <input type="email" name="email" class="form-control ps-15 bg-transparent" placeholder="Correo electrónico" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                    <input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                    <input type="password" name="password_confirmation" class="form-control ps-15 bg-transparent" placeholder="Confirmar contraseña" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-danger mt-10">REGISTRARSE</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            <p class="mt-15 mb-0">¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-warning ms-5">Iniciar Sesión</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
