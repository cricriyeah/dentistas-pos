let calendar;
let appointmentModal;

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    const modalEl = document.getElementById('appointmentModal');
    const newAppointmentBtn = document.getElementById('newAppointmentBtn');
    const saveAppointmentBtn = document.getElementById('saveAppointmentBtn');
    const appointmentForm = document.getElementById('appointmentForm');

    if (!calendarEl || !modalEl) return;

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
        select: function (info) {
            openAppointmentModal(info.start);
        },
        eventClick: function (info) {
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

    if (newAppointmentBtn) {
        newAppointmentBtn.addEventListener('click', function () {
            openAppointmentModal(new Date());
        });
    }

    if (saveAppointmentBtn) {
        saveAppointmentBtn.addEventListener('click', saveAppointment);
    }

    modalEl.addEventListener('hidden.bs.modal', function () {
        if (appointmentForm) {
            appointmentForm.reset();
        }
    });
});

function openAppointmentModal(date) {
    const appointmentDateInput = document.getElementById('appointmentDate');
    if (appointmentDateInput) {
        appointmentDateInput.value = formatDateForInput(date);
    }
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
    const endDate = new Date(startDate.getTime() + 30 * 60000);

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