@extends('layouts.app')

@section('title', 'Detalle de Paciente')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="mb-20 d-flex justify-content-between align-items-center">
            <h2 class="my-0">Detalle de Paciente</h2>
            <a href="{{ route('pacientes.index') }}" class="btn btn-default btn-sm">
                <i class="fa fa-arrow-left me-5"></i>Volver
            </a>
        </div>
    </div>

    <!-- Información básica -->
    <div class="col-xl-4 col-12">
        <div class="box">
            <div class="box-body px-0 bb-1 text-center">
                <div class="avatar avatar-lg status-success">
                    <img src="{{ asset('images/avatar/avatar-13.png') }}" class="rounded-circle bg-primary" alt="" />
                </div>
                <h4 class="mt-20 mb-5">{{ $paciente->name ?? 'Nombre del Paciente' }}</h4>
                <p class="mb-0 text-muted">ID: {{ $paciente->id ?? '—' }}</p>
            </div>
            <div class="box-body">
                <ul class="list-unstyled mb-0">
                    <li class="py-10 bb-1 d-flex justify-content-between">
                        <span class="text-muted">Teléfono</span>
                        <strong>{{ $paciente->phone ?? '—' }}</strong>
                    </li>
                    <li class="py-10 bb-1 d-flex justify-content-between">
                        <span class="text-muted">Correo</span>
                        <strong>{{ $paciente->email ?? '—' }}</strong>
                    </li>
                    <li class="py-10 bb-1 d-flex justify-content-between">
                        <span class="text-muted">Fecha Nacimiento</span>
                        <strong>{{ $paciente->birth_date ?? '—' }}</strong>
                    </li>
                    <li class="py-10 d-flex justify-content-between">
                        <span class="text-muted">Estado</span>
                        <span class="badge badge-success">Activo</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Historial de citas -->
    <div class="col-xl-8 col-12">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Historial de Citas</h4>
            </div>
            <div class="box-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Doctor</th>
                                <th>Diagnóstico</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="text-center py-20">
                                    <p class="text-muted mb-0">Sin historial de citas.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Signos vitales -->
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Signos Vitales</h4>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-3 col-6 text-center mb-15">
                        <div class="box bg-primary-light mb-0 py-15">
                            <i class="mdi mdi-heart-pulse text-primary fs-30"></i>
                            <p class="mb-0 mt-5 text-primary fw-600">— bpm</p>
                            <small class="text-muted">Ritmo Cardíaco</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-15">
                        <div class="box bg-danger-light mb-0 py-15">
                            <i class="mdi mdi-thermometer text-danger fs-30"></i>
                            <p class="mb-0 mt-5 text-danger fw-600">—°F</p>
                            <small class="text-muted">Temperatura</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-15">
                        <div class="box bg-warning-light mb-0 py-15">
                            <i class="mdi mdi-gauge text-warning fs-30"></i>
                            <p class="mb-0 mt-5 text-warning fw-600">—/—</p>
                            <small class="text-muted">Presión Arterial</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-15">
                        <div class="box bg-success-light mb-0 py-15">
                            <i class="mdi mdi-weight text-success fs-30"></i>
                            <p class="mb-0 mt-5 text-success fw-600">— kg</p>
                            <small class="text-muted">Peso</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
