@extends('layouts.app')

@section('content')
<div class="container">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Editar Rol</h4>
        </div>
        <div class="box-body">
            <form method="POST" action="{{ route('roles.update',$role) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" value="{{$role->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Etiqueta</label>
                    <input type="text" name="label" value="{{$role->label}}" class="form-control">
                </div>
                    <hr>
                    <h5>Permisos</h5>
                <div class="row">
                    @foreach($permissions as $p)
                    <div class="col-md-3">
                        <label>
                            <input type="checkbox"
                            name="permissions[]"
                            value="{{$p->id}}"
                            @if(in_array($p->id,$selected)) checked @endif
                            >
                            {{$p->label ?? $p->name}}
                        </label>
                    </div>
                    @endforeach
                </div>
                <br>
                <button class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection