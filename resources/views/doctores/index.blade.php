@extends('layouts.app')

@section('title', 'Doctores')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Lista de Doctores</h4>
                <div class="box-controls pull-right">
                    <button class="btn btn-primary btn-sm waves-effect waves-light">
                        <i class="mdi mdi-plus me-5"></i>Nuevo Doctor
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Especialidad</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($doctores ?? [] as $doctor)
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/avatar/avatar-2.png') }}" class="rounded-circle me-10" width="35" alt="">
                                        Dr. {{ $doctor->name }}
                                    </div>
                                </td>
                                <td>{{ $doctor->specialty ?? '—' }}</td>
                                <td>{{ $doctor->phone ?? '—' }}</td>
                                <td>{{ $doctor->email ?? '—' }}</td>
                                <td><span class="badge badge-success">Activo</span></td>
                                <td>
                                    <a href="{{ route('doctores.show', $doctor->id) }}" class="btn btn-sm btn-info-light"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-warning-light"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger-light"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-30">
                                    <img src="{{ asset('images/svg-icon/color-svg/custom-17.svg') }}" class="mb-10" style="width:60px;" alt="">
                                    <p class="text-muted">No hay doctores registrados aún.</p>
                                    <button class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-plus me-5"></i>Agregar primer doctor
                                    </button>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
