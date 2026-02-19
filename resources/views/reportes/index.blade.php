@extends('layouts.app')

@section('title', 'Reportes')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="mb-20 d-flex justify-content-between align-items-center">
            <h2 class="my-0">Reportes</h2>
            <button class="btn btn-primary btn-sm waves-effect waves-light">
                <i class="mdi mdi-download me-5"></i>Exportar
            </button>
        </div>
    </div>

    <!-- Resumen estadístico -->
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="me-15 bg-primary-light rounded10 p-15">
                        <i class="icon-Compiling text-primary fs-24"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <div>
                        <p class="mb-0 text-muted">Total Pacientes</p>
                        <h3 class="mb-0">0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="me-15 bg-success-light rounded10 p-15">
                        <i class="icon-Barcode-read text-success fs-24"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <div>
                        <p class="mb-0 text-muted">Citas del Mes</p>
                        <h3 class="mb-0">0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="me-15 bg-warning-light rounded10 p-15">
                        <i class="icon-Diagnostics text-warning fs-24"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <div>
                        <p class="mb-0 text-muted">Doctores Activos</p>
                        <h3 class="mb-0">0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 col-12">
        <div class="box">
            <div class="box-body">
                <div class="d-flex align-items-center">
                    <div class="me-15 bg-danger-light rounded10 p-15">
                        <i class="mdi mdi-currency-usd text-danger fs-24"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-muted">Ingresos Totales</p>
                        <h3 class="mb-0">$0</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de reportes -->
    <div class="col-12">
        <div class="box">
            <div class="box-header">
                <h4 class="box-title">Reporte de Citas por Período</h4>
                <div class="box-controls pull-right d-flex gap-2">
                    <input type="date" class="form-control form-control-sm" placeholder="Fecha inicio">
                    <input type="date" class="form-control form-control-sm" placeholder="Fecha fin">
                    <button class="btn btn-sm btn-primary">Buscar</button>
                </div>
            </div>
            <div class="box-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Total Citas</th>
                                <th>Completadas</th>
                                <th>Canceladas</th>
                                <th>Pendientes</th>
                                <th>Ingresos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center py-30">
                                    <p class="text-muted mb-0">Selecciona un período para ver el reporte.</p>
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
