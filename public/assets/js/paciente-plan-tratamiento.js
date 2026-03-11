document.addEventListener('DOMContentLoaded', function () {
    const newTreatmentBtn = document.getElementById('newTreatmentBtn');
    const treatmentModalEl = document.getElementById('treatmentModal');
    const treatmentModal = treatmentModalEl ? new bootstrap.Modal(treatmentModalEl) : null;

    const treatmentForm = document.getElementById('treatmentForm');
    const treatmentGrid = document.getElementById('treatmentGrid');
    const saveTreatmentBtn = document.getElementById('saveTreatmentBtn');
    const treatmentModalTitle = document.getElementById('treatmentModalTitle');

    const treatmentTooth = document.getElementById('treatmentTooth');
    const treatmentDiagnosis = document.getElementById('treatmentDiagnosis');
    const treatmentProcedure = document.getElementById('treatmentProcedure');
    const treatmentStatus = document.getElementById('treatmentStatus');

    const filterButtons = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('treatmentSearch');
    const emptyState = document.getElementById('treatmentEmptyState');

    let editingCard = null;
    let currentFilter = 'all';

    function getStatusMeta(status) {
        const map = {
            pending: {
                label: 'Pendiente',
                badgeClass: 'status-pending',
                actionClass: 'action-btn-success-soft',
                actionIcon: 'si si-check',
                nextStatus: 'completed'
            },
            progress: {
                label: 'En proceso',
                badgeClass: 'status-progress',
                actionClass: 'action-btn-success-soft',
                actionIcon: 'si si-check',
                nextStatus: 'completed'
            },
            completed: {
                label: 'Completado',
                badgeClass: 'status-completed',
                actionClass: 'action-btn-neutral-soft',
                actionIcon: 'si si-refresh',
                nextStatus: 'pending'
            }
        };

        return map[status];
    }

    function resetForm() {
        if (treatmentForm) treatmentForm.reset();
        editingCard = null;
        if (treatmentModalTitle) {
            treatmentModalTitle.textContent = 'Nuevo tratamiento';
        }
    }

    function createTreatmentCard({ tooth, diagnosis, procedure, status }) {
        const meta = getStatusMeta(status);

        const card = document.createElement('div');
        card.className = 'treatment-card';
        card.dataset.status = status;
        card.dataset.search = `${tooth} ${diagnosis} ${procedure}`.toLowerCase();

        card.innerHTML = `
            <div class="treatment-card-top">
                <div class="tooth-chip">
                    <span class="tooth-chip-icon">🦷</span>
                    <span>Diente ${tooth}</span>
                </div>

                <span class="status-badge ${meta.badgeClass}">${meta.label}</span>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Diagnóstico</div>
                <div class="treatment-block-value">${diagnosis}</div>
            </div>

            <div class="treatment-block">
                <div class="treatment-block-label">Tratamiento</div>
                <div class="treatment-block-value">${procedure}</div>
            </div>

            <div class="treatment-card-footer">
                <button class="action-btn action-btn-primary edit-treatment-btn">
                    <i class="si si-pencil"></i>
                </button>

                <button class="action-btn ${meta.actionClass} change-status-btn" data-next-status="${meta.nextStatus}">
                    <i class="${meta.actionIcon}"></i>
                </button>
            </div>
        `;

        bindCardEvents(card);
        return card;
    }

    function updateCard(card, { tooth, diagnosis, procedure, status }) {
        const meta = getStatusMeta(status);

        card.dataset.status = status;
        card.dataset.search = `${tooth} ${diagnosis} ${procedure}`.toLowerCase();

        card.querySelector('.tooth-chip span:last-child').textContent = `Diente ${tooth}`;
        card.querySelector('.status-badge').className = `status-badge ${meta.badgeClass}`;
        card.querySelector('.status-badge').textContent = meta.label;

        card.querySelectorAll('.treatment-block-value')[0].textContent = diagnosis;
        card.querySelectorAll('.treatment-block-value')[1].textContent = procedure;

        const statusBtn = card.querySelector('.change-status-btn');
        statusBtn.className = `action-btn ${meta.actionClass} change-status-btn`;
        statusBtn.dataset.next-status = meta.nextStatus;
        statusBtn.querySelector('i').className = meta.actionIcon;
    }

    function bindCardEvents(card) {
        const editBtn = card.querySelector('.edit-treatment-btn');
        const statusBtn = card.querySelector('.change-status-btn');

        if (editBtn) {
            editBtn.addEventListener('click', function () {
                editingCard = card;

                const toothText = card.querySelector('.tooth-chip span:last-child').textContent.replace('Diente ', '').trim();
                const diagnosis = card.querySelectorAll('.treatment-block-value')[0].textContent.trim();
                const procedure = card.querySelectorAll('.treatment-block-value')[1].textContent.trim();
                const status = card.dataset.status;

                treatmentTooth.value = toothText;
                treatmentDiagnosis.value = diagnosis;
                treatmentProcedure.value = procedure;
                treatmentStatus.value = status;

                if (treatmentModalTitle) {
                    treatmentModalTitle.textContent = 'Editar tratamiento';
                }

                treatmentModal.show();
            });
        }

        if (statusBtn) {
            statusBtn.addEventListener('click', function () {
                const nextStatus = statusBtn.dataset.nextStatus;

                const toothText = card.querySelector('.tooth-chip span:last-child').textContent.replace('Diente ', '').trim();
                const diagnosis = card.querySelectorAll('.treatment-block-value')[0].textContent.trim();
                const procedure = card.querySelectorAll('.treatment-block-value')[1].textContent.trim();

                updateCard(card, {
                    tooth: toothText,
                    diagnosis,
                    procedure,
                    status: nextStatus
                });

                updateCounters();
                applyFiltersAndSearch();
            });
        }
    }

    function updateCounters() {
        const cards = [...document.querySelectorAll('.treatment-card')];

        const total = cards.length;
        const pending = cards.filter(card => card.dataset.status === 'pending').length;
        const progress = cards.filter(card => card.dataset.status === 'progress').length;
        const completed = cards.filter(card => card.dataset.status === 'completed').length;

        document.getElementById('summaryTotal').textContent = total;
        document.getElementById('summaryPending').textContent = pending;
        document.getElementById('summaryProgress').textContent = progress;
        document.getElementById('summaryCompleted').textContent = completed;
    }

    function applyFiltersAndSearch() {
        const cards = [...document.querySelectorAll('.treatment-card')];
        const query = (searchInput?.value || '').toLowerCase().trim();
        let visible = 0;

        cards.forEach(card => {
            const matchesFilter = currentFilter === 'all' || card.dataset.status === currentFilter;
            const matchesSearch = !query || (card.dataset.search || '').includes(query);
            const shouldShow = matchesFilter && matchesSearch;

            card.style.display = shouldShow ? '' : 'none';

            if (shouldShow) visible++;
        });

        if (emptyState) {
            emptyState.classList.toggle('d-none', visible !== 0);
        }
    }

    document.querySelectorAll('.treatment-card').forEach(bindCardEvents);
    updateCounters();
    applyFiltersAndSearch();

    if (newTreatmentBtn) {
        newTreatmentBtn.addEventListener('click', function () {
            resetForm();
            treatmentModal.show();
        });
    }

    if (saveTreatmentBtn) {
        saveTreatmentBtn.addEventListener('click', function () {
            const tooth = treatmentTooth.value.trim();
            const diagnosis = treatmentDiagnosis.value.trim();
            const procedure = treatmentProcedure.value.trim();
            const status = treatmentStatus.value;

            if (!tooth || !diagnosis || !procedure) {
                alert('Completa diente, diagnóstico y tratamiento.');
                return;
            }

            const payload = { tooth, diagnosis, procedure, status };

            if (editingCard) {
                updateCard(editingCard, payload);
            } else {
                const newCard = createTreatmentCard(payload);
                treatmentGrid.prepend(newCard);
            }

            updateCounters();
            applyFiltersAndSearch();
            resetForm();
            treatmentModal.hide();
        });
    }

    if (treatmentModalEl) {
        treatmentModalEl.addEventListener('hidden.bs.modal', resetForm);
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            filterButtons.forEach(item => item.classList.remove('active'));
            btn.classList.add('active');
            currentFilter = btn.dataset.filter;
            applyFiltersAndSearch();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', applyFiltersAndSearch);
    }
});