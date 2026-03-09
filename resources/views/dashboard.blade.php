@extends('layouts.app')

@section('title', 'Dashboard')

@section('styles')
	<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection

@section('content')
<div class="dashboard-page p-4">

    <div class="minimal-card welcome-card">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
            <div>
                <h2 class="welcome-title">Bienvenido al sistema de la clínica</h2>
                <p class="welcome-text">
                    Consulta métricas rápidas, pacientes recientes y accesos principales en una sola vista.
                </p>
            </div>

            <div>
                <a href="#" class="minimal-btn">Ver detalles</a>
            </div>
        </div>
    </div>

    <div class="row stats-grid">
        <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="minimal-card stat-card">
                <div class="stat-label">Total de pacientes</div>
                <div class="stat-value">1,245</div>
                <span class="stat-chip chip-blue">Registro general</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="minimal-card stat-card">
                <div class="stat-label">Total de personal</div>
                <div class="stat-value">145</div>
                <span class="stat-chip chip-green">Equipo activo</span>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-12 mb-3">
            <div class="minimal-card stat-card">
                <div class="stat-label">Total de cirugías</div>
                <div class="stat-value">245</div>
                <span class="stat-chip chip-red">Histórico</span>
            </div>
        </div>
    </div>

    <div class="minimal-card">
        <div class="table-card-header">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h3 class="table-card-title">Pacientes registrados</h3>
                    <p class="table-card-subtitle">Listado reciente de pacientes en el sistema</p>
                </div>

                <div>
                    <input type="text" class="minimal-search" placeholder="Buscar paciente">
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-minimal">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Fecha</th>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Ciudad</th>
                        <th>Género</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>01/08/2021</td>
                        <td>DO-124585</td>
                        <td><span class="patient-name">Shawn Hampton</span></td>
                        <td>27</td>
                        <td>Miami</td>
                        <td><span class="status-pill status-male">Masculino</span></td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="action-btn action-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="action-btn action-btn-delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>02</td>
                        <td>01/08/2021</td>
                        <td>DO-412577</td>
                        <td><span class="patient-name">Polly Paul</span></td>
                        <td>31</td>
                        <td>Naples</td>
                        <td><span class="status-pill status-female">Femenino</span></td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="action-btn action-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="action-btn action-btn-delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>03</td>
                        <td>01/08/2021</td>
                        <td>DO-412151</td>
                        <td><span class="patient-name">Harmani Doe</span></td>
                        <td>21</td>
                        <td>Destin</td>
                        <td><span class="status-pill status-female">Femenino</span></td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="action-btn action-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="action-btn action-btn-delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>04</td>
                        <td>01/08/2021</td>
                        <td>DO-123654</td>
                        <td><span class="patient-name">Mark Wood</span></td>
                        <td>30</td>
                        <td>Orlando</td>
                        <td><span class="status-pill status-male">Masculino</span></td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="action-btn action-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="action-btn action-btn-delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>05</td>
                        <td>01/08/2021</td>
                        <td>DO-159874</td>
                        <td><span class="patient-name">Johen Doe</span></td>
                        <td>58</td>
                        <td>Tampa</td>
                        <td><span class="status-pill status-male">Masculino</span></td>
                        <td>
                            <div class="action-group">
                                <a href="#" class="action-btn action-btn-edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="#" class="action-btn action-btn-delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="table-card-footer">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                <p class="table-footer-text">Total de 90 pacientes</p>
                <a href="#" class="minimal-btn">Ver todos</a>
            </div>
        </div>
    </div>

</div>
@endsection