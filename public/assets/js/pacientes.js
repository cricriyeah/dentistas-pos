document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('pacienteSearch');
    const table = document.getElementById('pacientesTable');
    const emptyState = document.getElementById('patientsEmptyState');

    if (!input || !table) return;

    input.addEventListener('input', function () {
        const q = (input.value || '').toLowerCase().trim();
        const rows = table.querySelectorAll('tbody tr');
        let visibleRows = 0;

        rows.forEach(function (row) {
            const text = row.innerText.toLowerCase();
            const matches = text.includes(q);

            row.style.display = matches ? '' : 'none';

            if (matches) {
                visibleRows++;
            }
        });

        if (emptyState) {
            emptyState.classList.toggle('d-none', visibleRows !== 0);
        }
    });
});