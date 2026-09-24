<section class="hw-event container" id="evento-halloween" aria-labelledby="hw-title">
    <div class="hw-event__copy">
        <div class="hw-event__edition"><span aria-hidden="true"></span> Especial de octubre</div>
        <p class="hw-event__date"><time datetime="2026-10-31">31 de octubre de 2026</time><span aria-hidden="true"> / </span> Halloween</p>
        <h2 id="hw-title">Dale luz a tu <span>imaginación.</span></h2>
        <p class="hw-event__intro">Una chispa de curiosidad puede encender grandes ideas. Este Halloween, deja brillar las tuyas.</p>
        <button class="hw-event__switch" id="hw-light-switch" type="button" aria-pressed="false" aria-controls="hw-message" hidden>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" aria-hidden="true"><path d="M9 18h6m-5 3h4M8.2 14.5a6 6 0 1 1 7.6 0c-.6.5-.8 1.2-.8 2H9c0-.8-.2-1.5-.8-2Z"/><path d="M12 1V0M3.5 5.5l-1-1m18 1 1-1M2 11H0m24 0h-2"/></svg>
            <span>Iluminar la calabaza</span>
            <span class="hw-event__switch-dot" aria-hidden="true"></span>
        </button>
        <p class="hw-event__message" id="hw-message" role="status" aria-live="polite" aria-atomic="true">La magia comienza con una buena idea.</p>
    </div>
    <div class="hw-event__art" aria-hidden="true">
        <span class="hw-event__art-label">CECyTEG <span>·</span> PÉNJAMO</span>
        <svg class="hw-event__illustration" viewBox="0 0 480 400" fill="none" focusable="false">
            <defs>
                <linearGradient id="hw-pumpkin-shell" x1="122" y1="168" x2="368" y2="350" gradientUnits="userSpaceOnUse"><stop stop-color="#ffc66c"/><stop offset=".42" stop-color="#f18a30"/><stop offset="1" stop-color="#a74621"/></linearGradient>
                <linearGradient id="hw-pumpkin-side" x1="132" y1="194" x2="200" y2="335" gradientUnits="userSpaceOnUse"><stop stop-color="#f8ac50"/><stop offset="1" stop-color="#b75522"/></linearGradient>
                <linearGradient id="hw-pumpkin-middle" x1="206" y1="167" x2="273" y2="337" gradientUnits="userSpaceOnUse"><stop stop-color="#ffc97a"/><stop offset=".5" stop-color="#f59a3d"/><stop offset="1" stop-color="#d16c28"/></linearGradient>
                <linearGradient id="hw-stem-color" x1="234" y1="142" x2="250" y2="191" gradientUnits="userSpaceOnUse"><stop stop-color="#889b75"/><stop offset="1" stop-color="#374d3b"/></linearGradient>
                <linearGradient id="hw-moon-color" x1="318" y1="53" x2="377" y2="127" gradientUnits="userSpaceOnUse"><stop stop-color="#eee3ff"/><stop offset="1" stop-color="#b9a3e6"/></linearGradient>
                <radialGradient id="hw-night-halo"><stop stop-color="#a37ad5" stop-opacity=".2"/><stop offset="1" stop-color="#a37ad5" stop-opacity="0"/></radialGradient>
                <radialGradient id="hw-lit-halo"><stop stop-color="#ffcd70" stop-opacity=".52"/><stop offset=".5" stop-color="#ffac4c" stop-opacity=".19"/><stop offset="1" stop-color="#ffac4c" stop-opacity="0"/></radialGradient>
                <radialGradient id="hw-lantern-light"><stop stop-color="#fffbd8"/><stop offset=".55" stop-color="#ffe497"/><stop offset="1" stop-color="#ffd075"/></radialGradient>
                <filter id="hw-soft-glow" x="-100%" y="-100%" width="300%" height="300%"><feGaussianBlur stdDeviation="3"/></filter>
                <path id="hw-bat-shape" d="M0 3c-5-10-14-13-22-11 4 4 5 8 3 13 4-2 7-1 9 3 3-2 7-1 10 3 3-4 7-5 10-3 2-4 5-5 9-3-2-5-1-9 3-13C14-10 5-7 0 3Z"/>
                <path id="hw-spark-shape" d="M0-7 2-2 7 0 2 2 0 7-2 2-7 0-2-2Z"/>
                <g id="hw-face-shapes"><path d="m170 237 44-8-10 30-32-6Z"/><path d="m275 229 43 8-2 16-32 6Z"/><path d="m244 249 12 19h-24Z"/><path d="M186 278c15 11 34 16 57 16s43-5 60-16c-8 29-27 43-59 43-30 0-50-15-58-43Z"/></g>
            </defs>
            <circle cx="251" cy="198" r="175" fill="url(#hw-night-halo)"/>
            <circle class="hw-event__orbit" cx="245" cy="201" r="149" stroke="currentColor" stroke-dasharray="2 9"/>
            <path class="hw-event__orbit" d="M97 175c10-60 58-111 119-125M372 250c-10 28-28 53-52 71" stroke="currentColor" stroke-linecap="round"/>
            <circle class="hw-event__moon-halo" cx="353" cy="88" r="50" fill="url(#hw-moon-color)" opacity=".09"/>
            <path d="M368 47a42 42 0 1 0 20 71 37 37 0 0 1-20-71Z" fill="url(#hw-moon-color)"/>
            <path d="M331 62c-19 11-23 32-13 48" stroke="#fff" stroke-opacity=".46" stroke-linecap="round" stroke-width="2"/>
            <g class="hw-event__bats" fill="currentColor">
                <use href="#hw-bat-shape" transform="translate(123 107) rotate(-14) scale(.95)"/>
                <use href="#hw-bat-shape" transform="translate(295 71) rotate(12) scale(.65)"/>
                <use href="#hw-bat-shape" transform="translate(404 161) rotate(20) scale(.55)"/>
            </g>
            <g class="hw-event__stars" fill="currentColor">
                <use href="#hw-spark-shape" transform="translate(182 60) scale(.6)"/>
                <use href="#hw-spark-shape" transform="translate(389 220) scale(.9)"/>
                <use href="#hw-spark-shape" transform="translate(91 234) scale(.65)"/>
                <use href="#hw-spark-shape" transform="translate(265 111) scale(.45)"/>
                <circle cx="141" cy="162" r="2.5"/><circle cx="299" cy="142" r="2"/><circle cx="205" cy="106" r="2"/>
                <circle cx="412" cy="112" r="2"/><circle cx="111" cy="281" r="2"/>
            </g>
            <ellipse class="hw-event__ground" cx="244" cy="353" rx="144" ry="15" fill="currentColor"/>
            <ellipse class="hw-event__light-halo" cx="244" cy="265" rx="177" ry="143" fill="url(#hw-lit-halo)"/>
            <g class="hw-event__pumpkin">
                <path d="M234 184c1-19 8-32 23-43l17 9c-15 7-21 18-22 37Z" fill="url(#hw-stem-color)"/>
                <path d="m241 175 13-23" stroke="#b5c3a1" stroke-opacity=".65" stroke-width="3" stroke-linecap="round"/>
                <path d="M257 176c29-17 39-12 35-1-5 12-25 9-23-1 1-8 18-6 27-2" stroke="#738566" stroke-width="3" stroke-linecap="round"/>
                <path d="M243 186c-60-41-112-8-115 20-40 19-37 88-11 113 23 26 62 19 78 24 20 12 69 14 92 1 27-7 60 4 80-25 28-37 20-95-14-114-7-31-60-57-110-19Z" fill="url(#hw-pumpkin-shell)"/>
                <path d="M189 181c-39 20-49 132-7 159-42 6-63-14-71-41-9-39 2-73 23-86 7-16 29-31 55-32Z" fill="url(#hw-pumpkin-side)"/>
                <path d="M295 181c34 21 48 131 5 161 35-4 62-14 73-47 11-35-1-69-25-83-11-21-32-31-53-31Z" fill="#b85325" opacity=".44"/>
                <ellipse cx="244" cy="264" rx="54" ry="88" fill="url(#hw-pumpkin-middle)"/>
                <path d="M196 188c-19 36-28 105-1 145M292 190c23 36 30 103 2 146" stroke="#b75d29" stroke-opacity=".38" stroke-width="3" stroke-linecap="round"/>
                <path d="M146 216c-11 18-14 41-10 61M216 195c-7 11-11 22-13 34" stroke="#ffe0a3" stroke-opacity=".55" stroke-width="5" stroke-linecap="round"/>
                <g class="hw-event__face"><use href="#hw-face-shapes" fill="currentColor"/></g>
                <g class="hw-event__face-light"><use href="#hw-face-shapes" fill="url(#hw-lantern-light)"/></g>
                <g class="hw-event__face-aura"><use href="#hw-face-shapes" fill="#ffdf88" filter="url(#hw-soft-glow)"/></g>
                <path d="m203 285 2 14 12 3-1-14m55 1-1 14 12-5 2-13" fill="#df802f"/>
                <path d="M210 332c21 9 45 10 68 0" stroke="#ffbf63" stroke-opacity=".45" stroke-linecap="round" stroke-width="2"/>
            </g>
            <g class="hw-event__leaves" fill="currentColor">
                <path d="M146 350c-27 7-40-7-41-25 22 0 34 7 41 25Z"/><path d="M142 349c-10-21-3-35 11-41 10 17 6 30-11 41Z"/>
                <path d="M341 352c9-22 23-28 39-23-7 20-20 27-39 23Z"/>
            </g>
            <path d="m115 335 33 19m219-15-31 18" stroke="#c2b0d8" stroke-width="1.5" stroke-linecap="round"/>
        </svg>
        <span class="hw-event__art-caption"><span aria-hidden="true"></span> Un portal. Infinitas ideas.</span>
    </div>
</section>
