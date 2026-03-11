document.addEventListener('DOMContentLoaded', function () {
    const toothCards = document.querySelectorAll('.tooth-card');
    const clearButton = document.getElementById('clearOdontogramBtn');
    const selectedToothLabel = document.getElementById('selectedToothLabel');

    const modalEl = document.getElementById('toothDetailModal');
    const toothModal = modalEl ? new bootstrap.Modal(modalEl) : null;

    const modalToothNumber = document.getElementById('modalToothNumber');
    const toothStateSelect = document.getElementById('toothStateSelect');
    const toothObservation = document.getElementById('toothObservation');
    const saveToothDetailBtn = document.getElementById('saveToothDetailBtn');
    const toothPreviewCard = document.getElementById('toothPreviewCard');
    const surfaceButtons = document.querySelectorAll('.surface-btn');

    let activeToothCard = null;
    let selectedSurface = 'all';

    const stateClasses = [
        'state-healthy',
        'state-caries',
        'state-restoration',
        'state-endodontics',
        'state-crown',
        'state-extraction',
        'state-implant'
    ];

    const surfaceClassMap = {
        caries: 'surface-mark-caries',
        restoration: 'surface-mark-restoration',
        endodontics: 'surface-mark-endodontics',
        crown: 'surface-mark-crown',
        implant: 'surface-mark-implant'
    };

    function clearStateClasses(element) {
        stateClasses.forEach(cls => element.classList.remove(cls));
    }

    function clearSurfaceMarks(card) {
        const surfaces = card.querySelectorAll('.tooth-surface');
        surfaces.forEach(surface => {
            surface.classList.remove(
                'surface-mark-caries',
                'surface-mark-restoration',
                'surface-mark-endodontics',
                'surface-mark-crown',
                'surface-mark-implant'
            );
        });
    }

    function getSurfaceElement(card, surface) {
        if (surface === 'top') return card.querySelector('.surface-top');
        if (surface === 'left') return card.querySelector('.surface-left');
        if (surface === 'center') return card.querySelector('.surface-center');
        if (surface === 'right') return card.querySelector('.surface-right');
        if (surface === 'bottom') return card.querySelector('.surface-bottom');
        return null;
    }

    function applyPreview() {
        if (!toothPreviewCard || !toothStateSelect) return;

        clearStateClasses(toothPreviewCard);
        clearSurfaceMarks(toothPreviewCard);

        const selectedState = toothStateSelect.value;

        if (selectedSurface === 'all' || selectedState === 'healthy' || selectedState === 'extraction') {
            toothPreviewCard.classList.add('state-' + selectedState);
            return;
        }

        toothPreviewCard.classList.add('state-healthy');

        const surfaceElement = getSurfaceElement(toothPreviewCard, selectedSurface);
        const surfaceClass = surfaceClassMap[selectedState];

        if (surfaceElement && surfaceClass) {
            surfaceElement.classList.add(surfaceClass);
        }
    }

    function setActiveSurfaceButton(surface) {
        surfaceButtons.forEach(btn => {
            btn.classList.toggle('active', btn.dataset.surface === surface);
        });
    }

    toothCards.forEach(function (tooth) {
        tooth.addEventListener('click', function () {
            activeToothCard = tooth;
            const toothNumber = tooth.dataset.tooth || '--';

            if (selectedToothLabel) {
                selectedToothLabel.textContent = toothNumber;
            }

            if (modalToothNumber) {
                modalToothNumber.textContent = toothNumber;
            }

            if (toothStateSelect) {
                const currentState = stateClasses.find(cls => tooth.classList.contains(cls)) || 'state-healthy';
                toothStateSelect.value = currentState.replace('state-', '');
            }

            if (toothObservation) {
                toothObservation.value = tooth.dataset.note || '';
            }

            selectedSurface = tooth.dataset.surface || 'all';
            setActiveSurfaceButton(selectedSurface);
            applyPreview();

            if (toothModal) {
                toothModal.show();
            }
        });
    });

    surfaceButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            selectedSurface = button.dataset.surface;
            setActiveSurfaceButton(selectedSurface);
            applyPreview();
        });
    });

    if (toothStateSelect) {
        toothStateSelect.addEventListener('change', applyPreview);
    }

    if (saveToothDetailBtn) {
        saveToothDetailBtn.addEventListener('click', function () {
            if (!activeToothCard || !toothStateSelect) return;

            const selectedState = toothStateSelect.value;
            const note = toothObservation ? toothObservation.value.trim() : '';

            clearStateClasses(activeToothCard);
            clearSurfaceMarks(activeToothCard);

            activeToothCard.dataset.note = note;
            activeToothCard.dataset.surface = selectedSurface;
            activeToothCard.dataset.state = selectedState;

            if (selectedSurface === 'all' || selectedState === 'healthy' || selectedState === 'extraction') {
                activeToothCard.classList.add('state-' + selectedState);
            } else {
                activeToothCard.classList.add('state-healthy');

                const surfaceElement = getSurfaceElement(activeToothCard, selectedSurface);
                const surfaceClass = surfaceClassMap[selectedState];

                if (surfaceElement && surfaceClass) {
                    surfaceElement.classList.add(surfaceClass);
                }
            }

            if (toothModal) {
                toothModal.hide();
            }
        });
    }

    if (clearButton) {
        clearButton.addEventListener('click', function () {
            toothCards.forEach(function (tooth) {
                clearStateClasses(tooth);
                clearSurfaceMarks(tooth);
                tooth.classList.add('state-healthy');
                tooth.dataset.note = '';
                tooth.dataset.surface = 'all';
                tooth.dataset.state = 'healthy';
            });

            if (selectedToothLabel) {
                selectedToothLabel.textContent = 'Ninguno';
            }
        });
    }

    toothCards.forEach(function (tooth) {
        tooth.classList.add('state-healthy');
        tooth.dataset.note = '';
        tooth.dataset.surface = 'all';
        tooth.dataset.state = 'healthy';
    });
});