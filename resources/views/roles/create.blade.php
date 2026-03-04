@extends('layouts.app')

@section('content')
<div class="container">
    <div class="box">

        <div class="box-header with-border">
            <h4 class="box-title">Crear Rol</h4>
        </div>
        <div class="box-body">
            <form method="POST" action="{{ route('roles.store') }}">
                @csrf
                <div class="form-group">
                    <label>Nombre interno</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Etiqueta</label>
                    <input type="text" name="label" class="form-control">
                </div>
                <hr>
                <h5>Permisos</h5>
                <div class="row">
                    @foreach($permissions as $p)
                    <div class="col-md-3">
                        <label>
                            <input type="checkbox" name="permissions[]" value="{{$p->id}}">
                            {{$p->label ?? $p->name}}
                        </label>
                    </div>
                    @endforeach
                </div>
                <br>
                <button class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection