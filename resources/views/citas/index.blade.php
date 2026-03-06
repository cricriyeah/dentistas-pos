@extends('layouts.app')

@section('title', 'Citas')

@section('content')

    <div class="container">

        <div class="box">

            <div class="box-header with-border d-flex justify-content-between align-items-center">

                <h3 class="box-title">
                    Agenda de Citas
                </h3>

                <a href="#" class="btn btn-primary">
                    Nueva cita
                </a>

            </div>

            <div class="box-body">

                <div id="calendar"></div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="appointmentModal" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Nueva Cita
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body">

                <form>

                    <div class="mb-3">

                        <label class="form-label">
                            Paciente
                        </label>

                        <input type="text" id="patientName" class="form-control" placeholder="Nombre del paciente">

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Doctor
                        </label>

                        <select id="doctorSelect" class="form-control">

                            <option>Dr. Juan Pérez</option>
                            <option>Dra. María López</option>

                        </select>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Servicio
                        </label>

                        <select id="serviceSelect" class="form-control">

                            <option>Limpieza</option>
                            <option>Blanqueamiento</option>

                        </select>

                    </div>


                    <div class="mb-3">

                        <label class="form-label">
                            Fecha y hora
                        </label>

                        <input type="text" id="appointmentDate" class="form-control">

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancelar
                </button>

                <button class="btn btn-primary" onclick="saveAppointment()">
                    Guardar Cita
                </button>

            </div>

        </div>

    </div>

</div>

@endsection
<style>

.fc .fc-toolbar-title
{
    color: #0fa88c;
    font-weight: 600;
}

.fc-button
{
    background-color: #0fa88c !important;
    border-color: #0fa88c !important;
}

.fc-button:hover
{
    background-color: #0c8f78 !important;
}

.fc-event
{
    background-color: #1ec9a8;
    border: none;
    color: white;
    font-size: 13px;
}

.fc-timegrid-slot-label
{
    color: #6c757d;
}

.fc-col-header-cell
{
    background: #f5fffd;
}

</style>
@section('scripts')

<script>

let calendar;   // <-- variable global

document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');

    calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'timeGridWeek',

        height: 700,

        slotMinTime: '08:00:00',

        slotMaxTime: '19:00:00',

        slotDuration: '00:30:00',

        selectable: true,

        selectMirror: true,

        nowIndicator: true,

        allDaySlot: false,

        headerToolbar:
        {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },

        select: function(info)
        {
            openAppointmentModal(info.startStr);
        },

        events:
        [
            {
                title: 'Juan Perez - Limpieza',
                start: '2026-03-10T09:00:00',
                end: '2026-03-10T09:30:00'
            }
        ]

    });

    calendar.render();

});

function openAppointmentModal(date)
{

    document.getElementById('appointmentDate').value = date;

    var modal = new bootstrap.Modal(document.getElementById('appointmentModal'));

    modal.show();

}

function saveAppointment()
{

    const patient = document.getElementById('patientName').value;
    const doctor = document.getElementById('doctorSelect').value;
    const service = document.getElementById('serviceSelect').value;
    const date = document.getElementById('appointmentDate').value;

    if(!patient)
    {
        alert("Ingresa el nombre del paciente");
        return;
    }

    const title = patient + " - " + service;

    calendar.addEvent({
        title: title,
        start: date,
        end: date
    });

    const modal = bootstrap.Modal.getInstance(document.getElementById('appointmentModal'));

    modal.hide();

}

</script>



@endsection