@extends('layouts.app')

@section('title', 'Odontograma del paciente')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/paciente-odontograma.css') }}">
@endsection

@section('content')
@php
    $superiorIzquierdo = [18,17,16,15,14,13,12,11];
    $superiorDerecho   = [21,22,23,24,25,26,27,28];
    $inferiorIzquierdo = [48,47,46,45,44,43,42,41];
    $inferiorDerecho   = [31,32,33,34,35,36,37,38];
@endphp

<div class="odontogram-page">

    <div class="odontogram-header">
        <div>
            <h1 class="odontogram-title">Odontograma</h1>
            <p class="odontogram-subtitle">Registro visual del estado dental del paciente</p>
        </div>

        <div class="odontogram-header-actions">
            <a href="{{ route('pacientes.show', 1) }}" class="btn-ui btn-ui-secondary">
                Información general
            </a>
            <button type="button" class="btn-ui btn-ui-primary" id="clearOdontogramBtn">
                Limpiar odontograma
            </button>
        </div>
    </div>

    <div class="patient-section-nav">
        <a href="{{ route('pacientes.show', 1) }}" class="patient-section-link">Información general</a>
        <a href="{{ route('pacientes.odontograma', 1) }}" class="patient-section-link active">Odontograma</a>
        <a href="{{ route('pacientes.plan-tratamiento', 1) }}" class="patient-section-link">Plan de tratamiento</a>
        <a href="{{ route('pacientes.notas', 1) }}" class="patient-section-link">Notas de evolución</a>
    </div>

    <div class="odontogram-layout">

        <div class="odontogram-sidebar-card">
            <div class="sidebar-card-header">
                <h3 class="sidebar-card-title">Leyenda</h3>
                <p class="sidebar-card-subtitle">Estados visuales del odontograma</p>
            </div>

            <div class="legend-list">
                <div class="legend-item">
                    <span class="state-dot dot-healthy"></span>
                    <span>Normal</span>
                </div>
                <div class="legend-item">
                    <span class="state-dot dot-caries"></span>
                    <span>Caries</span>
                </div>
                <div class="legend-item">
                    <span class="state-dot dot-restoration"></span>
                    <span>Restauración</span>
                </div>
                <div class="legend-item">
                    <span class="state-dot dot-endodontics"></span>
                    <span>Endodoncia</span>
                </div>
                <div class="legend-item">
                    <span class="state-dot dot-crown"></span>
                    <span>Corona</span>
                </div>
                <div class="legend-item">
                    <span class="state-dot dot-extraction"></span>
                    <span>Extracción</span>
                </div>
                <div class="legend-item">
                    <span class="state-dot dot-implant"></span>
                    <span>Implante</span>
                </div>
            </div>

            <div class="sidebar-card-divider"></div>

            <div class="sidebar-card-header">
                <h3 class="sidebar-card-title">Instrucción</h3>
                <p class="sidebar-card-subtitle">
                    Haz click sobre un diente para abrir el detalle y asignar superficie, estado y observación.
                </p>
            </div>
        </div>

        <div class="odontogram-main-card">

            <div class="odontogram-card-header">
                <div>
                    <h3 class="odontogram-card-title">Vista dental del paciente</h3>
                    <p class="odontogram-card-subtitle">Haz click sobre un diente para editarlo</p>
                </div>

                <div class="selected-state-indicator">
                    Diente seleccionado:
                    <strong id="selectedToothLabel">Ninguno</strong>
                </div>
            </div>

            <div class="odontogram-scroll">
                <div class="odontogram-board">

                    <div class="arch-section">
                        <div class="arch-header">
                            <span>Arcada superior</span>
                        </div>

                        <div class="teeth-row teeth-row-fixed">
                            @foreach($superiorIzquierdo as $tooth)
                                <div class="tooth-card state-healthy" data-tooth="{{ $tooth }}">
                                    <div class="tooth-number">{{ $tooth }}</div>
                                    <div class="tooth-shape">
                                        <div class="tooth-surface surface-top"></div>
                                        <div class="tooth-middle">
                                            <div class="tooth-surface surface-left"></div>
                                            <div class="tooth-surface surface-center"></div>
                                            <div class="tooth-surface surface-right"></div>
                                        </div>
                                        <div class="tooth-surface surface-bottom"></div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach($superiorDerecho as $tooth)
                                <div class="tooth-card state-healthy" data-tooth="{{ $tooth }}">
                                    <div class="tooth-number">{{ $tooth }}</div>
                                    <div class="tooth-shape">
                                        <div class="tooth-surface surface-top"></div>
                                        <div class="tooth-middle">
                                            <div class="tooth-surface surface-left"></div>
                                            <div class="tooth-surface surface-center"></div>
                                            <div class="tooth-surface surface-right"></div>
                                        </div>
                                        <div class="tooth-surface surface-bottom"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="arch-divider"></div>

                    <div class="arch-section">
                        <div class="arch-header">
                            <span>Arcada inferior</span>
                        </div>

                        <div class="teeth-row teeth-row-fixed">
                            @foreach($inferiorIzquierdo as $tooth)
                                <div class="tooth-card state-healthy" data-tooth="{{ $tooth }}">
                                    <div class="tooth-number">{{ $tooth }}</div>
                                    <div class="tooth-shape">
                                        <div class="tooth-surface surface-top"></div>
                                        <div class="tooth-middle">
                                            <div class="tooth-surface surface-left"></div>
                                            <div class="tooth-surface surface-center"></div>
                                            <div class="tooth-surface surface-right"></div>
                                        </div>
                                        <div class="tooth-surface surface-bottom"></div>
                                    </div>
                                </div>
                            @endforeach

                            @foreach($inferiorDerecho as $tooth)
                                <div class="tooth-card state-healthy" data-tooth="{{ $tooth }}">
                                    <div class="tooth-number">{{ $tooth }}</div>
                                    <div class="tooth-shape">
                                        <div class="tooth-surface surface-top"></div>
                                        <div class="tooth-middle">
                                            <div class="tooth-surface surface-left"></div>
                                            <div class="tooth-surface surface-center"></div>
                                            <div class="tooth-surface surface-right"></div>
                                        </div>
                                        <div class="tooth-surface surface-bottom"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<div class="modal fade" id="toothDetailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content tooth-modal-content">
            <div class="modal-header tooth-modal-header">
                <div>
                    <h5 class="modal-title tooth-modal-title">Detalle del diente</h5>
                    <p class="tooth-modal-subtitle">
                        Configura el estado visual del diente <strong id="modalToothNumber">--</strong>
                    </p>
                </div>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body tooth-modal-body">
                <div class="form-group-ui">
                    <label class="form-label-ui">Estado</label>
                    <select id="toothStateSelect" class="form-control-ui">
                        <option value="healthy">Normal</option>
                        <option value="caries">Caries</option>
                        <option value="restoration">Restauración</option>
                        <option value="endodontics">Endodoncia</option>
                        <option value="crown">Corona</option>
                        <option value="extraction">Extracción</option>
                        <option value="implant">Implante</option>
                    </select>
                </div>

                <div class="form-group-ui mt-16">
                    <label class="form-label-ui">Superficie</label>
                    <div class="surface-selector">
                        <button type="button" class="surface-btn active" data-surface="all">Todo el diente</button>
                        <button type="button" class="surface-btn" data-surface="top">Superior</button>
                        <button type="button" class="surface-btn" data-surface="left">Izquierda</button>
                        <button type="button" class="surface-btn" data-surface="center">Centro</button>
                        <button type="button" class="surface-btn" data-surface="right">Derecha</button>
                        <button type="button" class="surface-btn" data-surface="bottom">Inferior</button>
                    </div>
                </div>

                <div class="form-group-ui mt-16">
                    <label class="form-label-ui">Observación</label>
                    <textarea id="toothObservation" class="form-control-ui textarea-ui" rows="4" placeholder="Escribe una observación visual del diente..."></textarea>
                </div>

                <div class="tooth-preview-box mt-16">
                    <div class="tooth-preview-label">Vista previa</div>
                    <div class="tooth-preview-card">
                        <div class="tooth-card tooth-preview state-healthy" id="toothPreviewCard">
                            <div class="tooth-shape">
                                <div class="tooth-surface surface-top"></div>
                                <div class="tooth-middle">
                                    <div class="tooth-surface surface-left"></div>
                                    <div class="tooth-surface surface-center"></div>
                                    <div class="tooth-surface surface-right"></div>
                                </div>
                                <div class="tooth-surface surface-bottom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer tooth-modal-footer">
                <button type="button" class="btn-ui btn-ui-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>
                <button type="button" class="btn-ui btn-ui-primary" id="saveToothDetailBtn">
                    Aplicar cambios
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/paciente-odontograma.js') }}"></script>
@endsection