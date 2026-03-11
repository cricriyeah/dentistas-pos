@extends('layouts.app')

@section('title', 'Detalle del paciente')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/paciente-detalle.css') }}">
@endsection

@section('content')
<div class="patient-view-page">

    <div class="patient-view-header">
        <div>
            <h1 class="patient-view-title">Detalle del paciente</h1>
            <p class="patient-view-subtitle">Consulta general del expediente del paciente</p>
        </div>

        <div class="patient-view-actions">
            <a href="{{ route('pacientes.index') }}" class="btn-ui btn-ui-secondary">
                Volver
            </a>

            <a href="{{ route('pacientes.edit', 1) }}" class="btn-ui btn-ui-primary">
                Editar paciente
            </a>
        </div>
    </div>

    <div class="patient-section-nav">
        <a href="{{ route('pacientes.show', 1) }}" class="patient-section-link active">Resumen general</a>
        <a href="{{ route('pacientes.odontograma', 1) }}" class="patient-section-link">Odontograma</a>
        <a href="{{ route('pacientes.plan-tratamiento', 1) }}" class="patient-section-link">Plan de tratamiento</a>
        <a href="{{ route('pacientes.notas', 1) }}" class="patient-section-link">Notas de evolución</a>
    </div>

    <div class="patient-view-card">

        <div class="patient-top-layout">
            <div class="patient-photo-col">
                <div class="patient-photo-box">
                    <img src="https://ui-avatars.com/api/?name=Juan+Perez&background=E6F5FF&color=1D4E89&size=220" alt="Paciente">
                </div>

                <div class="patient-status-inline">
                    <span class="patient-status-dot"></span>
                    <span>Paciente activo</span>
                </div>
            </div>

            <div class="patient-info-col">
                <div class="patient-name-block">
                    <h2 class="patient-full-name">Juan Pérez López</h2>
                    <p class="patient-register-text">Paciente registrado desde 12/01/2025</p>
                </div>

                <div class="patient-fields-grid">
                    <div class="view-field">
                        <label>Edad</label>
                        <div class="view-field-value">34 años</div>
                    </div>

                    <div class="view-field">
                        <label>Género</label>
                        <div class="view-field-value">Masculino</div>
                    </div>

                    <div class="view-field">
                        <label>Fecha de nacimiento</label>
                        <div class="view-field-value">12/05/1990</div>
                    </div>

                    <div class="view-field">
                        <label>Celular</label>
                        <div class="view-field-value">624 123 4567</div>
                    </div>

                    <div class="view-field">
                        <label>Correo</label>
                        <div class="view-field-value">juan@correo.com</div>
                    </div>

                    <div class="view-field">
                        <label>Ciudad</label>
                        <div class="view-field-value">La Paz, B.C.S.</div>
                    </div>

                    <div class="view-field field-span-2">
                        <label>Dirección</label>
                        <div class="view-field-value">Col. Centro, Calle Reforma 120, C.P. 23000</div>
                    </div>

                    <div class="view-field field-span-2">
                        <label>Contacto de emergencia</label>
                        <div class="view-field-value">Ana López · 624 555 7788</div>
                    </div>

                    <div class="view-field field-span-2">
                        <label>Motivo de visita</label>
                        <div class="view-field-value multiline">Dolor en molar superior derecho y valoración general</div>
                    </div>

                    <div class="view-field field-span-2">
                        <label>Observación</label>
                        <div class="view-field-value multiline">Alergia a penicilina</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="patient-view-grid">
        <div class="patient-panel">
            <div class="patient-panel-header">
                <div>
                    <h3 class="patient-panel-title">Odontograma general</h3>
                    <p class="patient-panel-subtitle">Vista reducida del estado dental</p>
                </div>

                <a href="{{ route('pacientes.odontograma', 1) }}" class="panel-link">
                    Ver completo
                </a>
            </div>

            <div class="odontogram-preview-card">
                <div class="odontogram-arch">
                    <div class="tooth-mini healthy">18</div>
                    <div class="tooth-mini healthy">17</div>
                    <div class="tooth-mini treated">16</div>
                    <div class="tooth-mini healthy">15</div>
                    <div class="tooth-mini warning">14</div>
                    <div class="tooth-mini healthy">13</div>
                    <div class="tooth-mini healthy">12</div>
                    <div class="tooth-mini healthy">11</div>
                    <div class="tooth-mini healthy">21</div>
                    <div class="tooth-mini healthy">22</div>
                    <div class="tooth-mini healthy">23</div>
                    <div class="tooth-mini healthy">24</div>
                    <div class="tooth-mini healthy">25</div>
                    <div class="tooth-mini treated">26</div>
                    <div class="tooth-mini missing">27</div>
                    <div class="tooth-mini healthy">28</div>
                </div>

                <div class="odontogram-divider-label">Superior</div>

                <div class="odontogram-arch">
                    <div class="tooth-mini healthy">48</div>
                    <div class="tooth-mini healthy">47</div>
                    <div class="tooth-mini healthy">46</div>
                    <div class="tooth-mini warning">45</div>
                    <div class="tooth-mini healthy">44</div>
                    <div class="tooth-mini healthy">43</div>
                    <div class="tooth-mini healthy">42</div>
                    <div class="tooth-mini healthy">41</div>
                    <div class="tooth-mini healthy">31</div>
                    <div class="tooth-mini healthy">32</div>
                    <div class="tooth-mini healthy">33</div>
                    <div class="tooth-mini healthy">34</div>
                    <div class="tooth-mini treated">35</div>
                    <div class="tooth-mini healthy">36</div>
                    <div class="tooth-mini healthy">37</div>
                    <div class="tooth-mini healthy">38</div>
                </div>

                <div class="odontogram-divider-label">Inferior</div>

                <div class="odontogram-legend">
                    <span class="legend-item"><span class="legend-dot healthy"></span>Sano</span>
                    <span class="legend-item"><span class="legend-dot warning"></span>Observación</span>
                    <span class="legend-item"><span class="legend-dot treated"></span>Tratado</span>
                    <span class="legend-item"><span class="legend-dot missing"></span>Ausente</span>
                </div>
            </div>
        </div>

        <div class="patient-side-stack">
            <div class="patient-panel">
                <div class="patient-panel-header">
                    <div>
                        <h3 class="patient-panel-title">Plan de tratamiento</h3>
                        <p class="patient-panel-subtitle">Resumen de tratamientos</p>
                    </div>

                    <a href="{{ route('pacientes.plan-tratamiento', 1) }}" class="panel-link">
                        Ver todo
                    </a>
                </div>

                <div class="mini-treatment-list">
                    <div class="mini-treatment-item">
                        <div>
                            <strong class="mini-treatment-tooth">Diente 16</strong>
                            <p class="mini-treatment-text">Resina por caries oclusal</p>
                        </div>
                        <span class="mini-treatment-badge pending">Pendiente</span>
                    </div>

                    <div class="mini-treatment-item">
                        <div>
                            <strong class="mini-treatment-tooth">Diente 26</strong>
                            <p class="mini-treatment-text">Endodoncia</p>
                        </div>
                        <span class="mini-treatment-badge process">En proceso</span>
                    </div>

                    <div class="mini-treatment-item">
                        <div>
                            <strong class="mini-treatment-tooth">Diente 35</strong>
                            <p class="mini-treatment-text">Revisión de restauración</p>
                        </div>
                        <span class="mini-treatment-badge done">Finalizado</span>
                    </div>
                </div>
            </div>

            <div class="patient-panel">
                <div class="patient-panel-header">
                    <div>
                        <h3 class="patient-panel-title">Últimas notas</h3>
                        <p class="patient-panel-subtitle">Seguimiento reciente</p>
                    </div>

                    <a href="{{ route('pacientes.notas', 1) }}" class="panel-link">
                        Ver notas
                    </a>
                </div>

                <div class="notes-timeline-mini">
                    <div class="note-mini-item">
                        <span class="note-mini-date">02/03/2026</span>
                        <p class="note-mini-text">Paciente refiere disminución del dolor tras medicación y limpieza.</p>
                    </div>

                    <div class="note-mini-item">
                        <span class="note-mini-date">20/02/2026</span>
                        <p class="note-mini-text">Se realiza valoración inicial y toma de diagnóstico clínico.</p>
                    </div>

                    <div class="note-mini-item">
                        <span class="note-mini-date">12/02/2026</span>
                        <p class="note-mini-text">Se agenda seguimiento para tratamiento restaurativo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection