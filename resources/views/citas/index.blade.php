@extends('layouts.app')

@section('title', 'Citas')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Gestión de Citas</h4>
                <div class="box-controls pull-right">
                    <button class="btn btn-primary btn-sm waves-effect waves-light">
                        <i class="mdi mdi-plus me-5"></i>Nueva Cita
                    </button>
                </div>
            </div>
            <div class="box-body">
                <!-- Filtros -->
                <div class="row mb-20">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>Todos los estados</option>
                            <option>Pendiente</option>
                            <option>Confirmada</option>
                            <option>Cancelada</option>
                            <option>Completada</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="date" class="form-control" placeholder="Filtrar por fecha">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>Todos los doctores</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary-light w-p100">
                            <i class="fa fa-filter me-5"></i>Filtrar
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Paciente</th>
                                <th>Doctor</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Motivo</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($citas ?? [] as $cita)
                            <tr>
                                <td>{{ $cita->id }}</td>
                                <td>{{ $cita->patient ?? '—' }}</td>
                                <td>{{ $cita->doctor ?? '—' }}</td>
                                <td>{{ $cita->date ?? '—' }}</td>
                                <td>{{ $cita->time ?? '—' }}</td>
                                <td>{{ $cita->reason ?? '—' }}</td>
                                <td><span class="badge badge-warning">Pendiente</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-success-light" title="Confirmar"><i class="fa fa-check"></i></a>
                                    <a href="#" class="btn btn-sm btn-warning-light" title="Editar"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger-light" title="Cancelar"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="text-center py-30">
                                    <img src="{{ asset('images/svg-icon/color-svg/custom-17.svg') }}" class="mb-10" style="width:60px;" alt="">
                                    <p class="text-muted">No hay citas registradas aún.</p>
                                    <button class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-plus me-5"></i>Agendar primera cita
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
