@extends('layouts.app')

@section('title', 'Pacientes')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/pacientes.css') }}">
@endsection

@section('content')
<div class="patients-page">

    <div class="patients-header">
        <div>
            <h1 class="patients-title">Pacientes</h1>
            <p class="patients-subtitle">Consulta y administra la información de pacientes</p>
        </div>

        <a href="#" class="btn-ui btn-ui-primary">
            Agregar paciente
        </a>
    </div>

    <div class="patients-card">
        <div class="patients-card-header">
            <div>
                <h3 class="patients-card-title">Lista de pacientes</h3>
                <p class="patients-card-subtitle">Búsqueda rápida y acciones principales</p>
            </div>

            <div class="patients-search-wrap">
                <input
                    id="pacienteSearch"
                    type="text"
                    class="input-ui"
                    placeholder="Buscar paciente..."
                    autocomplete="off"
                >
            </div>
        </div>

        <div class="patients-table-wrap">
            <table class="table patients-table" id="pacientesTable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Género</th>
                        <th>Fecha nacimiento</th>
                        <th>Celular</th>
                        <th class="text-end patients-actions-col">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <a href="#" class="patient-link">Juan Pérez</a>
                        </td>
                        <td>34</td>
                        <td>
                            <span class="badge-ui badge-ui-blue">Masculino</span>
                        </td>
                        <td>
                            <span class="patient-date">
                                <i class="fa fa-calendar"></i>
                                12/05/1990
                            </span>
                        </td>
                        <td>6241234567</td>
                        <td class="text-end">
                            <div class="table-actions justify-content-end">
                                <a href="#" class="action-btn action-btn-info" title="Ver">
                                    <i class="si si-eye"></i>
                                </a>

                                <a href="#" class="action-btn action-btn-primary" title="Editar">
                                    <i class="si si-pencil"></i>
                                </a>

                                <a href="#" class="action-btn action-btn-danger" title="Eliminar">
                                    <i class="si si-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#" class="patient-link">María López</a>
                        </td>
                        <td>29</td>
                        <td>
                            <span class="badge-ui badge-ui-danger-soft">Femenino</span>
                        </td>
                        <td>
                            <span class="patient-date">
                                <i class="fa fa-calendar"></i>
                                21/11/1994
                            </span>
                        </td>
                        <td>6249876543</td>
                        <td class="text-end">
                            <div class="table-actions justify-content-end">
                                <a href="#" class="action-btn action-btn-info" title="Ver">
                                    <i class="si si-eye"></i>
                                </a>

                                <a href="#" class="action-btn action-btn-primary" title="Editar">
                                    <i class="si si-pencil"></i>
                                </a>

                                <a href="#" class="action-btn action-btn-danger" title="Eliminar">
                                    <i class="si si-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="#" class="patient-link">Carlos Mendoza</a>
                        </td>
                        <td>42</td>
                        <td>
                            <span class="badge-ui badge-ui-blue">Masculino</span>
                        </td>
                        <td>
                            <span class="patient-date">
                                <i class="fa fa-calendar"></i>
                                02/03/1982
                            </span>
                        </td>
                        <td>6245558899</td>
                        <td class="text-end">
                            <div class="table-actions justify-content-end">
                                <a href="#" class="action-btn action-btn-info" title="Ver">
                                    <i class="si si-eye"></i>
                                </a>

                                <a href="#" class="action-btn action-btn-primary" title="Editar">
                                    <i class="si si-pencil"></i>
                                </a>

                                <a href="#" class="action-btn action-btn-danger" title="Eliminar">
                                    <i class="si si-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="patientsEmptyState" class="patients-empty d-none">
            <h4>No se encontraron pacientes</h4>
            <p>Intenta con otro término de búsqueda.</p>
        </div>
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/pacientes.js') }}"></script>
@endsection