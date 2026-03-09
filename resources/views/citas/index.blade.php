@extends('layouts.app')

@section('title', 'Citas')

@section('content')

<div class="container">
    <div class="box">
        <div class="box-header with-border d-flex justify-content-between align-items-center">
            <h3 class="box-title">Agenda de Citas</h3>

            <a href="javascript:void(0)" id="newAppointmentBtn" class="btn btn-primary">
                Nueva cita
            </a>
        </div>

        <div class="box-body">
            <div id="calendar"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="appointmentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="appointmentForm" onsubmit="return false;">
                    <div class="mb-3">
                        <label class="form-label">Paciente</label>
                        <input
                            type="text"
                            id="patientName"
                            class="form-control"
                            placeholder="Nombre del paciente"
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Doctor</label>
                        <select id="doctorSelect" class="form-control">
                            <option value="Dr. Juan Pérez">Dr. Juan Pérez</option>
                            <option value="Dra. María López">Dra. María López</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Servicio</label>
                        <select id="serviceSelect" class="form-control">
                            <option value="Limpieza">Limpieza</option>
                            <option value="Blanqueamiento">Blanqueamiento</option>
                            <option value="Extracción">Extracción</option>
                            <option value="Valoración">Valoración</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha y hora</label>
                        <input
                            type="datetime-local"
                            id="appointmentDate"
                            class="form-control"
                        >
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button type="button" class="btn btn-primary" id="saveAppointmentBtn">
                    Guardar Cita
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
.fc .fc-toolbar-title {
    color: #0fa88c;
    font-weight: 600;
}

.fc .fc-button {
    background-color: #0fa88c !important;
    border-color: #0fa88c !important;
}

.fc .fc-button:hover {
    background-color: #0c8f78 !important;
    border-color: #0c8f78 !important;
}

.fc .fc-button:focus,
.fc .fc-button:active {
    box-shadow: none !important;
}

.fc .fc-event {
    background-color: #1ec9a8;
    border: none;
    color: white;
    font-size: 13px;
    border-radius: 8px;
    padding: 2px 4px;
    cursor: pointer;
}

.fc .fc-timegrid-slot-label {
    color: #6c757d;
}

.fc .fc-col-header-cell {
    background: #f5fffd;
}

#calendar {
    min-height: 700px;
}
</style>

@section('scripts')
<script>
    let calendar;
    let appointmentModal;

    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar');
        const modalEl = document.getElementById('appointmentModal');
        const newAppointmentBtn = document.getElementById('newAppointmentBtn');
        const saveAppointmentBtn = document.getElementById('saveAppointmentBtn');
        const appointmentForm = document.getElementById('appointmentForm');

        appointmentModal = new bootstrap.Modal(modalEl);

        calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            locale: 'es',
            height: 700,
            slotMinTime: '08:00:00',
            slotMaxTime: '19:00:00',
            slotDuration: '00:30:00',
            selectable: true,
            selectMirror: true,
            nowIndicator: true,
            allDaySlot: false,
            editable: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },

            buttonText: {
                today: 'Hoy',
                month: 'Mes',
                week: 'Semana',
                day: 'Día'
            },

            select: function(info) {
                openAppointmentModal(info.start);
            },

            eventClick: function(info) {
                const event = info.event;
                const patient = event.extendedProps.patient || 'Sin paciente';
                const doctor = event.extendedProps.doctor || 'Sin doctor';
                const service = event.extendedProps.service || 'Sin servicio';

                alert(
                    'Paciente: ' + patient + '\n' +
                    'Doctor: ' + doctor + '\n' +
                    'Servicio: ' + service + '\n' +
                    'Inicio: ' + formatDateForDisplay(event.start)
                );
            },

            events: [
                {
                    title: 'Juan Pérez - Limpieza',
                    start: '2026-03-10T09:00:00',
                    end: '2026-03-10T09:30:00',
                    extendedProps: {
                        patient: 'Juan Pérez',
                        doctor: 'Dr. Juan Pérez',
                        service: 'Limpieza'
                    }
                },
                {
                    title: 'Ana López - Blanqueamiento',
                    start: '2026-03-10T11:00:00',
                    end: '2026-03-10T11:30:00',
                    extendedProps: {
                        patient: 'Ana López',
                        doctor: 'Dra. María López',
                        service: 'Blanqueamiento'
                    }
                }
            ]
        });

        calendar.render();

        newAppointmentBtn.addEventListener('click', function () {
            openAppointmentModal(new Date());
        });

        saveAppointmentBtn.addEventListener('click', saveAppointment);

        modalEl.addEventListener('hidden.bs.modal', function () {
            appointmentForm.reset();
        });
    });

    function openAppointmentModal(date) {
        document.getElementById('appointmentDate').value = formatDateForInput(date);
        appointmentModal.show();
    }

    function saveAppointment() {
        const patient = document.getElementById('patientName').value.trim();
        const doctor = document.getElementById('doctorSelect').value;
        const service = document.getElementById('serviceSelect').value;
        const date = document.getElementById('appointmentDate').value;

        if (!patient) {
            alert('Ingresa el nombre del paciente');
            return;
        }

        if (!date) {
            alert('Selecciona fecha y hora');
            return;
        }

        const startDate = new Date(date);
        const endDate = new Date(startDate.getTime() + 30 * 60000); // 30 minutos

        calendar.addEvent({
            title: patient + ' - ' + service,
            start: startDate,
            end: endDate,
            extendedProps: {
                patient: patient,
                doctor: doctor,
                service: service
            }
        });

        appointmentModal.hide();
    }

    function formatDateForInput(date) {
        const d = new Date(date);
        const year = d.getFullYear();
        const month = String(d.getMonth() + 1).padStart(2, '0');
        const day = String(d.getDate()).padStart(2, '0');
        const hours = String(d.getHours()).padStart(2, '0');
        const minutes = String(d.getMinutes()).padStart(2, '0');

        return `${year}-${month}-${day}T${hours}:${minutes}`;
    }

    function formatDateForDisplay(date) {
        const d = new Date(date);
        return d.toLocaleString('es-MX', {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit',
            hour: '2-digit',
            minute: '2-digit'
        });
    }
</script>
@endsection