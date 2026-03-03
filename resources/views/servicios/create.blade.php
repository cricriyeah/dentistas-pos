@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Agregar Servicio</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('servicios.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input name="nombre" value="{{ old('nombre') }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" rows="4">{{ old('descripcion') }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Precio</label>
                        <input name="precio" value="{{ old('precio') }}" class="form-control" type="number" step="0.01" min="0">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Orden</label>
                        <input name="orden" value="{{ old('orden', 0) }}" class="form-control" type="number" min="0">
                    </div>

                    <div class="col-md-4 mb-3 d-flex align-items-end">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="activo" value="1" {{ old('activo', 1) ? 'checked' : '' }}>
                            <label class="form-check-label">Activo</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('servicios.index') }}" class="btn btn-light">Cancelar</a>
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection