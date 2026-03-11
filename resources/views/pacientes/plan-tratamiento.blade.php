@extends('layouts.app')

@section('title', 'Plan de tratamiento')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/paciente-plan-tratamiento.css') }}">
@endsection

@section('content')
<div class="treatment-page">

    <div class="treatment-header">
        <div>
            <h1 class="treatment-title">Plan de tratamiento</h1>
            <p class="treatment-subtitle">Diagnósticos y tratamientos planeados del paciente</p>
        </div>

        <div class="treatment-header-actions">
            <a href="{{ route('pacientes.odontograma', 1) }}" class="btn-ui btn-ui-secondary">
                Ver odontograma
            </a>

            <button type="button" class="btn-ui btn-ui-primary" id="newTreatmentBtn">
                Agregar tratamiento
            </button>
        </div>
    </div>

    <div class="patient-section-nav">
        <a href="{{ route('pacientes.show', 1) }}" class="patient-section-link">Información general</a>
        <a href="{{ route('pacientes.odontograma', 1) }}" class="patient-section-link">Odontograma</a>
        <a href="{{ route('pacientes.plan-tratamiento', 1) }}" class="patient-section-link active">Plan de tratamiento</a>
        <a href="{{ route('pacientes.notas', 1) }}" class="patient-section-link">Notas de evolución</a>
    </div>

    <div class="treatment-summary-grid">
        <div class="summary-card">
            <div class="summary-label">Total de tratamientos</div>
            <div class="summary-value" id="summaryTotal">3</div>
        </div>

        <div class="summary-card">
            <div class="summary-label">Pendientes</div>
            <div class="summary-value text-warning-soft" id="summaryPending">1</div>
        </div>

        <div class="summary-card">
            <div class="summary-label">En proceso</div>
            <div class="summary-value text-blue-soft" id="summaryProgress">1</div>
        </div>

        <div class="summary-card">
            <div class="summary-label">Completados</div>
            <div class="summary-value text-green-soft" id="summaryCompleted">1</div>
        </div>
    </div>

    <div class="treatment-toolbar">
        <div class="treatment-filters">
            <button class="filter-btn active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="pending">Pendientes</button>
            <button class="filter-btn" data-filter="progress">En proceso</button>
            <button class="filter-btn" data-filter="completed">Completados</button>
        </div>

        <div class="treatment-search-wrap">
            <input type="text" id="treatmentSearch" class="form-control-ui" placeholder="Buscar por diente o tratamiento...">
        </div>
    </div>

    <div class="treatment-grid" id="treatmentGrid">

        <div class="treatment-card" data-status="pending" data-search="36 caries profunda endodoncia corona">
            <div class="treatment-card-top">
                <div class="tooth-chip">
                    <span class="tooth-chip-icon">🦷</span>
                    <span>Diente 36</span>
                </div>

                <span class="status-badge status-pending">Pendiente</span>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Diagnóstico</div>
                <div class="treatment-block-value">Caries profunda con sensibilidad persistente.</div>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Tratamiento</div>
                <div class="treatment-block-value">Endodoncia y colocación de corona.</div>
            </div>

            <div class="treatment-card-footer">
                <button class="action-btn action-btn-primary edit-treatment-btn">
                    <i class="si si-pencil"></i>
                </button>

                <button class="action-btn action-btn-success-soft change-status-btn" data-next-status="completed">
                    <i class="si si-check"></i>
                </button>
            </div>
        </div>

        <div class="treatment-card" data-status="progress" data-search="11 fractura esmalte resina estetica">
            <div class="treatment-card-top">
                <div class="tooth-chip">
                    <span class="tooth-chip-icon">🦷</span>
                    <span>Diente 11</span>
                </div>

                <span class="status-badge status-progress">En proceso</span>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Diagnóstico</div>
                <div class="treatment-block-value">Fractura de esmalte en borde incisal.</div>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Tratamiento</div>
                <div class="treatment-block-value">Resina estética y ajuste oclusal.</div>
            </div>

            <div class="treatment-card-footer">
                <button class="action-btn action-btn-primary edit-treatment-btn">
                    <i class="si si-pencil"></i>
                </button>

                <button class="action-btn action-btn-success-soft change-status-btn" data-next-status="completed">
                    <i class="si si-check"></i>
                </button>
            </div>
        </div>

        <div class="treatment-card" data-status="completed" data-search="24 desgaste limpieza pulido">
            <div class="treatment-card-top">
                <div class="tooth-chip">
                    <span class="tooth-chip-icon">🦷</span>
                    <span>Diente 24</span>
                </div>

                <span class="status-badge status-completed">Completado</span>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Diagnóstico</div>
                <div class="treatment-block-value">Desgaste leve y acumulación de placa.</div>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Tratamiento</div>
                <div class="treatment-block-value">Limpieza dental y pulido.</div>
            </div>

            <div class="treatment-card-footer">
                <button class="action-btn action-btn-primary edit-treatment-btn">
                    <i class="si si-pencil"></i>
                </button>

                <button class="action-btn action-btn-neutral-soft change-status-btn" data-next-status="pending">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>

    </div>

    <div class="empty-state d-none" id="treatmentEmptyState">
        <h4>No se encontraron tratamientos</h4>
        <p>Prueba con otro filtro o agrega uno nuevo.</p>
    </div>

</div>

<div class="modal fade" id="treatmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content treatment-modal-content">
            <div class="modal-header treatment-modal-header">
                <div>
                    <h5 class="modal-title treatment-modal-title" id="treatmentModalTitle">Nuevo tratamiento</h5>
                    <p class="treatment-modal-subtitle">Captura los datos del plan de tratamiento</p>
                </div>

                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body treatment-modal-body">
                <form id="treatmentForm" onsubmit="return false;">
                    <div class="form-group-ui">
                        <label class="form-label-ui">Diente</label>
                        <input type="text" id="treatmentTooth" class="form-control-ui" placeholder="Ej. 36">
                    </div>

                    <div class="form-group-ui mt-16">
                        <label class="form-label-ui">Diagnóstico</label>
                        <textarea id="treatmentDiagnosis" class="form-control-ui textarea-ui" rows="3" placeholder="Describe el diagnóstico"></textarea>
                    </div>

                    <div class="form-group-ui mt-16">
                        <label class="form-label-ui">Tratamiento</label>
                        <textarea id="treatmentProcedure" class="form-control-ui textarea-ui" rows="3" placeholder="Describe el tratamiento"></textarea>
                    </div>

                    <div class="form-group-ui mt-16">
                        <label class="form-label-ui">Estado</label>
                        <select id="treatmentStatus" class="form-control-ui">
                            <option value="pending">Pendiente</option>
                            <option value="progress">En proceso</option>
                            <option value="completed">Completado</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="modal-footer treatment-modal-footer">
                <button type="button" class="btn-ui btn-ui-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button type="button" class="btn-ui btn-ui-primary" id="saveTreatmentBtn">
                    Guardar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/paciente-plan-tratamiento.js') }}"></script>
@endsection