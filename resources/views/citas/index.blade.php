@extends('layouts.app')

@section('title', 'Citas')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/citas.css') }}">
@endsection

@section('content')
<div class="appointments-page">

    <div class="appointments-header">
        <div>
            <h1 class="appointments-title">Citas</h1>
            <p class="appointments-subtitle">Agenda y administra las citas de la clínica</p>
        </div>

        <button type="button" id="newAppointmentBtn" class="btn-ui btn-ui-primary">
            Nueva cita
        </button>
    </div>

    <div class="appointments-card">
        <div id="calendar"></div>
    </div>

</div>

<div class="modal fade appointment-modal" id="appointmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content appointment-modal-content">
            <div class="modal-header appointment-modal-header">
                <div>
                    <h5 class="modal-title appointment-modal-title">Nueva cita</h5>
                    <p class="appointment-modal-subtitle">Captura los datos básicos de la cita</p>
                </div>

                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body appointment-modal-body">
                <form id="appointmentForm" onsubmit="return false;">
                    <div class="form-grid">
                        <div class="form-group-ui">
                            <label for="patientName" class="form-label-ui">Paciente</label>
                            <input
                                type="text"
                                id="patientName"
                                class="form-control-ui"
                                placeholder="Nombre del paciente"
                            >
                        </div>

                        <div class="form-group-ui">
                            <label for="doctorSelect" class="form-label-ui">Doctor</label>
                            <select id="doctorSelect" class="form-control-ui">
                                <option value="Dr. Juan Pérez">Dr. Juan Pérez</option>
                                <option value="Dra. María López">Dra. María López</option>
                            </select>
                        </div>

                        <div class="form-group-ui">
                            <label for="serviceSelect" class="form-label-ui">Servicio</label>
                            <select id="serviceSelect" class="form-control-ui">
                                <option value="Limpieza">Limpieza</option>
                                <option value="Blanqueamiento">Blanqueamiento</option>
                                <option value="Extracción">Extracción</option>
                                <option value="Valoración">Valoración</option>
                            </select>
                        </div>

                        <div class="form-group-ui">
                            <label for="appointmentDate" class="form-label-ui">Fecha y hora</label>
                            <input
                                type="datetime-local"
                                id="appointmentDate"
                                class="form-control-ui"
                            >
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer appointment-modal-footer">
                <button type="button" class="btn-ui btn-ui-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button type="button" class="btn-ui btn-ui-primary" id="saveAppointmentBtn">
                    Guardar cita
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/citas.js') }}"></script>
@endsection