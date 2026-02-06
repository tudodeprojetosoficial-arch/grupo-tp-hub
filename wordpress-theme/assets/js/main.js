/**
 * Home Money - Main JavaScript
 *
 * @package HomeMoney
 * @version 1.0.0
 */

(function () {
    'use strict';

    /**
     * Mobile menu toggle
     */
    function initMobileMenu() {
        var toggle = document.querySelector('.menu-toggle');
        var nav = document.querySelector('.main-navigation');

        if (!toggle || !nav) return;

        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        // Fechar menu ao clicar em um link
        var links = nav.querySelectorAll('a');
        links.forEach(function (link) {
            link.addEventListener('click', function () {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });

        // Fechar menu ao clicar fora
        document.addEventListener('click', function (e) {
            if (!nav.contains(e.target) && !toggle.contains(e.target)) {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    /**
     * Smooth scroll para âncoras
     */
    function initSmoothScroll() {
        var anchors = document.querySelectorAll('a[href^="#"]');
        anchors.forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                var targetId = this.getAttribute('href');
                if (targetId === '#') return;

                var target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }

    /**
     * Header com sombra ao rolar
     */
    function initHeaderScroll() {
        var header = document.getElementById('site-header');
        if (!header) return;

        var scrollThreshold = 10;

        window.addEventListener('scroll', function () {
            if (window.scrollY > scrollThreshold) {
                header.style.boxShadow = '0 2px 12px rgba(0,0,0,0.08)';
            } else {
                header.style.boxShadow = 'none';
            }
        }, { passive: true });
    }

    /**
     * Inicializar tudo quando o DOM estiver pronto
     */
    document.addEventListener('DOMContentLoaded', function () {
        initMobileMenu();
        initSmoothScroll();
        initHeaderScroll();
    });

})();
