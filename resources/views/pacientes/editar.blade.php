@extends('layouts.app')

@section('title', 'Editar paciente')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/paciente-editar.css') }}">
@endsection

@section('content')
<div class="patient-detail-page">

    <div class="patient-detail-header">
        <div>
            <h1 class="patient-detail-title">Editar paciente</h1>
            <p class="patient-detail-subtitle">Modifica la información del paciente</p>
        </div>

        <div class="patient-detail-actions">
            <a href="{{ route('pacientes.index') }}" class="btn-ui btn-ui-secondary">
                Volver
            </a>

            <button type="button" class="btn-ui btn-ui-primary">
                Guardar cambios
            </button>
        </div>
    </div>

    <div class="patient-section-nav">
        <a href="{{ route('pacientes.show', 1) }}" class="patient-section-link active">Información general</a>
        <a href="{{ route('pacientes.odontograma', 1) }}" class="patient-section-link">Odontograma</a>
        <a href="{{ route('pacientes.plan-tratamiento', 1) }}" class="patient-section-link">Plan de tratamiento</a>
        <a href="{{ route('pacientes.notas', 1) }}" class="patient-section-link">Notas de evolución</a>
    </div>

    <div class="patient-main-card">
        <div class="patient-card-header">
            <div>
                <h3 class="patient-card-title">Información general del paciente</h3>
                <p class="patient-card-subtitle">Puedes editar uno o varios datos del paciente</p>
            </div>

            <span class="badge-ui badge-ui-blue">Paciente activo</span>
        </div>

        <form>
            <div class="patient-form-grid">

                <div class="form-group-ui form-group-full">
                    <label class="form-label-ui">Nombre completo</label>
                    <div class="triple-grid">
                        <div>
                            <input type="text" class="form-control-ui" value="Juan">
                            <small class="field-help">Nombre</small>
                        </div>
                        <div>
                            <input type="text" class="form-control-ui" value="Pérez">
                            <small class="field-help">Apellido paterno</small>
                        </div>
                        <div>
                            <input type="text" class="form-control-ui" value="López">
                            <small class="field-help">Apellido materno</small>
                        </div>
                    </div>
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Fecha de nacimiento</label>
                    <input type="date" class="form-control-ui" value="1990-05-12">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Estado civil</label>
                    <input type="text" class="form-control-ui" value="Soltero">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Ocupación</label>
                    <input type="text" class="form-control-ui" value="Contador">
                </div>

                <div class="form-group-ui form-group-full">
                    <label class="form-label-ui">Dirección</label>
                    <input type="text" class="form-control-ui" value="Col. Centro, Calle Reforma 120">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Ciudad</label>
                    <input type="text" class="form-control-ui" value="La Paz">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">C.P.</label>
                    <input type="text" class="form-control-ui" value="23000">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Teléfono</label>
                    <input type="text" class="form-control-ui" value="6121234567">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Teléfono del trabajo</label>
                    <input type="text" class="form-control-ui" value="6129876543">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Celular</label>
                    <input type="text" class="form-control-ui" value="6241234567">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">E-mail</label>
                    <input type="email" class="form-control-ui" value="juan@correo.com">
                </div>

                <div class="form-group-ui">
                    <label class="form-label-ui">Recomendado por</label>
                    <input type="text" class="form-control-ui" value="María López">
                </div>

                <div class="form-group-ui form-group-full">
                    <label class="form-label-ui">En caso de emergencia llamar a</label>
                    <input type="text" class="form-control-ui" value="Ana López - 6245557788">
                </div>

                <div class="form-group-ui form-group-full">
                    <label class="form-label-ui">Motivo de su visita</label>
                    <textarea class="form-control-ui textarea-ui" rows="3">Dolor en molar superior derecho y valoración general.</textarea>
                </div>

            </div>

            <div class="patient-subsection">
                <div class="patient-subsection-header">
                    <h4 class="patient-subsection-title">Antecedentes médicos</h4>
                    <p class="patient-subsection-text">Marque o registra la información relevante del paciente</p>
                </div>

                <div class="checks-grid">
                    <label class="check-card">
                        <input type="checkbox">
                        <span>Problemas de presión arterial</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox" checked>
                        <span>Problemas cardiovasculares</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Problemas renales</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Artritis</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Diabetes</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Hepatitis</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Úlcera gástrica</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Enfermedades infecto-contagiosas</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Desmayos o convulsiones</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Problemas de coagulación</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Sinusitis</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox" checked>
                        <span>Alergias</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Tabaquismo, alcoholismo o drogas</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Estoy tomando medicinas</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Estuve hospitalizado</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox" checked>
                        <span>Estoy en buen estado de salud</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Estoy embarazada</span>
                    </label>

                    <label class="check-card">
                        <input type="checkbox">
                        <span>Estoy lactando</span>
                    </label>
                </div>

                <div class="patient-form-grid mt-16">
                    <div class="form-group-ui form-group-full">
                        <label class="form-label-ui">Alergias / medicinas / observaciones</label>
                        <textarea class="form-control-ui textarea-ui" rows="4">Paciente refiere alergia a penicilina.</textarea>
                    </div>

                    <div class="form-group-ui form-group-full">
                        <label class="form-label-ui">Doctor que atiende</label>
                        <input type="text" class="form-control-ui" value="Dr. Juan Pérez">
                    </div>
                </div>
            </div>

            <div class="patient-form-footer">
                <button type="button" class="btn-ui btn-ui-secondary">Cancelar</button>
                <button type="button" class="btn-ui btn-ui-primary">Guardar cambios</button>
            </div>
        </form>
    </div>

</div>
@endsection