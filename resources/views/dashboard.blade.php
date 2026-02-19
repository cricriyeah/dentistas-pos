@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="mb-20 d-flex justify-content-between align-items-center">
            <h1 class="my-md-0 mb-10">Dashboard</h1>
            <button type="button" class="waves-effect waves-light btn btn-primary">
                <i class="mdi mdi-plus me-15"></i>Agregar Registro
            </button>
        </div>
    </div>
    <!-- Estadísticas rápidas -->
    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="box bg-primary pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0 text-white opacity-8">Total Pacientes</p>
                        <h3 class="mb-0 text-white fw-600">0</h3>
                    </div>
                    <div class="rounded-circle bg-white text-center" style="width:50px;height:50px;line-height:50px;">
                        <i class="mdi mdi-account-multiple text-primary fs-24"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="box bg-success pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0 text-white opacity-8">Citas Hoy</p>
                        <h3 class="mb-0 text-white fw-600">0</h3>
                    </div>
                    <div class="rounded-circle bg-white text-center" style="width:50px;height:50px;line-height:50px;">
                        <i class="mdi mdi-calendar-check text-success fs-24"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="box bg-warning pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0 text-white opacity-8">Doctores</p>
                        <h3 class="mb-0 text-white fw-600">0</h3>
                    </div>
                    <div class="rounded-circle bg-white text-center" style="width:50px;height:50px;line-height:50px;">
                        <i class="mdi mdi-doctor text-warning fs-24"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="box bg-danger pull-up">
            <div class="box-body">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="mb-0 text-white opacity-8">Ingresos del Mes</p>
                        <h3 class="mb-0 text-white fw-600">$0</h3>
                    </div>
                    <div class="rounded-circle bg-white text-center" style="width:50px;height:50px;line-height:50px;">
                        <i class="mdi mdi-currency-usd text-danger fs-24"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Accesos rápidos -->
    <div class="col-xl-6 col-12">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Accesos Rápidos</h4>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-6 mb-15">
                        <a href="{{ route('pacientes.index') }}" class="btn btn-primary-light d-block py-20">
                            <i class="icon-Compiling fs-24 d-block mb-5"><span class="path1"></span><span class="path2"></span></i>
                            Pacientes
                        </a>
                    </div>
                    <div class="col-6 mb-15">
                        <a href="{{ route('citas.index') }}" class="btn btn-success-light d-block py-20">
                            <i class="icon-Barcode-read fs-24 d-block mb-5"><span class="path1"></span><span class="path2"></span></i>
                            Citas
                        </a>
                    </div>
                    <div class="col-6 mb-15">
                        <a href="{{ route('doctores.index') }}" class="btn btn-warning-light d-block py-20">
                            <i class="icon-Diagnostics fs-24 d-block mb-5"><span class="path1"></span><span class="path2"></span></i>
                            Doctores
                        </a>
                    </div>
                    <div class="col-6 mb-15">
                        <a href="{{ route('reportes.index') }}" class="btn btn-danger-light d-block py-20">
                            <i class="icon-Settings-1 fs-24 d-block mb-5"><span class="path1"></span><span class="path2"></span></i>
                            Reportes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Próximas citas -->
    <div class="col-xl-6 col-12">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Próximas Citas</h4>
                <a href="{{ route('citas.index') }}" class="box-control pull-right btn btn-sm btn-primary-light">Ver todas</a>
            </div>
            <div class="box-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Doctor</th>
                                <th>Hora</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" class="text-center py-20">
                                    <p class="text-muted mb-0">No hay citas registradas aún.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endsection
