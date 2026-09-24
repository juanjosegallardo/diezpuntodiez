(() => {
    'use strict';

    function initializeHalloween() {
        const section = document.getElementById('evento-halloween');
        const button = document.getElementById('hw-light-switch');
        const message = document.getElementById('hw-message');
        if (!section || !button || !message || section.dataset.hwReady === 'true') return;

        section.dataset.hwReady = 'true';
        const motion = window.matchMedia('(prefers-reduced-motion: reduce)');
        let lit = false;
        let animationTimer;
        let animationFrame;

        function stopSpark() {
            window.clearTimeout(animationTimer);
            window.cancelAnimationFrame(animationFrame);
            section.classList.remove('is-sparking');
        }

        button.addEventListener('click', () => {
            lit = !lit;
            stopSpark();
            section.classList.toggle('is-lit', lit);
            button.setAttribute('aria-pressed', String(lit));
            message.textContent = lit
                ? 'Calabaza encendida. Que ninguna idea se quede a oscuras.'
                : 'Calabaza apagada. La curiosidad sigue encendida.';

            if (lit && !motion.matches) {
                animationFrame = window.requestAnimationFrame(() => {
                    animationFrame = window.requestAnimationFrame(() => {
                        section.classList.add('is-sparking');
                        animationTimer = window.setTimeout(stopSpark, 1300);
                    });
                });
            }
        });

        motion.addEventListener('change', () => {
            if (motion.matches) stopSpark();
        });
        window.addEventListener('pagehide', stopSpark);
        button.hidden = false;
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeHalloween, { once: true });
    } else {
        initializeHalloween();
    }
})();
