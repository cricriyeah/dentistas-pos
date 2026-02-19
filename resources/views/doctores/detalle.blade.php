@extends('layouts.app')

@section('title', 'Detalle de Doctor')

@section('content')
<div class="row">
    <div class="col-12 mb-20">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="my-0">Detalle de Doctor</h2>
            <a href="{{ route('doctores.index') }}" class="btn btn-default btn-sm">
                <i class="fa fa-arrow-left me-5"></i>Volver
            </a>
        </div>
    </div>

    <div class="col-xl-4 col-12">
        <div class="box">
            <div class="box-body px-0 bb-1 text-center">
                <div class="avatar avatar-lg status-success">
                    <img src="{{ asset('images/avatar/avatar-13.png') }}" class="rounded-circle bg-primary" alt="" />
                </div>
                <h4 class="mt-20 mb-5">Dr. {{ $doctor->name ?? 'Nombre del Doctor' }}</h4>
                <p class="mb-0 text-muted">{{ $doctor->specialty ?? 'Especialidad' }}</p>
            </div>
            <div class="box-body">
                <ul class="list-unstyled mb-0">
                    <li class="py-10 bb-1 d-flex justify-content-between">
                        <span class="text-muted"><i class="fa fa-phone me-5"></i>Teléfono</span>
                        <strong>{{ $doctor->phone ?? '—' }}</strong>
                    </li>
                    <li class="py-10 bb-1 d-flex justify-content-between">
                        <span class="text-muted"><i class="fa fa-envelope me-5"></i>Correo</span>
                        <strong>{{ $doctor->email ?? '—' }}</strong>
                    </li>
                    <li class="py-10 d-flex justify-content-between">
                        <span class="text-muted">Estado</span>
                        <span class="badge badge-success">Activo</span>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <button class="btn btn-primary-light d-block w-p100">
                    <i class="mdi mdi-comment-outline me-5"></i>Enviar Mensaje
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-8 col-12">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Citas Asignadas</h4>
            </div>
            <div class="box-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="text-center py-20">
                                    <p class="text-muted mb-0">Sin citas asignadas.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-body text-center">
                        <img src="{{ asset('images/health-1-color.png') }}" class="img-fluid mb-10" style="width:40px" alt="">
                        <h3 class="mb-0">0</h3>
                        <p class="mb-0 text-muted">Operaciones</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="box-body text-center">
                        <img src="{{ asset('images/health-2-color.png') }}" class="img-fluid mb-10" style="width:40px" alt="">
                        <h3 class="mb-0">0</h3>
                        <p class="mb-0 text-muted">Pacientes totales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
