@extends('layouts.app')

@section('title','Notas de evolución')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/paciente-notas.css') }}">
@endsection

@section('content')

<div class="notes-page">

<div class="notes-header">

<div>
<h1 class="notes-title">Notas de evolución</h1>
<p class="notes-subtitle">
Registro cronológico del progreso del paciente
</p>
</div>

<button class="btn-ui btn-ui-primary" id="newNoteBtn">
Agregar nota
</button>

</div>


<div class="patient-section-nav">
<a href="{{ route('pacientes.show',1) }}" class="patient-section-link">Información general</a>
<a href="{{ route('pacientes.odontograma',1) }}" class="patient-section-link">Odontograma</a>
<a href="{{ route('pacientes.plan-tratamiento',1) }}" class="patient-section-link">Plan de tratamiento</a>
<a href="{{ route('pacientes.notas',1) }}" class="patient-section-link active">Notas de evolución</a>
</div>


<div class="notes-timeline" id="notesTimeline">

<div class="note-card">

<div class="note-date">
12 Marzo 2026
</div>

<div class="note-text">
Paciente refiere disminución del dolor después de la endodoncia en el diente 36. Se observa buena evolución clínica sin signos de infección.
</div>

</div>


<div class="note-card">

<div class="note-date">
05 Marzo 2026
</div>

<div class="note-text">
Se realizó limpieza dental general. Se recomienda control en 6 meses y reforzar técnica de cepillado.
</div>

</div>


</div>

</div>


<div class="modal fade" id="noteModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title">Nueva nota de evolución</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<form id="noteForm" onsubmit="return false;">

<div class="form-group-ui">

<label class="form-label-ui">Fecha</label>

<input type="date"
id="noteDate"
class="form-control-ui">

</div>


<div class="form-group-ui mt-16">

<label class="form-label-ui">Nota</label>

<textarea
id="noteText"
class="form-control-ui textarea-ui"
rows="5"
placeholder="Describe la evolución del paciente">
</textarea>

</div>

</form>

</div>

<div class="modal-footer">

<button class="btn-ui btn-ui-secondary" data-bs-dismiss="modal">
Cancelar
</button>

<button class="btn-ui btn-ui-primary" id="saveNoteBtn">
Guardar nota
</button>

</div>

</div>
</div>
</div>

@endsection


@section('scripts')
<script src="{{ asset('assets/js/paciente-notas.js') }}"></script>
@endsection