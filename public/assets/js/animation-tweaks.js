/**
 * animation-tweaks.js
 * Ajusta las velocidades de animación jQuery del template Doclinic.
 * Modifica los valores aquí para cambiar la fluidez.
 *
 * Este archivo se carga DESPUÉS de template.js para sobrescribir sus defaults.
 */

(function ($) {
    'use strict';

    /* -------------------------------------------------------
       VELOCIDADES (en milisegundos)
       Originals del template: animationSpeed: 500, fadeOut: 600
       ------------------------------------------------------- */
    var CONFIG = {
        treeAnimSpeed: 250,   // Accordion del menú sidebar (original: 500)
        boxCollapseSpeed: 220,  // Collapse/expand de los "box" cards (original: 500)
        boxRemoveSpeed: 250,   // Fade out al cerrar un box (original: 600)
    };

    /* -------------------------------------------------------
       LOADER DE PÁGINA — ocultar con clase CSS (spinner)
       -------------------------------------------------------
       El spinner gira via CSS puro (@keyframes spin).
       Acá solo lo ocultamos al terminar de cargar la página.
       ------------------------------------------------------- */
    document.addEventListener('DOMContentLoaded', function () {
        var loader = document.getElementById('loader');
        if (loader) {
            // Pequeño delay para que el spinner se vea al menos 1 frame
            requestAnimationFrame(function () {
                loader.classList.add('hidden');
                // Remover del DOM después del fade-out (300ms = duración del transition)
                setTimeout(function () {
                    loader.style.display = 'none';
                }, 350);
            });
        }
    });

    /* -------------------------------------------------------
       TREE / SIDEBAR ACCORDION — velocidad de slideDown/Up
       Se re-inicializa el plugin tree con el nuevo speed
       ------------------------------------------------------- */
    $(window).on('load', function () {
        $('[data-widget="tree"]').each(function () {
            var $el = $(this);
            // Si el plugin ya fue inicializado, re-inicializar con nueva velocidad
            var data = $el.data('Masteradmin.tree');
            if (data) {
                data.options.animationSpeed = CONFIG.treeAnimSpeed;
            }
        });
    });

    /* -------------------------------------------------------
       BOX WIDGET — velocidad de collapse, expand, remove
       ------------------------------------------------------- */
    $(window).on('load', function () {
        $('.box').each(function () {
            var $box = $(this);
            var data = $box.data('Masteradmin.boxwidget');
            if (data) {
                data.options.animationSpeed = CONFIG.boxCollapseSpeed;
            }
        });

        /* Fade out del botón close — original era 600ms */
        $(document).off('click', '.box-btn-close').on('click', '.box-btn-close', function () {
            $(this).parents('.box').fadeOut(CONFIG.boxRemoveSpeed, function () {
                ($(this).parent().children().length === 1
                    ? $(this).parent()
                    : $(this)
                ).remove();
            });
        });
    });

})(jQuery);
