(() => {
    const root = document.documentElement;
    const button = document.getElementById('launcherTheme');
    if (!button) return;

    function setTheme(theme) {
        const dark = theme === 'dark';
        root.dataset.theme = dark ? 'dark' : 'light';
        button.setAttribute('aria-pressed', String(dark));
        button.setAttribute('aria-label', dark ? 'Activar modo claro' : 'Activar modo oscuro');
        button.title = dark ? 'Activar modo claro' : 'Activar modo oscuro';
    }

    setTheme(root.dataset.theme);
    button.hidden = false;
    button.addEventListener('click', () => {
        const next = root.dataset.theme === 'dark' ? 'light' : 'dark';
        setTheme(next);
        try { localStorage.setItem('theme', next); } catch (_) {}
    });
    window.addEventListener('storage', event => {
        if (event.key === 'theme' || event.key === null) setTheme(event.newValue);
    });
})();

(() => {
    const quote = document.getElementById('launcherQuoteText');
    const toggle = document.getElementById('launcherQuoteToggle');
    if (!quote || !toggle) return;

    // Tiempo entre frases, en milisegundos (12000 = 12 segundos).
    const quoteInterval = 12000;
    const quotes = [...new Set([
        quote.textContent.trim().replace(/\s+/g, ' '),
        'Respira hondo y concéntrate en una pregunta a la vez.',
        'Lee con calma; darte tiempo también es parte del proceso.',
        'Lo que has practicado cuenta, aunque hoy sientas nervios.',
        'Una pregunta difícil no define todo lo que sabes.',
        'Si te atoras, toma aire y busca por dónde empezar.',
        'Cada intento te ayuda a conocer mejor tu manera de aprender.',
        'No necesitas hacerlo todo de golpe: empieza con lo que reconoces.',
        'Tu valor va mucho más allá de una calificación.',
        'Haz una pausa breve, relaja los hombros y vuelve a intentarlo.',
        'Confía en tu preparación y date espacio para pensar.',
        'Aprender también incluye equivocarte y encontrar otra forma.',
        'Estás aquí para avanzar a tu ritmo, paso a paso.',
    ].filter(Boolean))];
    if (quotes.length < 2) return;

    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
    let pendingQuotes = [];
    let currentQuote = quotes[0];
    let timer = null;
    let paused = false;
    let transition = null;

    function nextQuote(animate = true) {
        if (!pendingQuotes.length) {
            pendingQuotes = [...quotes];
            for (let i = pendingQuotes.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [pendingQuotes[i], pendingQuotes[j]] = [pendingQuotes[j], pendingQuotes[i]];
            }
            // Evita repetir la última frase al iniciar otra vuelta.
            const last = pendingQuotes.length - 1;
            if (pendingQuotes[last] === currentQuote) {
                [pendingQuotes[0], pendingQuotes[last]] = [pendingQuotes[last], pendingQuotes[0]];
            }
        }
        currentQuote = pendingQuotes.pop();
        transition?.cancel();
        quote.textContent = currentQuote;
        if (animate && !reducedMotion.matches && typeof quote.animate === 'function') {
            transition = quote.animate(
                [{ opacity: 0, transform: 'translateY(4px)' }, { opacity: 1, transform: 'translateY(0)' }],
                { duration: 350, easing: 'ease-out' }
            );
        }
    }

    function scheduleNext() {
        clearTimeout(timer);
        timer = null;
        if (paused || document.hidden) return;
        timer = setTimeout(() => {
            nextQuote();
            scheduleNext();
        }, quoteInterval);
    }

    toggle.hidden = false;
    toggle.addEventListener('click', () => {
        paused = !paused;
        toggle.setAttribute('aria-pressed', String(paused));
        toggle.querySelector('span').textContent = paused ? 'Reanudar frases' : 'Pausar frases';
        scheduleNext();
    });
    document.addEventListener('visibilitychange', scheduleNext);
    window.addEventListener('pagehide', () => { clearTimeout(timer); transition?.cancel(); });
    window.addEventListener('pageshow', scheduleNext);
    reducedMotion.addEventListener('change', () => {
        if (reducedMotion.matches) transition?.cancel();
    });

    nextQuote(false);
    scheduleNext();
})();
