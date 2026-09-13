<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="Servicios, trámites, recursos académicos y avisos para la comunidad estudiantil de CECyTEG Plantel Pénjamo, Guanajuato.">
    <title>Portal Estudiantil · CECyTEG Pénjamo</title>
    <link rel="icon" type="image/png" sizes="240x240" href="{{ asset('images/logo_bola.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo_bola.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        @property --hero-perimeter-angle {
            syntax: '<angle>';
            inherits: false;
            initial-value: 0deg;
        }

        :root  {
            color-scheme: light;
            --primary: #245edb;
            --primary-hover: #1849b2;
            --primary-contrast: #ffffff;
            --accent: #08765b;
            --background: #f7f9fc;
            --surface: #ffffff;
            --surface-hover: #f0f5ff;
            --surface-secondary: #eef3fa;
            --brand-navy: #12345f;
            --brand-blue: #164b86;
            --brand-highlight: #b9dbff;
            --brand-muted: #d6e4f5;
            --accent-soft: #e8f5ef;
            --border: #dde5f0;
            --text-primary: #172e50;
            --text-secondary: #576a83;
            --header-background: rgba(255, 255, 255, .96);
            --neon-cyan: #0b7f9c;
            --edge-light: #b9cee9;
            --glow-soft: rgba(36, 94, 219, .09);
            --glow-strong: rgba(36, 111, 219, .2);
            --ambient-cyan: rgba(25, 178, 192, .07);
            --radius-sm: 10px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --shadow-sm: 0 2px 5px rgba(24, 47, 82, .025), 0 8px 22px rgba(24, 47, 82, .035);
            --shadow-md: 0 6px 12px rgba(24, 47, 82, .04), 0 18px 36px rgba(24, 47, 82, .07);
            --transition-fast: 180ms ease;
            --transition-normal: 260ms cubic-bezier(.2, .7, .3, 1);
            --page-width: 1200px;
            --page-gutter: max(clamp(18px, 3.2vw, 40px), env(safe-area-inset-left, 0px), env(safe-area-inset-right, 0px));
            --space-section: clamp(36px, 5vw, 64px);
        }

        [data-theme="dark"]  {
            color-scheme: dark;
            --primary: #8bb5ff;
            --primary-hover: #aecbff;
            --primary-contrast: #112341;
            --accent: #7cd9b5;
            --background: #080f1c;
            --surface: #101d30;
            --surface-hover: #1b2c46;
            --surface-secondary: #172438;
            --brand-navy: #102744;
            --brand-blue: #123a64;
            --accent-soft: #15382f;
            --border: #2b3c54;
            --text-primary: #f0f5ff;
            --text-secondary: #adbed5;
            --header-background: rgba(17, 28, 45, .97);
            --neon-cyan: #67e8f9;
            --edge-light: #385e84;
            --glow-soft: rgba(69, 156, 255, .12);
            --glow-strong: rgba(69, 156, 255, .28);
            --ambient-cyan: rgba(61, 216, 212, .07);
            --shadow-sm: 0 4px 20px rgba(0, 0, 0, .12);
            --shadow-md: 0 12px 32px rgba(0, 0, 0, .22);
        }

        *, *::before, *::after  {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html  {
            scroll-behavior: smooth;
            scroll-padding-top: 104px;
        }

        body  {
            isolation: isolate;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 15px;
            line-height: 1.65;
            color: var(--text-primary);
            background: var(--background);
            -webkit-font-smoothing: antialiased;
            transition: background-color var(--transition-normal), color var(--transition-normal);
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            background: url('{{  asset('images/logo.png')}}') center / min(1100px, 86vw) auto no-repeat;
            opacity: .08;
            mix-blend-mode: multiply;
            transition: opacity var(--transition-normal);
        }

        [data-theme="dark"] body::before {
            opacity: .07;
            filter: grayscale(1) invert(1);
            mix-blend-mode: screen;
        }

        body::after {
            content: '';
            position: fixed;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            background: radial-gradient(ellipse at 0 15%, var(--glow-soft), transparent 52%), radial-gradient(ellipse at 100% 75%, var(--ambient-cyan), transparent 48%);
        }

        a  {
            color: inherit;
            text-decoration: none;
        }

        button, input  {
            font: inherit;
        }

        button  {
            cursor: pointer;
            color: inherit;
        }

        a, button, summary  {
            touch-action: manipulation;
            -webkit-tap-highlight-color: transparent;
        }

        a:focus-visible, button:focus-visible, summary:focus-visible, [tabindex="-1"]:focus-visible  {
            outline: 3px solid var(--primary);
            outline-offset: 5px;
        }

        ul  {
            list-style: none;
        }

        svg  {
            display: block;
            flex-shrink: 0;
            width: 22px;
            height: 22px;
        }

        .sr-only  {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip-path: inset(50%);
            white-space: nowrap;
            border: 0;
        }

        .skip-link  {
            position: fixed;
            top: 12px;
            left: 18px;
            transform: translateY(-160%);
            padding: 12px 20px;
            background: var(--surface);
            z-index: 100;
            border-radius: var(--radius-sm);
        }

        .skip-link:focus  {
            transform: translateY(0);
        }

        .container  {
            width: min(var(--page-width), calc(100% - var(--page-gutter) * 2));
            margin-inline: auto;
        }

        .welcome {
            --primary: #a5edff;
            --text-primary: #f4f8ff;
            --text-secondary: #b9cde3;
            position: relative;
            isolation: isolate;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            min-height: 100svh;
            padding-block: max(22px, env(safe-area-inset-top, 0px)) 26px;
            overflow: hidden;
            color: var(--text-primary);
            background: radial-gradient(ellipse at 50% 0, #17385c, transparent 65%), #071424;
            border-bottom: 1px solid #42678c;
        }

        .welcome[hidden] {
            display: none;
        }

        .portal-content[hidden] {
            display: none;
        }

        html.welcome-active {
            scroll-padding-top: 0;
            scroll-padding-bottom: 0;
        }

        .welcome-active body {
            padding-bottom: 0;
        }

        .welcome::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            background-image: linear-gradient(rgba(126, 187, 231, .045) 1px, transparent 1px), linear-gradient(90deg, rgba(126, 187, 231, .045) 1px, transparent 1px);
            background-size: 72px 72px;
            -webkit-mask-image: linear-gradient(transparent, #000 65%);
            mask-image: linear-gradient(transparent, #000 65%);
        }

        .welcome__lights {
            position: absolute;
            inset: 0;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .welcome__light {
            position: absolute;
            width: min(680px, 85vw);
            aspect-ratio: 1;
            border-radius: 50%;
            animation: welcome-drift 14s ease-in-out infinite alternate;
        }

        .welcome__light--blue {
            top: 2%;
            left: -22%;
            background: radial-gradient(circle, rgba(44, 119, 255, .24), transparent 68%);
        }

        .welcome__light--cyan {
            right: -20%;
            bottom: -20%;
            background: radial-gradient(circle, rgba(38, 221, 218, .19), transparent 68%);
            animation-delay: -7s;
            animation-direction: alternate-reverse;
        }

        .welcome__top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .welcome__brand {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .welcome__wordmark {
            display: block;
            width: 138px;
            height: auto;
            filter: brightness(0) invert(1);
        }

        .welcome__plantel {
            padding-left: 20px;
            border-left: 1px solid #46627f;
            color: var(--text-secondary);
            font-size: 12px;
        }

        .welcome__motion {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            flex-shrink: 0;
            min-height: 44px;
            padding: 10px 14px;
            border: 1px solid #46627f;
            border-radius: 24px;
            background: rgba(7, 20, 36, .35);
            color: #d4e7fb;
            font-size: 11px;
            transition: border-color var(--transition-fast), background-color var(--transition-fast);
        }

        .welcome__motion[hidden] {
            display: none;
        }

        .welcome__motion svg {
            width: 14px;
            height: 14px;
        }

        .welcome__motion:hover {
            border-color: #91dff4;
            background: rgba(41, 85, 120, .4);
        }

        .welcome__motion-play,
        .welcome__motion[aria-pressed="true"] .welcome__motion-pause {
            display: none;
        }

        .welcome__motion[aria-pressed="true"] .welcome__motion-play {
            display: block;
        }

        .welcome__body {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding-block: clamp(36px, 6vh, 72px);
            text-align: center;
        }

        .welcome__seal {
            position: relative;
            width: clamp(92px, 10vw, 136px);
            margin: 14px 0 32px;
            flex-shrink: 0;
        }

        .welcome__seal img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 50%;
            box-shadow: 0 0 60px rgba(77, 166, 254, .2);
        }

        .welcome__seal::before,
        .welcome__seal::after {
            content: '';
            position: absolute;
            inset: -13px;
            border: 1px solid rgba(153, 219, 255, .2);
            border-radius: 50%;
            pointer-events: none;
        }

        .welcome__seal::after {
            border: 2px solid transparent;
            border-top-color: #b8faff;
            border-right-color: #579ded;
            animation: welcome-orbit 12s linear infinite;
        }

        .welcome__eyebrow {
            color: #a2e5f2;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .16em;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .welcome__title {
            max-width: 900px;
            font-size: clamp(38px, 6.3vw, 80px);
            font-weight: 800;
            line-height: 1.05;
            letter-spacing: -.055em;
            text-wrap: balance;
        }

        .welcome__title span {
            display: block;
            color: #adf0ff;
            text-shadow: 0 0 45px rgba(97, 206, 242, .22);
        }

        .welcome__description {
            max-width: 48ch;
            margin: 22px 0 28px;
            color: var(--text-secondary);
            font-size: clamp(14px, 1.5vw, 17px);
            line-height: 1.75;
            text-wrap: pretty;
        }

        .welcome__actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
        }

        .welcome__cta {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            min-height: 56px;
            padding: 15px 25px;
            border: 1px solid #bdefff;
            border-radius: 14px;
            color: #102e4b;
            background: linear-gradient(115deg, #f0fbff, #b8eaff);
            box-shadow: 0 0 32px rgba(91, 200, 255, .2);
            font-size: 14px;
            font-weight: 700;
            transition: transform var(--transition-normal), box-shadow var(--transition-normal), background-color var(--transition-fast);
        }

        .welcome__cta svg {
            width: 18px;
            height: 18px;
        }

        .welcome__cta--secondary {
            color: #e2f2ff;
            background: rgba(133, 205, 253, .06);
            border-color: #527897;
            box-shadow: none;
        }

        .welcome__cta:hover {
            box-shadow: 0 0 40px rgba(91, 200, 255, .32);
        }

        .welcome__cta--secondary:hover {
            background: rgba(133, 205, 253, .14);
        }

        .welcome__paths {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .welcome__path {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 14px;
            min-width: 0;
            min-height: 78px;
            padding: 16px;
            border: 1px solid rgba(151, 201, 235, .18);
            border-radius: 14px;
            background: rgba(116, 178, 227, .035);
            text-align: left;
            transition: background-color var(--transition-fast), border-color var(--transition-fast);
        }

        .welcome__path:hover {
            background: rgba(116, 178, 227, .1);
            border-color: #629cb8;
        }

        .welcome__path > svg {
            color: #a2e5f2;
            width: 22px;
            height: 22px;
        }

        .welcome__path strong {
            display: block;
            font-size: 12px;
            font-weight: 600;
        }

        .welcome__path-description {
            display: block;
            margin-top: 3px;
            color: var(--text-secondary);
            font-size: 11px;
        }

        .welcome.is-paused *, .welcome.is-paused *::before, .welcome.is-paused *::after,
        .welcome.is-away *, .welcome.is-away *::before, .welcome.is-away *::after {
            animation-play-state: paused !important;
        }

        @keyframes welcome-drift {
            from { transform: translate3d(0, 0, 0); }
            to { transform: translate3d(14%, -9%, 0); }
        }

        @keyframes welcome-orbit {
            to { transform: rotate(360deg); }
        }

        @media (max-width: 650px) {
            .welcome {
                padding-bottom: 20px;
            }
            .welcome__wordmark {
                width: 112px;
            }
            .welcome__plantel {
                display: none;
            }
            .welcome__motion {
                padding-inline: 10px;
            }
            .welcome__body {
                padding-block: 36px;
            }
            .welcome__eyebrow {
                font-size: 10px;
                letter-spacing: .1em;
            }
            .welcome__title {
                font-size: clamp(36px, 9.4vw, 54px);
            }
            .welcome__actions {
                width: 100%;
                flex-direction: column;
            }
            .welcome__cta {
                width: 100%;
                min-height: 52px;
            }
            .welcome__paths {
                gap: 8px;
            }
            .welcome__path {
                flex-direction: column;
                gap: 8px;
                padding: 12px 6px;
                text-align: center;
            }
            .welcome__path strong {
                font-size: 11px;
                line-height: 1.5;
            }
            .welcome__path-description {
                display: none;
            }
        }

        .topbar  {
            position: sticky;
            top: 0;
            z-index: 50;
            background: var(--header-background);
            border-bottom: 1px solid var(--border);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: box-shadow var(--transition-normal), background-color var(--transition-normal);
        }

        .topbar.scrolled  {
            box-shadow: var(--shadow-sm);
        }

        .topbar::before {
            content: '';
            position: absolute;
            inset: 0 0 auto;
            height: 3px;
            background: linear-gradient(90deg, var(--primary), var(--neon-cyan) 65%, var(--accent));
            box-shadow: 0 0 14px var(--glow-strong);
            pointer-events: none;
        }

        .topbar__inner  {
            min-height: 84px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 28px;
            position: relative;
        }

        .brand  {
            display: flex;
            align-items: center;
            gap: 16px;
            flex-shrink: 0;
        }

        .brand__logo  {
            padding: 6px 8px;
        }

        .brand__mark  {
            display: block;
            width: auto;
            height: 42px;
            max-width: 166px;
            object-fit: contain;
            filter: none;
            transition: filter var(--transition-normal);
        }

        [data-theme="dark"] .brand__mark {
            filter: brightness(0) invert(1);
        }

        .brand__label  {
            border-left: 1px solid var(--border);
            padding-left: 16px;
            display: flex;
            flex-direction: column;
            line-height: 1.45;
        }

        .brand__label strong  {
            font-size: 13px;
            font-weight: 600;
        }

        .brand__label span  {
            font-size: 12px;
            color: var(--primary);
            font-weight: 600;
        }

        .nav  {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav__link  {
            position: relative;
            display: flex;
            align-items: center;
            min-height: 44px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-secondary);
            transition: color var(--transition-fast);
        }

        .nav__icon {
            display: none;
        }

        .nav__link::after  {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 2px;
            background: var(--primary);
            border-radius: 2px;
            box-shadow: 0 0 12px var(--glow-strong);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform var(--transition-normal);
        }

        .nav__link:hover, .nav__link.is-active  {
            color: var(--primary);
        }

        .nav__link:hover::after, .nav__link.is-active::after  {
            transform: scaleX(1);
        }

        .topbar__actions  {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .icon-btn, .hamburger  {
            width: 44px;
            height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border);
            background: var(--surface);
            border-radius: 12px;
            transition: background-color var(--transition-fast), border-color var(--transition-fast), transform var(--transition-fast);
        }

        .icon-btn:hover, .hamburger:hover  {
            background: var(--surface-hover);
            border-color: var(--primary);
        }

        .icon-btn:active, .hamburger:active  {
            transform: scale(.96);
        }

        .tooltip  {
            position: relative;
        }

        .tooltip::after  {
            content: attr(data-tooltip);
            position: absolute;
            right: 0;
            top: calc(100% + 10px);
            padding: 6px 10px;
            border-radius: 7px;
            background: var(--text-primary);
            color: var(--background);
            white-space: nowrap;
            font-size: 12px;
            font-weight: 500;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-3px);
            pointer-events: none;
            transition: opacity var(--transition-fast), transform var(--transition-fast);
        }

        .tooltip:hover::after, .tooltip:focus-visible::after  {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .topbar__actions > .icon-btn {
            flex: 0 0 44px;
        }

        .packet-help {
            margin-top: 18px;
            max-width: 52ch;
            font-size: 13px;
            line-height: 1.7;
            color: var(--text-secondary);
        }

        .packet-help summary {
            width: fit-content;
            min-height: 44px;
            padding-block: 10px;
            color: var(--primary);
            cursor: pointer;
            font-weight: 600;
        }

        .packet-help__content {
            padding: 16px;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            background: var(--surface);
        }

        .packet-help__download {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 44px;
            margin-top: 8px;
            color: var(--primary);
            font-weight: 600;
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .packet-help__download svg {
            flex: 0 0 18px;
            width: 18px;
            height: 18px;
        }

        @media (min-width: 901px) and (max-width: 1100px) {
            .topbar__inner { gap: 16px; }
            .nav { gap: 16px; }
        }

        .theme-toggle  {
            position: relative;
            overflow: visible;
        }

        .theme-toggle__sun, .theme-toggle__moon  {
            position: absolute;
            transition: transform var(--transition-normal), opacity var(--transition-normal);
        }

        .theme-toggle__moon  {
            opacity: 0;
            transform: translateY(5px) scale(.8);
        }

        [data-theme="dark"] .theme-toggle__sun  {
            opacity: 0;
            transform: translateY(-5px) scale(.8);
        }

        [data-theme="dark"] .theme-toggle__moon  {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .hamburger  {
            display: none;
            flex-direction: column;
            gap: 5px;
        }

        .hamburger span  {
            width: 18px;
            height: 2px;
            background: currentColor;
            border-radius: 2px;
            transition: transform var(--transition-normal), opacity var(--transition-fast);
        }

        .hamburger[aria-expanded="true"] span:nth-child(1)  {
            transform: translateY(7px) rotate(45deg);
        }

        .hamburger[aria-expanded="true"] span:nth-child(2)  {
            opacity: 0;
        }

        .hamburger[aria-expanded="true"] span:nth-child(3)  {
            transform: translateY(-7px) rotate(-45deg);
        }

        .hero  {
            padding-block: 32px var(--space-section);
        }

        .hero__inner  {
            --primary: var(--brand-highlight);
            --primary-hover: #d8ebff;
            --primary-contrast: #12345f;
            --accent: #99dfc5;
            --surface: rgba(255, 255, 255, .08);
            --surface-hover: rgba(255, 255, 255, .15);
            --text-primary: #ffffff;
            --text-secondary: var(--brand-muted);
            --border: rgba(255, 255, 255, .28);
            position: relative;
            isolation: isolate;
            display: grid;
            grid-template-columns: minmax(0, 1.3fr) minmax(280px, .8fr);
            align-items: center;
            gap: clamp(24px, 4vw, 64px);
            padding: clamp(24px, 3.6vw, 48px);
            color: var(--text-primary);
            background: radial-gradient(ellipse at 95% 0, rgba(51, 212, 224, .17), transparent 52%), radial-gradient(ellipse at 0 100%, rgba(50, 107, 247, .22), transparent 55%), linear-gradient(115deg, var(--brand-navy), var(--brand-blue));
            border: 1px solid rgba(139, 199, 255, .4);
            border-radius: var(--radius-lg);
            box-shadow: 0 20px 56px rgba(9, 35, 70, .14), 0 0 40px var(--glow-soft), inset 0 1px 0 rgba(210, 245, 255, .15);
        }

        .hero__inner::before {
            content: '';
            position: absolute;
            inset: 0;
            z-index: -1;
            border-radius: inherit;
            background: url("{{ asset('images/logo.png') }}") center / 94% auto no-repeat;
            opacity: .055;
            filter: grayscale(1) invert(1);
            mix-blend-mode: screen;
            pointer-events: none;
        }

        .hero__inner::after {
            content: '';
            position: absolute;
            inset: -1px;
            border: 1px solid rgba(141, 222, 255, .6);
            border-radius: inherit;
            pointer-events: none;
        }

        @supports (mask-composite: exclude) or (-webkit-mask-composite: xor) {
            .hero__inner::after {
                padding: 2px;
                border: 0;
                background: conic-gradient(from var(--hero-perimeter-angle), transparent 0deg 250deg, rgba(83, 194, 244, .1) 270deg, #69ceff 310deg, #a0f9ee 338deg, #ffffff 344deg, transparent 348deg 360deg);
                -webkit-mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
                mask: linear-gradient(#000 0 0) content-box, linear-gradient(#000 0 0);
                -webkit-mask-composite: xor;
                mask-composite: exclude;
                animation: hero-perimeter 7s linear infinite;
            }
        }

        @keyframes hero-perimeter {
            from { --hero-perimeter-angle: 0deg; }
            to { --hero-perimeter-angle: 360deg; }
        }

        .hero__eyebrow, .section-eyebrow  {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            letter-spacing: .13em;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--primary);
            margin-bottom: 14px;
        }

        .hero__eyebrow  {
            color: var(--accent);
            letter-spacing: .08em;
            line-height: 1.6;
        }

        .section-eyebrow::before {
            content: '';
            width: 20px;
            height: 3px;
            flex-shrink: 0;
            background: var(--accent);
            border-radius: 3px;
        }

        .hero__emblem {
            display: block;
            width: 32px;
            height: 32px;
            flex-shrink: 0;
            object-fit: contain;
            border-radius: 50%;
            box-shadow: 0 0 16px rgba(105, 206, 255, .18);
        }

        .hero__title  {
            font-size: clamp(32px, 3.7vw, 48px);
            line-height: 1.15;
            letter-spacing: -.045em;
            font-weight: 800;
            margin-bottom: 18px;
        }

        .hero__title span  {
            color: #b1e6ff;
            text-shadow: 0 0 28px rgba(74, 195, 243, .22);
        }

        .hero__text  {
            font-size: 15px;
            line-height: 1.8;
            color: var(--text-secondary);
            max-width: 48ch;
            margin-bottom: 26px;
        }

        .hero__copy {
            min-width: 0;
        }

        .hero__resources {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .resource-link {
            position: relative;
            display: grid;
            grid-template-columns: 36px minmax(0, 1fr);
            align-items: start;
            gap: 12px;
            min-width: 0;
            padding: 18px;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            background: linear-gradient(130deg, rgba(255, 255, 255, .13), rgba(255, 255, 255, .04));
            color: #ffffff;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .08);
            transition: transform var(--transition-normal), background-color var(--transition-fast), border-color var(--transition-fast), box-shadow var(--transition-normal);
        }

        .resource-link--app {
            background: linear-gradient(125deg, #f1f8ff, #c7eeff);
            border-color: #c7eeff;
            color: #12345f;
            box-shadow: 0 0 24px rgba(89, 205, 255, .2), 0 8px 28px rgba(0, 0, 0, .12);
        }

        .resource-link::before {
            content: '';
            position: absolute;
            inset: 0 18px auto;
            height: 1px;
            background: linear-gradient(90deg, transparent, #b1efff, transparent);
            opacity: .55;
            pointer-events: none;
            transition: opacity var(--transition-fast);
        }

        .resource-link__icon {
            display: grid;
            place-items: center;
            width: 36px;
            height: 36px;
            border: 1px solid rgba(190, 230, 255, .45);
            border-radius: 10px;
            background: rgba(125, 213, 245, .09);
        }

        .resource-link--app .resource-link__icon {
            border-color: rgba(18, 52, 95, .22);
            background: rgba(18, 52, 95, .05);
        }

        .resource-link__icon svg {
            width: 20px;
            height: 20px;
        }

        .resource-link__body {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            min-width: 0;
            gap: 4px;
            overflow-wrap: anywhere;
        }

        .resource-link__type {
            font-size: 10px;
            font-weight: 500;
            line-height: 1.5;
        }

        .resource-link__title {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -.03em;
        }

        .resource-link__action {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            font-size: 12px;
            font-weight: 600;
            line-height: 1.5;
        }

        .resource-link__action svg {
            width: 16px;
            height: 16px;
        }

        .resource-link:hover,
        .resource-link:focus-visible {
            background: var(--surface-hover);
            border-color: #a9eaff;
            box-shadow: 0 0 28px rgba(79, 205, 252, .23), inset 0 1px 0 rgba(213, 249, 255, .2);
        }

        .resource-link--app:hover,
        .resource-link--app:focus-visible {
            background: #ffffff;
        }

        .resource-link:hover .resource-link__action {
            text-decoration: underline;
            text-underline-offset: 4px;
        }

        .resource-link:hover::before,
        .resource-link:focus-visible::before {
            opacity: 1;
        }

        .hero__resource-note {
            margin-top: 12px;
            color: var(--text-secondary);
            font-size: 11px;
            line-height: 1.6;
        }

        .hero__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px 24px;
            margin-top: 10px;
        }

        .hero__secondary-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 44px;
            color: var(--text-secondary);
            font-size: 12px;
            font-weight: 500;
        }

        .hero__secondary-link svg {
            width: 16px;
            height: 16px;
        }

        .hero__secondary-link:hover {
            color: #ffffff;
            text-decoration: underline;
            text-underline-offset: 4px;
        }

        .btn  {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 12px 20px;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            font-size: 14px;
            font-weight: 600;
            transition: transform var(--transition-normal), box-shadow var(--transition-normal), background-color var(--transition-fast);
        }

        .btn svg  {
            width: 18px;
            height: 18px;
            transition: transform var(--transition-normal);
        }

        .btn--primary  {
            color: var(--primary-contrast);
            background: var(--primary);
            border-color: var(--primary);
            box-shadow: 0 4px 8px rgba(36, 94, 219, .12);
        }

        .btn--primary:hover  {
            background: var(--primary-hover);
        }

        .btn--ghost  {
            background: var(--surface);
            color: var(--text-primary);
        }

        .btn--ghost:hover  {
            background: var(--surface-hover);
        }

        .hero__visual  {
            align-self: center;
            justify-self: center;
            width: 100%;
            max-width: 380px;
            min-width: 0;
            position: relative;
            border-radius: 20px;
            border: 1px solid rgba(170, 230, 255, .45);
            overflow: hidden;
            background: var(--brand-navy);
            box-shadow: 0 18px 36px rgba(5, 20, 40, .24), 0 0 28px rgba(89, 205, 255, .16);
        }

        .hero__photo {
            position: relative;
            isolation: isolate;
            aspect-ratio: 1;
            border-radius: inherit;
            overflow: hidden;
            background: var(--surface-secondary);
        }

        .hero__photo img {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 30%;
            transition: transform 350ms ease;
        }

        .hero__photo::after {
            content: '';
            position: absolute;
            inset: 0;
            z-index: 1;
            background: linear-gradient(180deg, rgba(18, 52, 95, .02) 20%, rgba(18, 52, 95, .16) 46%, rgba(18, 52, 95, .9) 76%, var(--brand-navy) 100%);
            border-radius: inherit;
            pointer-events: none;
        }

        .hero__badge  {
            position: absolute;
            z-index: 2;
            top: 12px;
            left: 12px;
            right: 12px;
            width: fit-content;
            max-width: calc(100% - 24px);
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 7px 10px;
            color: #ffffff;
            background: rgba(18, 52, 95, .94);
            border: 1px solid rgba(255, 255, 255, .2);
            border-radius: 8px;
            font-size: 11px;
            font-weight: 600;
        }

        .hero__badge svg  {
            width: 15px;
            height: 15px;
        }

        .hero__caption  {
            position: absolute;
            z-index: 2;
            inset: auto 20px 18px;
            color: var(--brand-muted);
            font-size: 12px;
            line-height: 1.7;
        }

        .hero__caption strong  {
            display: block;
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: -.02em;
        }

        .quick-access  {
            padding-bottom: var(--space-section);
        }

        .section-head  {
            margin-bottom: 24px;
        }

        .section-head h2, .faq-section h2  {
            font-size: clamp(23px, 2.3vw, 28px);
            font-weight: 700;
            letter-spacing: -.035em;
            line-height: 1.3;
            margin-bottom: 8px;
        }

        .section-head p  {
            font-size: 14px;
            color: var(--text-secondary);
        }

        .section-head .section-eyebrow  {
            margin-bottom: 9px;
            font-size: 11px;
            color: var(--primary);
        }

        .services__frequent  {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .service-card  {
            position: relative;
            min-width: 0;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 20px;
            background: linear-gradient(150deg, var(--surface), var(--surface) 65%, var(--surface-hover));
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            transition: transform var(--transition-normal), box-shadow var(--transition-normal), border-color var(--transition-fast), background-color var(--transition-normal);
        }

        .service-card__icon  {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            color: var(--primary);
            background: linear-gradient(135deg, var(--surface), var(--surface-hover));
            border: 1px solid var(--edge-light);
            border-radius: 12px;
            transition: transform var(--transition-normal), background-color var(--transition-normal), box-shadow var(--transition-normal);
        }

        .service-card__icon svg  {
            width: 22px;
            height: 22px;
        }

        .service-card__body  {
            display: flex;
            flex-direction: column;
            gap: 6px;
            padding-right: 16px;
            min-width: 0;
        }

        .service-card__title  {
            font-size: 14px;
            font-weight: 600;
            line-height: 1.45;
            overflow-wrap: break-word;
        }

        .service-card__desc  {
            font-size: 13px;
            color: var(--text-secondary);
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        .service-card__arrow  {
            position: absolute;
            top: 20px;
            right: 16px;
            color: var(--text-secondary);
            transition: transform var(--transition-normal), color var(--transition-fast);
        }

        .service-card__arrow svg  {
            width: 16px;
            height: 16px;
        }

        .service-card--lg  {
            padding: 24px;
            flex-direction: column;
            gap: 18px;
            overflow: hidden;
        }

        .service-card--lg::before  {
            content: '';
            height: 3px;
            position: absolute;
            top: 0;
            left: 24px;
            right: 24px;
            border-radius: 0 0 4px 4px;
            background: linear-gradient(90deg, var(--primary), var(--neon-cyan));
            box-shadow: 0 0 12px var(--glow-strong);
        }

        .service-card--lg .service-card__icon  {
            width: 48px;
            height: 48px;
            color: #ffffff;
            background: var(--brand-blue);
            border-color: transparent;
        }

        .services__frequent .service-card--lg:hover .service-card__icon {
            background: var(--brand-navy);
        }

        .service-card--lg .service-card__title  {
            font-size: 18px;
            letter-spacing: -.025em;
        }

        .service-card--lg .service-card__desc  {
            font-size: 14px;
        }

        .service-card--lg .service-card__arrow  {
            top: 29px;
            right: 24px;
        }

        .service-card--lg .service-card__arrow svg  {
            width: 20px;
            height: 20px;
        }

        .schedules-section {
            padding-bottom: var(--space-section);
        }

        .schedule-browser {
            display: grid;
            grid-template-columns: minmax(0, .85fr) minmax(260px, 1.15fr);
            align-items: center;
            gap: 24px;
            padding: clamp(18px, 2.5vw, 26px);
            border: 1px solid var(--edge-light);
            border-radius: var(--radius-lg);
            background: radial-gradient(ellipse at 0 0, var(--glow-soft), transparent 70%), var(--surface);
            box-shadow: var(--shadow-sm);
        }

        .schedule-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            min-width: 0;
        }

        .schedule-filter {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 11px 17px;
            border: 1px solid var(--border);
            border-radius: 12px;
            color: var(--text-secondary);
            background: var(--surface);
            font-size: 13px;
            font-weight: 600;
            transition: color var(--transition-fast), background-color var(--transition-fast), border-color var(--transition-fast), box-shadow var(--transition-normal);
        }

        .schedule-filter:hover {
            color: var(--text-primary);
            border-color: var(--primary);
            background: var(--surface-hover);
        }

        .schedule-filter[aria-pressed="true"] {
            color: var(--primary-contrast);
            border-color: var(--primary);
            background: var(--primary);
            box-shadow: 0 4px 16px var(--glow-strong);
        }

        .schedule-filter__count {
            display: inline-grid;
            place-items: center;
            min-width: 24px;
            min-height: 22px;
            padding-inline: 6px;
            border-radius: 7px;
            color: var(--text-secondary);
            background: var(--surface-secondary);
            font-size: 11px;
            font-variant-numeric: tabular-nums;
        }

        .schedule-filter[aria-pressed="true"] .schedule-filter__count {
            color: inherit;
            background: rgba(255, 255, 255, .2);
        }

        .schedule-search {
            min-width: 0;
        }

        .schedule-search__label {
            display: block;
            margin-bottom: 7px;
            color: var(--text-primary);
            font-size: 12px;
            font-weight: 600;
        }

        .schedule-search__field {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 0;
            padding-inline: 14px 5px;
            border: 1px solid var(--edge-light);
            border-radius: 12px;
            background: var(--surface);
            transition: border-color var(--transition-fast), box-shadow var(--transition-normal);
        }

        .schedule-search__field:focus-within {
            border-color: var(--primary);
            outline: 2px solid var(--primary);
            outline-offset: 3px;
            box-shadow: 0 0 20px var(--glow-soft);
        }

        .schedule-search__field > svg {
            width: 20px;
            height: 20px;
            flex: 0 0 auto;
            color: var(--primary);
        }

        .schedule-search__field input {
            width: 100%;
            min-width: 0;
            min-height: 48px;
            padding-block: 10px;
            border: 0;
            outline: 0;
            color: var(--text-primary);
            background: transparent;
            font-size: 16px;
            line-height: 1.5;
        }

        .schedule-search__field input::placeholder {
            color: var(--text-secondary);
            opacity: 1;
        }

        .schedule-search__field input::-webkit-search-cancel-button {
            -webkit-appearance: none;
        }

        .schedule-search__clear {
            display: grid;
            place-items: center;
            flex: 0 0 auto;
            width: 44px;
            height: 44px;
            border: 0;
            border-radius: 9px;
            color: var(--text-secondary);
            background: transparent;
            transition: color var(--transition-fast), background-color var(--transition-fast);
        }

        .schedule-search__clear:hover {
            color: var(--primary);
            background: var(--surface-hover);
        }

        .schedule-search__clear svg {
            width: 18px;
            height: 18px;
        }

        .schedule-search__hint {
            margin-top: 8px;
            color: var(--text-secondary);
            font-size: 11px;
            line-height: 1.6;
        }

        .schedule-results__summary {
            min-height: 22px;
            margin-block: 20px 14px;
            color: var(--text-secondary);
            font-size: 12px;
            font-weight: 500;
        }

        .schedule-empty {
            padding: clamp(28px, 5vw, 48px) 24px;
            border: 1px dashed var(--edge-light);
            border-radius: var(--radius-lg);
            background: linear-gradient(140deg, var(--surface-hover), var(--surface));
            text-align: center;
        }

        .schedule-empty h3 {
            margin-bottom: 8px;
            color: var(--text-primary);
            font-size: 19px;
            line-height: 1.4;
        }

        .schedule-empty p {
            max-width: 50ch;
            margin-inline: auto;
            color: var(--text-secondary);
            font-size: 13px;
        }

        .schedules-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .schedule-card {
            position: relative;
            isolation: isolate;
            display: flex;
            flex-direction: column;
            min-width: 0;
            overflow: hidden;
            padding: 22px;
            border: 1px solid var(--edge-light);
            border-radius: var(--radius-lg);
            background: radial-gradient(ellipse at 100% 0%, var(--glow-soft), transparent 65%), var(--surface);
            box-shadow: var(--shadow-sm);
        }

        .schedule-card::before {
            content: '';
            position: absolute;
            inset: 0 28px auto;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary), var(--neon-cyan), transparent);
            box-shadow: 0 0 16px var(--glow-strong);
        }

        .schedule-card__heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
        }

        .schedule-card__heading > div {
            min-width: 0;
        }

        .schedule-card__icon {
            display: grid;
            place-items: center;
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            color: #c6f5ff;
            background: linear-gradient(135deg, var(--brand-blue), var(--brand-navy));
            border: 1px solid var(--edge-light);
            border-radius: 13px;
            box-shadow: 0 5px 20px var(--glow-soft);
        }

        .schedule-card__icon svg {
            width: 23px;
            height: 23px;
        }

        .schedule-card__heading h3 {
            color: var(--text-primary);
            font-size: 20px;
            line-height: 1.3;
            letter-spacing: -.03em;
            overflow-wrap: anywhere;
        }

        .schedule-card__eyebrow {
            color: var(--text-secondary);
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .schedule-card__description {
            flex: 1;
            color: var(--text-secondary);
            font-size: 13px;
            line-height: 1.7;
        }

        .schedule-card__status {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
            padding-top: 14px;
            border-top: 1px solid var(--border);
            color: var(--text-secondary);
            font-size: 12px;
            font-weight: 500;
        }

        .schedule-card__status svg {
            flex-shrink: 0;
            width: 16px;
            height: 16px;
            color: var(--neon-cyan);
        }

        .schedule-card--expanded {
            grid-column: 1 / -1;
        }

        .schedule-card__documents {
            display: grid;
            gap: 16px;
            margin-top: 18px;
        }

        .schedule-card__documents[hidden] {
            display: none;
        }

        .schedule-card__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .schedule-card__actions .btn {
            min-width: 0;
            min-height: 44px;
            flex: 1 1 100px;
            padding: 10px 12px;
            font-size: 12px;
            text-align: center;
        }

        .schedule-card__actions .btn svg {
            flex: 0 0 auto;
            width: 16px;
            height: 16px;
        }

        .schedule-card[hidden],
        .schedule-search__clear[hidden],
        .schedule-empty[hidden] {
            display: none;
        }

        .schedule-card__preview {
            min-width: 0;
            border-top: 1px solid var(--border);
        }

        .schedule-card__preview summary {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            min-height: 52px;
            padding-block: 12px;
            color: var(--primary);
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            list-style: none;
        }

        .schedule-card__preview summary::-webkit-details-marker {
            display: none;
        }

        .schedule-card__preview summary svg {
            width: 18px;
            height: 18px;
            transition: transform var(--transition-fast);
        }

        .schedule-card__preview[open] summary svg {
            transform: rotate(180deg);
        }

        .schedule-card__pdf {
            display: block;
            width: 100%;
            height: clamp(360px, 70vh, 720px);
            min-width: 0;
            border: 1px solid var(--edge-light);
            border-radius: var(--radius-sm);
            background: #ffffff;
            color: #172e50;
            color-scheme: light;
        }

        .schedule-card__pdf:focus-visible {
            outline: 3px solid var(--primary);
            outline-offset: 3px;
        }

        .schedule-card__fallback {
            padding: 24px;
            font-size: 14px;
            line-height: 1.7;
        }

        .schedule-card__fallback a {
            color: #245edb;
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        @media (max-width: 1000px) {
            .schedules-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 800px) {
            .schedule-browser {
                grid-template-columns: minmax(0, 1fr);
                gap: 20px;
            }
        }

        @media (max-width: 650px) {
            .schedule-filters {
                flex-wrap: nowrap;
            }
            .schedule-filter {
                min-width: 0;
                flex: 1;
                gap: 8px;
                padding-inline: 10px;
            }
            .schedules-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 14px;
            }
        }

        .content  {
            padding-bottom: var(--space-section);
        }

        .content__inner  {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 300px;
            gap: 32px;
            align-items: start;
        }

        .services__group + .services__group  {
            margin-top: 28px;
        }

        .services__group h3  {
            display: flex;
            gap: 14px;
            align-items: center;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-secondary);
            margin-bottom: 14px;
        }

        .services__group h3::after  {
            content: '';
            height: 1px;
            background: var(--border);
            flex: 1;
        }

        .services__group h3::before {
            content: '';
            width: 3px;
            height: 14px;
            flex-shrink: 0;
            border-radius: 3px;
            background: var(--primary);
        }

        .services__grid  {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(100%, 265px), 1fr));
            gap: 14px;
        }

        .sidebar  {
            min-width: 0;
        }

        .notice-panel  {
            position: relative;
            padding: 24px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            border-top-color: var(--edge-light);
        }

        .notice-panel::before {
            content: '';
            position: absolute;
            top: -1px;
            left: 24px;
            right: 24px;
            height: 2px;
            border-radius: 2px;
            background: linear-gradient(90deg, var(--primary), var(--neon-cyan), transparent);
            box-shadow: 0 0 14px var(--glow-soft);
            pointer-events: none;
        }

        .notice-panel__head  {
            margin-bottom: 22px;
        }

        .notice-panel__heading  {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 6px;
        }

        .notice-panel__heading > svg  {
            color: var(--primary);
            width: 20px;
            height: 20px;
        }

        .notice-panel__head h2  {
            font-size: 18px;
            letter-spacing: -.025em;
            font-weight: 700;
        }

        .notice-panel__head p  {
            font-size: 12px;
            color: var(--text-secondary);
        }

        .notice  {
            padding-block: 20px;
            border-top: 1px solid var(--border);
        }

        .notice:first-child  {
            padding-top: 0;
            border-top: 0;
        }

        .notice:last-child  {
            padding-bottom: 0;
        }

        .notice__tag  {
            display: inline-block;
            font-size: 11px;
            font-weight: 600;
            line-height: 1.5;
            padding: 4px 8px;
            background: var(--surface-hover);
            color: var(--primary);
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .notice__tag--academico  {
            background: var(--accent-soft);
            color: var(--accent);
        }

        .notice__tag--servicios  {
            background: var(--surface-secondary);
            color: var(--text-secondary);
        }

        .notice__title  {
            font-size: 14px;
            font-weight: 600;
            line-height: 1.45;
            margin-bottom: 6px;
        }

        .notice__text  {
            font-size: 13px;
            color: var(--text-secondary);
            line-height: 1.65;
        }

        .help-card  {
            margin-top: 18px;
            padding: 24px;
            background: var(--accent-soft);
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
        }

        .help-card > svg  {
            color: var(--accent);
            margin-bottom: 14px;
        }

        .help-card h3  {
            font-size: 16px;
            font-weight: 600;
            letter-spacing: -.02em;
            margin-bottom: 8px;
        }

        .help-card p  {
            font-size: 13px;
            color: var(--text-secondary);
            margin-bottom: 12px;
        }

        .help-card a  {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            min-height: 44px;
            font-size: 13px;
            font-weight: 600;
            color: var(--accent);
        }

        .help-card a svg  {
            width: 17px;
            height: 17px;
        }

        .support-section {
            margin-bottom: var(--space-section);
        }

        .support-card {
            position: relative;
            isolation: isolate;
            display: grid;
            grid-template-columns: minmax(200px, 290px) minmax(0, 1fr);
            align-items: center;
            gap: clamp(28px, 5vw, 64px);
            padding: clamp(24px, 3.5vw, 40px);
            overflow: hidden;
            color: #f4f8ff;
            background: radial-gradient(ellipse at 0% 10%, rgba(34, 211, 238, .15), transparent 48%), linear-gradient(120deg, #122a47, #0b182d 70%);
            border: 1px solid rgba(103, 232, 249, .28);
            border-radius: var(--radius-lg);
            box-shadow: 0 24px 58px rgba(8, 23, 43, .18), 0 0 28px var(--glow-soft);
        }

        .support-card::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            background-image: radial-gradient(rgba(103, 232, 249, .1) 1px, transparent 1px);
            background-size: 24px 24px;
            opacity: .6;
        }

        .support-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 12%;
            width: 60%;
            height: 1px;
            pointer-events: none;
            background: linear-gradient(90deg, transparent, #67e8f9, transparent);
            box-shadow: 0 0 18px rgba(103, 232, 249, .5);
        }

        .support-card__portrait {
            position: relative;
            min-width: 0;
            padding: 8px;
            overflow: hidden;
            background: rgba(103, 232, 249, .05);
            border: 1px solid rgba(103, 232, 249, .4);
            border-radius: 22px;
            box-shadow: 0 0 28px rgba(34, 211, 238, .12), inset 0 0 20px rgba(103, 232, 249, .06);
        }

        .support-card__portrait::after {
            content: "";
            position: absolute;
            inset: 8px;
            pointer-events: none;
            border-radius: 14px;
            background: linear-gradient(180deg, transparent 60%, rgba(5, 16, 31, .85));
        }

        .support-card__photo {
            display: block;
            width: 100%;
            height: auto;
            aspect-ratio: 4 / 5;
            object-fit: cover;
            object-position: center 30%;
            border-radius: 14px;
            background: #162d47;
        }

        .support-card__photo-label {
            position: absolute;
            z-index: 1;
            bottom: 22px;
            left: 22px;
            right: 22px;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #f4f8ff;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .04em;
        }

        .support-card__photo-label svg {
            width: 17px;
            height: 17px;
            flex: 0 0 auto;
            color: #a5f3fc;
        }

        .support-card__body {
            min-width: 0;
        }

        .support-card__institution {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 18px;
            color: #a5f3fc;
            font-size: 11px;
            font-weight: 600;
            line-height: 1.6;
            letter-spacing: .09em;
            text-transform: uppercase;
        }

        .support-card__institution::before {
            content: "";
            width: 22px;
            height: 2px;
            flex: 0 0 auto;
            background: #67e8f9;
            box-shadow: 0 0 12px rgba(103, 232, 249, .5);
        }

        .support-card__name {
            max-width: 19ch;
            margin-bottom: 18px;
            color: #f4f8ff;
            font-size: clamp(26px, 3.3vw, 38px);
            line-height: 1.15;
            font-weight: 700;
            letter-spacing: -.03em;
            overflow-wrap: anywhere;
        }

        .support-card__description {
            max-width: 47ch;
            font-size: 15px;
            line-height: 1.75;
            color: #bfcee1;
        }

        .support-card__contact {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            margin-top: 28px;
            padding-top: 22px;
            border-top: 1px solid rgba(191, 206, 225, .18);
        }

        .support-card__contact-label {
            color: #bfcee1;
            font-size: 12px;
            font-weight: 500;
        }

        .support-card__email {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            max-width: 100%;
            min-height: 48px;
            padding: 14px 18px;
            border: 1px solid rgba(165, 243, 252, .6);
            border-radius: var(--radius-sm);
            background: #d4f7fc;
            color: #10354b;
            font-size: 14px;
            font-weight: 600;
            transition: box-shadow var(--transition-fast), background-color var(--transition-fast);
        }

        .support-card__email span {
            min-width: 0;
            overflow-wrap: anywhere;
        }

        .support-card__email svg {
            width: 20px;
            height: 20px;
            flex: 0 0 auto;
        }

        .support-card__email:hover {
            background: #a5f3fc;
            box-shadow: 0 0 24px rgba(103, 232, 249, .2);
        }

        .support-card__email:focus-visible {
            outline: 3px solid #67e8f9;
            outline-offset: 5px;
        }

        .faq-section  {
            display: grid;
            grid-template-columns: minmax(200px, .75fr) minmax(0, 1.5fr);
            gap: 40px;
            padding: 32px;
            margin-bottom: var(--space-section);
            background: linear-gradient(140deg, var(--surface-hover), var(--surface) 55%);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
        }

        .faq-section__head > p:last-child  {
            color: var(--text-secondary);
            font-size: 14px;
        }

        .faq-item + .faq-item  {
            border-top: 1px solid var(--border);
        }

        .faq-question  {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            min-height: 60px;
            padding-block: 16px;
            font-size: 14px;
            font-weight: 600;
            line-height: 1.5;
            cursor: pointer;
            list-style: none;
        }

        .faq-question::-webkit-details-marker  {
            display: none;
        }

        .faq-question:hover  {
            color: var(--primary);
        }

        .faq-icon  {
            display: flex;
            flex-shrink: 0;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid var(--border);
            border-radius: 50%;
            background: var(--surface);
            color: var(--primary);
            transition: transform var(--transition-normal);
        }

        .faq-icon svg  {
            width: 20px;
            height: 20px;
        }

        .faq-item[open] .faq-icon  {
            transform: rotate(45deg);
            border-color: var(--edge-light);
            box-shadow: 0 0 14px var(--glow-soft);
        }

        .faq-item[open] .faq-question {
            color: var(--primary);
        }

        .faq-answer  {
            padding: 0 28px 20px 0;
            font-size: 14px;
            color: var(--text-secondary);
        }

        .location-section {
            margin-bottom: var(--space-section);
        }

        .location-card {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.5fr);
            overflow: hidden;
            border: 1px solid var(--edge-light);
            border-radius: var(--radius-lg);
            background: var(--surface);
            box-shadow: var(--shadow-sm), 0 0 32px var(--glow-soft);
        }

        .location-card__info {
            min-width: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: clamp(24px, 3vw, 40px);
            background: radial-gradient(ellipse at 0 0, var(--glow-soft), transparent 70%), linear-gradient(145deg, var(--surface), var(--surface-secondary));
        }

        .location-card__icon {
            display: grid;
            place-items: center;
            width: 52px;
            height: 52px;
            margin-bottom: 22px;
            border: 1px solid var(--edge-light);
            border-radius: var(--radius-md);
            color: var(--primary);
            background: var(--surface);
            box-shadow: 0 0 22px var(--glow-soft);
        }

        .location-card__icon svg {
            width: 26px;
            height: 26px;
        }

        .location-card__name {
            font-size: clamp(22px, 2.2vw, 28px);
            line-height: 1.3;
            letter-spacing: -.025em;
            margin-bottom: 8px;
        }

        .location-card__city {
            color: var(--primary);
            font-weight: 600;
        }

        .location-card__hint {
            margin-top: 18px;
            margin-bottom: 24px;
            color: var(--text-secondary);
            font-size: 14px;
        }

        .location-card__link {
            max-width: 100%;
            text-align: center;
        }

        .location-card__map {
            min-width: 0;
            background: var(--surface-secondary);
        }

        .location-card__map iframe {
            display: block;
            width: 100%;
            height: 100%;
            min-height: clamp(360px, 35vw, 440px);
            border: 0;
        }

        .location-card__map iframe:focus-visible {
            outline: 3px solid var(--primary);
            outline-offset: -3px;
        }

        @media (max-width: 900px) {
            .location-card {
                grid-template-columns: minmax(0, 1fr);
            }

            .location-card__map iframe {
                height: clamp(320px, 50vw, 420px);
                min-height: 0;
            }
        }

        .site-footer  {
            --primary: var(--brand-highlight);
            --text-primary: #ffffff;
            --text-secondary: var(--brand-muted);
            --border: #3c5b80;
            --surface-hover: #244c7b;
            padding-block: 36px;
            color: var(--text-primary);
            background: radial-gradient(ellipse at 85% 0, rgba(62, 211, 232, .12), transparent 60%), var(--brand-navy);
            border-top: 1px solid #527ca7;
            box-shadow: 0 -10px 32px var(--glow-soft);
        }

        .site-footer__inner  {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
        }

        .site-footer__brand  {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .site-footer__logo {
            display: block;
            width: 156px;
            height: auto;
            margin-bottom: 12px;
            filter: brightness(0) invert(1);
        }

        .site-footer__title  {
            font-size: 16px;
            font-weight: 600;
        }

        .site-footer__sub  {
            font-size: 12px;
            color: var(--text-secondary);
        }

        .site-footer__links, .site-footer__social  {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px 18px;
        }

        .site-footer__links a  {
            display: inline-flex;
            align-items: center;
            min-height: 44px;
            font-size: 12px;
            color: var(--text-secondary);
        }

        .site-footer__links a:hover  {
            color: var(--primary);
        }

        .site-footer__social  {
            gap: 8px;
        }

        .social-btn  {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 12px;
            border: 1px solid var(--border);
            color: var(--text-secondary);
            transition: background-color var(--transition-fast), color var(--transition-fast);
        }

        .social-btn svg  {
            width: 18px;
            height: 18px;
        }

        .social-btn:hover  {
            background: var(--surface-hover);
            color: var(--primary);
        }

        /* Firma compacta con las imágenes del equipo. */
        .creator-signature { position: relative; margin-top: 20px; padding-top: 18px; }
        .creator-signature::before { content: ''; position: absolute; top: 0; left: 15%; right: 15%; height: 1px; background: linear-gradient(90deg, transparent, #91e3ee60, #c6baff60, transparent); }
        .signature-line { display: flex; justify-content: center; align-items: center; gap: 24px; }
        .signature-powered { margin: 0; color: #c4d9ee; font-size: 11px; font-weight: 500; letter-spacing: .035em; white-space: nowrap; }
        .signature-makers { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 20px; width: min(100%, 324px); }
        .signature-person { min-width: 0; margin: 0; text-align: center; }
        .signature-visual { display: flex; align-items: center; justify-content: center; height: 144px; }
        .signature-photo {
            position: relative;
            isolation: isolate;
            display: block;
            width: 108px;
            height: 144px;
            padding: 2px;
            border-radius: 14px;
            background: linear-gradient(125deg, #53edff, #6a8bff, #cd74ff, #ff71a9, #ffd47c, #6cebbd, #53edff);
            background-size: 350% 350%;
            box-shadow: 0 0 0 1px #ffffff18, 0 8px 22px #00000035;
        }
        .signature-photo::before { content: ''; position: absolute; inset: -4px; z-index: -1; border-radius: 17px; background: inherit; filter: blur(9px); opacity: .35; pointer-events: none; }
        .signature-photo__crop { display: block; width: 100%; height: 100%; overflow: hidden; border: 1px solid #143353; border-radius: 12px; background: #213b53; }
        .signature-photo img { display: block; width: 100%; height: 100%; object-fit: cover; object-position: 50% 38%; }
        .signature-logo { width: 100%; }
        .signature-logo img { display: block; width: 130px; max-width: 100%; height: auto; filter: brightness(0) invert(1) drop-shadow(0 0 10px #c6baff20); }
        .signature-person figcaption { display: flex; flex-direction: column; justify-content: flex-end; gap: 2px; min-height: 34px; margin-top: 8px; line-height: 1.4; }
        .signature-person strong { color: #bcecf3; font-size: 12px; font-weight: 600; }
        .signature-role { color: #c4d9ee; font-size: 10px; }
        .signature-person--backend .signature-role { color: #d2c9ff; }
        @media (max-width: 520px) {
            .signature-line { flex-direction: column; gap: 12px; }
            .signature-makers { gap: 14px; }
            .signature-logo img { width: 122px; }
        }
        @media (prefers-reduced-motion: no-preference) {
            .signature-photo { animation: portrait-rgb-flow 8s ease-in-out infinite; transition: transform 220ms ease, box-shadow 220ms ease; }
            .signature-photo::before { transition: opacity 220ms ease; }
            .signature-person:hover .signature-photo { transform: translateY(-2px); box-shadow: 0 0 0 1px #ffffff30, 0 10px 26px #00000040; }
            .signature-person:hover .signature-photo::before { opacity: .55; }
        }
        @keyframes portrait-rgb-flow { 0%, 100% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } }
        @media (forced-colors: active) {
            .creator-signature::before { background: CanvasText; }
            .signature-photo { border: 1px solid CanvasText; }
            .signature-photo::before { display: none; }
            .signature-logo { padding: 6px; background: #fff; forced-color-adjust: none; }
            .signature-logo img { filter: none; }
        }

        .back-to-top  {
            position: fixed;
            z-index: 30;
            right: 22px;
            bottom: 22px;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: var(--shadow-sm);
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition: opacity var(--transition-normal), transform var(--transition-normal), visibility var(--transition-normal);
        }

        .back-to-top.visible  {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover  {
            color: var(--primary);
            border-color: var(--primary);
        }

        /* Finite entrances keep the portal readable before and without JavaScript. */
        [data-reveal].reveal-in {
            animation: section-arrive 680ms cubic-bezier(.22, .75, .25, 1) var(--reveal-delay, 0ms) backwards;
        }

        .welcome.is-arriving .welcome__eyebrow,
        .welcome.is-arriving .welcome__title,
        .welcome.is-arriving .welcome__description,
        .welcome.is-arriving .welcome__actions,
        .welcome.is-arriving .welcome__path {
            animation: welcome-arrive 760ms cubic-bezier(.22, .75, .25, 1) backwards;
        }

        .welcome.is-arriving .welcome__seal {
            animation: welcome-seal-arrive 900ms cubic-bezier(.22, .75, .25, 1) backwards;
        }

        .welcome.is-arriving .welcome__title { animation-delay: 70ms; }
        .welcome.is-arriving .welcome__description { animation-delay: 140ms; }
        .welcome.is-arriving .welcome__actions { animation-delay: 210ms; }
        .welcome.is-arriving .welcome__path:nth-child(1) { animation-delay: 260ms; }
        .welcome.is-arriving .welcome__path:nth-child(2) { animation-delay: 320ms; }
        .welcome.is-arriving .welcome__path:nth-child(3) { animation-delay: 380ms; }

        .welcome__cta {
            position: relative;
        }

        .welcome__cta::after,
        .resource-link::after {
            content: '';
            position: absolute;
            inset: 1px;
            border-radius: inherit;
            background: linear-gradient(110deg, transparent 35%, rgba(176, 242, 255, .2) 48%, transparent 61%) 180% 0 / 250% 100%;
            opacity: 0;
            pointer-events: none;
        }

        .welcome__cta svg,
        .welcome__path > svg,
        .resource-link__icon,
        .resource-link__action svg,
        .support-card__email svg,
        .help-card > svg,
        .help-card a svg,
        .schedule-card__icon,
        .location-card__icon {
            transition: transform var(--transition-normal), box-shadow var(--transition-normal);
        }

        .support-card__portrait {
            transition: border-color var(--transition-normal), box-shadow var(--transition-normal);
        }

        .support-card::after,
        .schedule-card::before {
            transition: transform 480ms ease, opacity var(--transition-normal);
            transform-origin: center;
        }

        .schedule-card,
        .help-card,
        .location-card {
            transition: border-color var(--transition-normal), box-shadow var(--transition-normal);
        }

        .schedule-card:focus-within,
        .help-card:focus-within,
        .location-card:focus-within {
            border-color: var(--primary);
            box-shadow: var(--shadow-md), 0 0 30px var(--glow-soft);
        }

        .support-card:focus-within .support-card__portrait {
            border-color: #a5f3fc;
            box-shadow: 0 0 36px rgba(34, 211, 238, .22), inset 0 0 20px rgba(103, 232, 249, .08);
        }

        .welcome__cta:focus-visible::after,
        .resource-link:focus-visible::after {
            animation: card-glint 850ms ease-out;
        }

        .service-card:focus-visible {
            border-color: var(--primary);
            box-shadow: var(--shadow-md), 0 0 24px var(--glow-soft);
        }

        @media (prefers-reduced-motion: no-preference) {
            .resource-link:focus-visible {
                transform: translateY(-2px);
            }
            .resource-link:focus-visible .resource-link__icon {
                transform: translateY(-3px) rotate(-4deg);
            }
            .service-card:focus-visible .service-card__icon {
                transform: translateY(-2px);
            }
            .service-card:focus-visible .service-card__arrow {
                transform: translate(2px, -2px);
            }
            .resource-link:active {
                transform: scale(.98);
            }
        }

        .faq-item[open] .faq-answer {
            animation: answer-arrive 280ms ease-out;
        }

        .faq-question {
            transition: color var(--transition-fast);
        }

        @keyframes section-arrive {
            from { opacity: .55; transform: translate3d(0, 18px, 0); }
            to { opacity: 1; transform: none; }
        }

        @keyframes welcome-arrive {
            from { opacity: .72; transform: translate3d(0, 16px, 0); }
            to { opacity: 1; transform: none; }
        }

        @keyframes welcome-seal-arrive {
            from { opacity: .72; transform: scale(.9); }
            to { opacity: 1; transform: none; }
        }

        @keyframes card-glint {
            0% { opacity: 0; background-position: 180% 0; }
            25% { opacity: 1; }
            100% { opacity: 0; background-position: -80% 0; }
        }

        @keyframes answer-arrive {
            from { opacity: .65; transform: translateY(-5px); }
            to { opacity: 1; transform: none; }
        }

        @media (hover: hover) and (pointer: fine)  {
            .welcome__cta:hover::after,
            .resource-link:hover::after {
                animation: card-glint 850ms ease-out;
            }
            .welcome__cta:hover svg,
            .resource-link:hover .resource-link__action svg,
            .help-card a:hover svg {
                transform: translateX(3px);
            }
            .welcome__path:hover > svg,
            .resource-link:hover .resource-link__icon {
                transform: translateY(-3px) rotate(-4deg);
            }
            .schedule-card:hover,
            .help-card:hover,
            .location-card:hover {
                border-color: var(--primary);
                box-shadow: var(--shadow-md), 0 0 30px var(--glow-soft);
            }
            .schedule-card:hover .schedule-card__icon,
            .help-card:hover > svg,
            .location-card:hover .location-card__icon {
                transform: translateY(-3px) rotate(-4deg);
            }
            .support-card:hover .support-card__portrait {
                border-color: #a5f3fc;
                box-shadow: 0 0 36px rgba(34, 211, 238, .22), inset 0 0 20px rgba(103, 232, 249, .08);
            }
            .support-card:hover::after,
            .schedule-card:hover::before {
                transform: scaleX(1.15);
            }
            .support-card__email:hover svg {
                transform: translateY(-2px) rotate(-7deg);
            }
            .resource-link:hover {
                transform: translateY(-2px);
            }
            .btn:hover  {
                transform: translateY(-2px);
                box-shadow: var(--shadow-md);
            }
            .btn:hover svg  {
                transform: translateX(2px);
            }
            .service-card:hover  {
                transform: translateY(-4px);
                border-color: var(--primary);
                box-shadow: var(--shadow-md), 0 0 24px var(--glow-soft);
            }
            .service-card:hover .service-card__icon  {
                transform: translateY(-2px);
                background: var(--surface-hover);
                box-shadow: 0 0 16px var(--glow-soft);
            }
            .service-card:hover .service-card__arrow  {
                color: var(--primary);
                transform: translate(2px, -2px);
            }
            .hero__visual:hover img  {
                transform: scale(1.02);
            }
        }

        .btn:active, .service-card:active  {
            transform: translateY(0) scale(.99);
            box-shadow: var(--shadow-sm);
        }

        @media (max-width: 1100px)  {
            .hero__resources {
                grid-template-columns: 1fr;
            }
            .resource-link {
                align-items: center;
                padding: 14px 16px;
            }
            .resource-link__body {
                display: grid;
                grid-template-columns: minmax(0, 1fr) auto;
                column-gap: 10px;
            }
            .resource-link__type {
                grid-column: 1 / -1;
            }
            .resource-link__action {
                align-self: center;
                margin-top: 0;
                font-size: 11px;
            }
            .resource-link__title {
                font-size: 18px;
            }
            .brand__label  {
                display: none;
            }
            .content__inner  {
                grid-template-columns: minmax(0, 1fr) 280px;
                gap: 24px;
            }
            .hero__inner  {
                grid-template-columns: minmax(0, 1.15fr) minmax(240px, .85fr);
            }
        }

        @media (max-width: 900px)  {
            .topbar__inner  {
                min-height: 76px;
            }
            .hamburger  {
                display: inline-flex;
            }
            .nav  {
                position: absolute;
                top: calc(100% + 8px);
                left: 0;
                right: 0;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 4px;
                padding: 12px;
                background: var(--surface);
                border: 1px solid var(--border);
                border-radius: var(--radius-md);
                box-shadow: var(--shadow-md);
                opacity: 0;
                visibility: hidden;
                transform: translateY(-8px);
                transition: opacity var(--transition-normal), transform var(--transition-normal), visibility var(--transition-normal);
            }
            .nav.is-open  {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
            .nav__link  {
                gap: 12px;
                padding: 12px 16px;
                min-height: 48px;
                border-radius: 8px;
            }
            .nav__icon {
                display: block;
                width: 20px;
                height: 20px;
            }
            .nav__link::after  {
                display: none;
            }
            .nav__link.is-active, .nav__link:hover  {
                background: var(--surface-hover);
            }
            .content__inner  {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            .sidebar  {
                display: grid;
                grid-template-columns: minmax(0, 1fr) 240px;
                gap: 20px;
                align-items: start;
            }
            .help-card  {
                margin-top: 0;
            }
            .hero__inner  {
                gap: 24px;
                padding: 28px;
            }
            .hero__title  {
                font-size: clamp(30px, 4vw, 38px);
            }
            .hero__caption-label {
                display: none;
            }
            .hero__caption {
                line-height: 1.45;
            }
            .hero__caption strong {
                font-size: 16px;
            }
            .services__frequent  {
                gap: 12px;
            }
            .service-card--lg  {
                padding: 20px;
            }
            .service-card--lg .service-card__title  {
                font-size: 16px;
            }
            .service-card--lg .service-card__desc  {
                font-size: 13px;
            }
            .service-card--lg .service-card__body {
                padding-right: 0;
            }
            .faq-section  {
                grid-template-columns: 1fr;
                gap: 18px;
            }
        }

        @media (max-width: 650px)  {
            :root {
                --page-gutter: max(16px, env(safe-area-inset-left, 0px), env(safe-area-inset-right, 0px));
                --space-section: 32px;
            }
            body {
                padding-bottom: calc(76px + env(safe-area-inset-bottom, 0px));
            }
            html {
                scroll-padding-top: calc(88px + env(safe-area-inset-top, 0px));
                scroll-padding-bottom: calc(80px + env(safe-area-inset-bottom, 0px));
            }
            .topbar {
                padding-top: env(safe-area-inset-top, 0px);
                backdrop-filter: none;
                -webkit-backdrop-filter: none;
            }
            .topbar__inner  {
                gap: 12px;
                min-height: 68px;
            }
            .topbar__actions  {
                gap: 6px;
            }
            .topbar__notice {
                display: none;
            }
            .topbar__actions .tooltip::after {
                white-space: normal;
                width: max-content;
                max-width: min(190px, calc(100vw - 32px));
                text-align: center;
            }
            .brand__mark  {
                height: 28px;
                max-width: 120px;
            }
            .brand__logo  {
                padding: 0;
            }
            .brand {
                gap: 10px;
            }
            .brand__label {
                display: none;
            }
            .brand__label strong {
                display: none;
            }
            .brand__label span {
                font-size: 11px;
                line-height: 1.4;
            }
            .hamburger {
                display: none;
            }
            .nav,
            .nav.is-open {
                position: fixed;
                inset: auto 0 0;
                z-index: 60;
                display: grid;
                grid-template-columns: repeat(5, minmax(0, 1fr));
                gap: 4px;
                padding: 8px max(12px, env(safe-area-inset-right, 0px)) max(8px, env(safe-area-inset-bottom, 0px)) max(12px, env(safe-area-inset-left, 0px));
                border: 0;
                border-top: 1px solid var(--border);
                border-radius: 18px 18px 0 0;
                box-shadow: 0 -6px 24px rgba(9, 28, 48, .08);
                opacity: 1;
                visibility: visible;
                transform: none;
                transition: background-color var(--transition-normal);
            }
            .nav__link {
                flex-direction: column;
                justify-content: center;
                gap: 4px;
                min-height: 52px;
                padding: 6px 4px;
                border-radius: 10px;
                font-size: 11px;
                line-height: 1.3;
            }
            .welcome-active .nav {
                opacity: 0;
                visibility: hidden;
                pointer-events: none;
                transform: translateY(14px);
            }
            .nav__link:focus-visible {
                outline-offset: 1px;
            }
            .nav__link.is-active {
                font-weight: 700;
                box-shadow: inset 0 0 0 1px var(--edge-light), 0 0 14px var(--glow-soft);
            }
            .nav__icon {
                width: 21px;
                height: 21px;
            }
            .back-to-top {
                right: 16px;
                bottom: calc(88px + env(safe-area-inset-bottom, 0px));
            }
            .hero  {
                padding-top: 18px;
            }
            .hero__inner  {
                grid-template-columns: 1fr;
                padding: 20px;
                gap: 20px;
                border-radius: 20px;
            }
            .hero__title  {
                font-size: clamp(28px, 7.2vw, 36px);
                margin-bottom: 14px;
            }
            .hero__eyebrow {
                margin-bottom: 12px;
                font-size: 10px;
            }
            .hero__text  {
                font-size: 14px;
                line-height: 1.65;
                margin-bottom: 20px;
            }
            .hero__actions  {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 8px;
            }
            .hero__secondary-link {
                min-width: 0;
                justify-content: center;
                min-height: 44px;
                padding: 4px;
                gap: 6px;
                font-size: 12px;
                line-height: 1.4;
            }
            .resource-link {
                grid-template-columns: 30px minmax(0, 1fr);
                padding: 14px;
                gap: 10px;
            }
            .resource-link__icon {
                width: 30px;
                height: 30px;
                border-radius: 8px;
            }
            .resource-link__body {
                display: flex;
            }
            .resource-link__action {
                align-self: flex-start;
                font-size: 12px;
            }
            .hero__resource-note {
                font-size: 11px;
            }
            .hero__visual {
                max-width: none;
                border-radius: 14px;
                box-shadow: 0 0 20px rgba(89, 205, 255, .12);
            }
            .hero__photo {
                aspect-ratio: 16 / 9;
            }
            .hero__photo img {
                object-position: center 24%;
            }
            .hero__badge {
                top: 10px;
                left: 10px;
                right: 10px;
                padding: 5px 8px;
                font-size: 10px;
            }
            .hero__caption {
                inset: auto 14px 12px;
                line-height: 1.4;
            }
            .hero__caption-label {
                display: none;
            }
            .hero__caption strong  {
                font-size: 15px;
            }
            .section-head {
                margin-bottom: 18px;
            }
            .section-head h2, .faq-section h2 {
                font-size: 23px;
            }
            .section-head p {
                font-size: 13px;
            }
            .services__frequent  {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            .service-card--lg  {
                flex-direction: row;
                align-items: center;
                min-height: 96px;
                padding: 18px 32px 18px 16px;
                gap: 12px;
            }
            .service-card--lg::before  {
                top: 20px;
                bottom: 20px;
                left: 0;
                right: auto;
                width: 3px;
                height: auto;
                border-radius: 0 3px 3px 0;
            }
            .service-card--lg .service-card__arrow  {
                top: 24px;
                right: 16px;
            }
            .service-card--lg .service-card__arrow svg  {
                width: 16px;
                height: 16px;
            }
            .service-card--lg .service-card__icon  {
                width: 42px;
                height: 42px;
            }
            .service-card--lg .service-card__body  {
                padding-right: 0;
            }
            .services__grid  {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            .services__grid .service-card {
                padding: 16px;
                gap: 12px;
            }
            .service-card__body {
                padding-right: 12px;
            }
            .service-card__desc {
                line-height: 1.5;
            }
            .sidebar  {
                grid-template-columns: 1fr;
            }
            .notice-panel, .help-card  {
                padding: 20px;
            }
            .support-card {
                grid-template-columns: 1fr;
                gap: 28px;
                padding: 20px;
            }
            .support-card__portrait {
                width: 100%;
                max-width: 280px;
                justify-self: center;
            }
            .support-card__institution {
                margin-bottom: 14px;
                font-size: 10px;
            }
            .support-card__name {
                font-size: 28px;
            }
            .support-card__description {
                font-size: 14px;
            }
            .support-card__email {
                width: 100%;
                padding-inline: 12px;
                font-size: 13px;
            }
            .faq-section  {
                padding: 20px;
            }
            .location-card {
                border-radius: 20px;
            }
            .location-card__info {
                padding: 24px;
            }
            .location-card__icon {
                margin-bottom: 18px;
            }
            .location-card__link {
                width: 100%;
            }
            .site-footer__inner  {
                align-items: flex-start;
                flex-direction: column;
                gap: 14px;
            }
            .site-footer__links  {
                gap: 0 18px;
            }
        }

        @media (prefers-reduced-motion: reduce)  {
            html  {
                scroll-behavior: auto;
            }
            *, *::before, *::after  {
                transition: none !important;
                animation: none !important;
            }
            .btn:hover, .btn:hover svg, .service-card:hover, .service-card:hover .service-card__icon, .service-card:hover .service-card__arrow, .hero__visual:hover img, .btn:active, .service-card:active, .icon-btn:active, .hamburger:active, .resource-link:hover,
            .welcome__cta:hover svg, .welcome__path:hover > svg, .resource-link:hover .resource-link__icon, .resource-link:hover .resource-link__action svg,
            .support-card__email:hover svg, .support-card:hover::after, .schedule-card:hover::before, .schedule-card:hover .schedule-card__icon,
            .help-card:hover > svg, .help-card a:hover svg, .location-card:hover .location-card__icon  {
                transform: none;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/agenda.css') }}">
    <script src="{{ asset('js/agenda.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/examenes.css') }}">
</head>
<body>
    <div class="portal-content" id="portalContent">
    <a class="skip-link" href="#servicios">Ir a los servicios</a>
    <button class="back-to-top" id="backToTop" aria-label="Volver al inicio del portal">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 19V5M5 12l7-7 7 7"/></svg>
    </button>
    <header class="topbar" id="topbar">
        <div class="topbar__inner container">
            <a class="brand" href="#inicio" aria-label="Volver al inicio de CECyTEG">
                <div class="brand__logo"><img class="brand__mark" src="{{  asset('images/logo.png')}}" alt="CECyTEG Guanajuato"></div>
                <div class="brand__label">
                    <span>Plantel Pénjamo</span>
                </div>
            </a>

            <nav class="nav" id="mainNav" aria-label="Navegación principal">
                <a href="#inicio" class="nav__link is-active"><svg class="nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m3 10 9-7 9 7v10a1 1 0 0 1-1 1h-5v-7H9v7H4a1 1 0 0 1-1-1Z"/></svg><span>Inicio</span></a>
                <a href="#servicios" class="nav__link"><svg class="nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="3" width="7" height="7" rx="1.5"/><rect x="14" y="3" width="7" height="7" rx="1.5"/><rect x="3" y="14" width="7" height="7" rx="1.5"/><rect x="14" y="14" width="7" height="7" rx="1.5"/></svg><span>Servicios</span></a>
                <a href="#avisos" class="nav__link"><svg class="nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"/></svg><span>Próximas</span></a>
                <a href="#horarios" class="nav__link"><svg class="nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18M8 15h2m4 0h2"/></svg><span>Horarios</span></a>
                <a href="{{ url('/test') }}" class="nav__link"><svg class="nav__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M9.5 9a2.5 2.5 0 0 1 5 0c0 2-2.5 2-2.5 4m0 4h.01"/></svg><span>Acceso</span></a>
            </nav>

            <div class="topbar__actions">
                <button class="icon-btn theme-toggle tooltip" id="themeSwitch" type="button" aria-label="Modo oscuro" aria-pressed="false" data-tooltip="Cambiar a modo oscuro">
                    <svg class="theme-toggle__sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="4"/><path d="M12 2v2m0 16v2M2 12h2m16 0h2M5 5l1.5 1.5m11 11L19 19M5 19l1.5-1.5m11-11L19 5"/></svg>
                    <svg class="theme-toggle__moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20.9 13a9 9 0 0 1-9.9-9.9A9 9 0 1 0 20.9 13Z"/></svg>
                </button>

                <a class="icon-btn tooltip" href="cecyteg-packettracer://abrir" aria-label="Abrir Cisco Packet Tracer instalado" data-tooltip="Abrir Packet Tracer">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="8" y="2" width="8" height="6" rx="1.5"/><rect x="2" y="16" width="7" height="6" rx="1.5"/><rect x="15" y="16" width="7" height="6" rx="1.5"/><path d="M12 8v4M5.5 16v-4h13v4"/></svg>
                </a>
                <a class="icon-btn tooltip" href="https://www.netacad.com/es/" target="_blank" rel="noopener noreferrer" aria-label="Cisco Networking Academy, abrir en otra pestaña" data-tooltip="Cisco NetAcad">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m2 8 10-5 10 5-10 5-10-5Z"/><path d="M6 10v6c4 3 8 3 12 0v-6M22 8v7"/></svg>
                </a>
                <a class="icon-btn tooltip topbar__notice" href="#avisos" aria-label="Ver próximas actividades" data-tooltip="Agenda del dia"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"/></svg></a>
                <button class="hamburger" id="hamburgerBtn" aria-controls="mainNav" aria-label="Abrir menú" aria-expanded="false">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio" tabindex="-1">
            <div class="hero__inner container">
                <div class="hero__copy">
                    <p class="hero__eyebrow"><img class="hero__emblem" src="{{ asset('images/logo_bola.png')}}" alt="" width="240" height="240" decoding="async"> CECyTEG · Plantel Pénjamo</p>
                    <h1 class="hero__title">Tu comunidad,<br><span>en un solo lugar.</span></h1>
                    <p class="hero__text">Encuentra los servicios de tu plantel en un solo lugar.</p>
                    <div class="hero__resources" role="group" aria-label="Acceso a la red del plantel">
                        <a class="resource-link resource-link--app" href="http://10.20.0.1:1000/login?" aria-describedby="packet-tracer-note">
                            <span class="resource-link__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><path d="M10 17l5-5-5-5"/><path d="M15 12H3"/></svg></span>
                            <span class="resource-link__body">
                                <span class="resource-link__type">Registro</span>
                                <span class="resource-link__title">Iniciar Sesión</span>
                            </span>
                        </a>
                        <a class="resource-link" href="http://10.10.10.10:8000/logout" target="_blank" rel="noopener noreferrer">
                            <span class="resource-link__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M9 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h4"/><path d="M16 17l5-5-5-5"/><path d="M21 12H9"/></svg></span>
                            <span class="resource-link__body">
                                <span class="resource-link__type">Registro</span>
                                <span class="resource-link__title">Cerrar Sesión</span>
                            </span>
                            <span class="sr-only">Abre en otra pestaña</span>
                        </a>
                    </div>
                    <p class="hero__resource-note" id="packet-tracer-note">Conéctate a la red del plantel para iniciar o cerrar tu sesión de internet.</p>
                    <div class="hero__actions">
                        <a href="#examenes" class="hero__secondary-link hero__secondary-link--exam">Ver exámenes <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
                        <a href="#servicios" class="hero__secondary-link">Ver servicios <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
                        <a href="#avisos" class="hero__secondary-link">Ver actividades del dia</a>
                        <a href="{{ url('/actividades') }}" class="hero__secondary-link">Registrar actividad</a>
                    </div>
                    <details class="packet-help" id="packetTracerHelp">
                        <summary>¿Packet Tracer no abre?</summary>
                        <div class="packet-help__content">
                            <p>El icono de la barra superior abre la aplicación instalada. En Windows, descarga y ejecuta este configurador una vez para tu usuario; después vuelve al icono y acepta el aviso del navegador.</p>
                            <a class="packet-help__download" href="{{ asset('downloads/configurar-packet-tracer.ps1') }}" download="configurar-packet-tracer.ps1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3v12m-5-5 5 5 5-5M4 16v5h16v-5"/></svg>Descargar configurador para Windows</a>
                            <p>Requiere Packet Tracer instalado. Si tu equipo bloquea la configuración, solicita ayuda al Centro de Cómputo. En macOS o Linux, abre la app desde el menú de aplicaciones.</p>
                        </div>
                    </details>
                </div>
                <figure class="hero__visual">
                    <div class="hero__photo">
                        <img src="{{ asset('images/plantel-hero.jpg') }}" alt="Patio y edificios del plantel CECyTEG Pénjamo" width="387" height="516" fetchpriority="high" decoding="async">
                        <span class="hero__badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg> Pénjamo, Guanajuato</span>
                    </div>
                    <figcaption class="hero__caption"><span class="hero__caption-label">Nuestra comunidad</span><strong>CECyTEG Plantel Pénjamo</strong></figcaption>
                </figure>
            </div>
        </section>

       <!-- @include('partials.examenes') -->

        <section class="quick-access container" id="servicios" tabindex="-1" aria-labelledby="quick-title">
            <div class="section-head">
                <p class="section-eyebrow">Servicios estudiantiles</p>
                <h2 id="quick-title">¿Qué necesitas hacer hoy?</h2>
                <p>Consulta tu información académica y tu correo institucional.</p>
            </div>
            <div class="services__frequent">
                
                        <a class="service-card service-card--lg service-card--classroom" data-semestre="1" href="https://miaula1.cecyteg.edu.mx" target="_blank" rel="noopener noreferrer">
                            <span class="service-card__icon semester-mark" aria-hidden="true">1°</span>
                            <span class="service-card__body">
                                <span class="service-card__title">Mi Aula Primero</span>
                                <span class="service-card__desc">Accede a Mi Aula Primero</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card service-card--lg service-card--classroom" data-semestre="3" href="https://miaula3.cecyteg.edu.mx" target="_blank" rel="noopener noreferrer">
                            <span class="service-card__icon semester-mark" aria-hidden="true">3°</span>
                            <span class="service-card__body">
                                <span class="service-card__title">Mi Aula Tercero</span>
                                <span class="service-card__desc">Accede a Mi Aula Tercero</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card service-card--lg service-card--classroom" data-semestre="5" href="https://miaula5.cecyteg.edu.mx" target="_blank" rel="noopener noreferrer">
                            <span class="service-card__icon semester-mark" aria-hidden="true">5°</span>
                            <span class="service-card__body">
                                <span class="service-card__title">Mi Aula Quinto</span>
                                <span class="service-card__desc">Accede a Mi Aula Quinto</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card service-card--lg" href="http://10.10.10.10:8000/me?url=correo" target="_blank" rel="noopener">
                            <span class="service-card__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7L12 13L21 7"/></svg>
                            </span>
                            <span class="service-card__body">
                                <span class="service-card__title">Correo Electrónico</span>
                                <span class="service-card__desc">Accede a tu correo institucional</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card service-card--lg" href="https://sae.cecyteg.edu.mx/PortalAlumno/Account/Login" target="_blank" rel="noopener">
                            <span class="service-card__icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9H21"/><path d="M8 14H16"/></svg>
                            </span>
                            <span class="service-card__body">
                                <span class="service-card__title">Portal SAE</span>
                                <span class="service-card__desc">Accede al portal estudiantil SAE</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>

            </div>
        </section>

        <section class="content" aria-label="Directorio de servicios y agenda del dia">
            <div class="content__inner container">
                <div class="services">
                    <div class="section-head">
                        <h2>Servicios para tu día a día</h2>
                        <p>Encuentra tus trámites y herramientas por categoría.</p>
                    </div>

                    <section class="services__group">
                        <h3>Académicos y aprendizaje</h3>
                        <div class="services__grid">
                        <a class="service-card" href="http://10.10.10.10:8000/me?url=superate" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 2L14.4 8.5L21.5 9.2L16.2 13.9L17.8 21L12 17.3L6.2 21L7.8 13.9L2.5 9.2L9.6 8.5L12 2Z"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">Súperate</span>
                                <span class="service-card__desc">Desarrolla tus habilidades y competencias</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card" href="http://10.10.10.10/lanzador/index.php" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9H15V15H9V9Z"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">Exámenes Extraordinarios</span>
                                <span class="service-card__desc">Información y registro de exámenes</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card" href="http://10.10.10.10/lanzador/index.php?planb" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 12C4 7.58 7.58 4 12 4C14.5 4 16.73 5.15 18.2 6.94"/><path d="M18 3V7H14"/><path d="M20 12C20 16.42 16.42 20 12 20C9.5 20 7.27 18.85 5.8 17.06"/><path d="M6 21V17H10"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">Plan B</span>
                                <span class="service-card__desc">Opciones de continuidad y alternativas</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card" href="https://vr.vex.com/" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M4 8C4 6.9 4.9 6 6 6H18C19.1 6 20 6.9 20 8V15C20 16.1 19.1 17 18 17H15.5L14 19.5C13.6 20.17 12.4 20.17 12 19.5L10.5 17H6C4.9 17 4 16.1 4 15V8Z"/><circle cx="9" cy="11.5" r="1.5"/><circle cx="15" cy="11.5" r="1.5"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">VR VEX</span>
                                <span class="service-card__desc">Accede a experiencias de realidad virtual VEX</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        </div>
                    </section>
                    <section class="services__group">
                        <h3>Trámites y documentos</h3>
                        <div class="services__grid">
                        <a class="service-card" href="http://10.10.10.10:8000/me?url=suredsu" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M8 8H16"/><path d="M8 12H16"/><path d="M8 16H12"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">SUREDSU</span>
                                <span class="service-card__desc">Sistema Único de Registro de Educación Superior</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card" href="http://10.10.10.10:8000/me?url=imss" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 21C12 21 4 15.5 4 9.5C4 6.5 6.5 4.5 9 4.5C10.5 4.5 11.5 5.2 12 6C12.5 5.2 13.5 4.5 15 4.5C17.5 4.5 20 6.5 20 9.5C20 15.5 12 21 12 21Z"/><path d="M9 11H15"/><path d="M12 8V14"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">Carátula IMSS</span>
                                <span class="service-card__desc">Genera tu carátula para servicios médicos</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card" href="https://app.cecyteg.edu.mx/CampusCECyTEG" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="5" width="18" height="14" rx="2"/><circle cx="8" cy="11" r="2"/><path d="M5 16C5 14.5 6.5 13.5 8 13.5C9.5 13.5 11 14.5 11 16"/><path d="M14 10H18"/><path d="M14 13H18"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">Credencial Digital</span>
                                <span class="service-card__desc">Visualiza tu credencial institucional</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        </div>
                    </section>
                    <section class="services__group">
                        <h3>Herramientas y acceso institucional</h3>
                        <div class="services__grid">
                        <a class="service-card" href="http://10.10.10.10:8000/busqueda" target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="11" cy="11" r="7"/><path d="M21 21L16.5 16.5"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">Buscar datos</span>
                                <span class="service-card__desc">Consulta información y registros</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        <a class="service-card" href="https://encuestas.sh.guanajuato.gob.mx/#/enc/..." target="_blank" rel="noopener">
                            <span class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M8 12H16"/><path d="M8 16H13"/><path d="M17 3L21 7L11 17H7V13L17 3Z"/></svg></span>
                            <span class="service-card__body">
                                <span class="service-card__title">Encuesta Percepción Ciudadana</span>
                                <span class="service-card__desc">Tu opinión ayuda a mejorar</span>
                            </span>
                            <span class="service-card__arrow" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></span><span class="sr-only">Abre en otra pestaña</span>
                        </a>
                        </div>
                    </section>
                </div>

                <aside class="sidebar" id="avisos" tabindex="-1">
                    <!-- @include('partials.agenda') -->
                    <div class="help-card"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="10"/><path d="M9.1 9a3 3 0 0 1 5.8 1c0 2-3 3-3 3m.1 4h.01"/></svg>
                        <h3>¿Necesitas orientación?</h3>
                        <p>Encuentra respuestas sobre calificaciones, credenciales y acceso al portal.</p>
                        <a href="mailto:juangallardo@cecyteg.edu.mx">Contactar al Centro de Cómputo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 12h14m-6-6 6 6-6 6"/></svg></a>
                    </div>
                </aside>
            </div>
        </section>

        <section class="schedules-section container" id="horarios" tabindex="-1" aria-labelledby="schedules-title">
            <div class="section-head">
                <p class="section-eyebrow">Tu tiempo, bien organizado</p>
                <h2 id="schedules-title">Horarios por grupo y docente</h2>
                <p>Encuentra tu grupo o busca a tu docente para consultar su horario.</p>
            </div>
            <div class="schedule-browser">
                <div class="schedule-filters" role="group" aria-label="Tipo de horario">
                    <button class="schedule-filter" type="button" data-schedule-filter="grupos" aria-pressed="true" aria-controls="scheduleResults">Grupos <span class="schedule-filter__count" data-schedule-count="grupos">20</span></button>
                    <button class="schedule-filter" type="button" data-schedule-filter="docentes" aria-pressed="false" aria-controls="scheduleResults">Docentes <span class="schedule-filter__count" data-schedule-count="docentes">0</span></button>
                </div>
                <div class="schedule-search" role="search" aria-label="Buscar horarios">
                    <label class="schedule-search__label" id="scheduleSearchLabel" for="scheduleSearch">Buscar por grupo</label>
                    <div class="schedule-search__field">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true" focusable="false"><circle cx="10.5" cy="10.5" r="6.5"/><path d="m16 16 5 5"/></svg>
                        <input type="search" id="scheduleSearch" placeholder="Ej. 2901" inputmode="numeric" autocomplete="off" spellcheck="false" aria-describedby="scheduleSearchHint" aria-controls="scheduleResults">
                        <button class="schedule-search__clear" id="scheduleSearchClear" type="button" aria-label="Limpiar búsqueda" hidden><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true" focusable="false"><path d="m6 6 12 12M18 6 6 18"/></svg></button>
                    </div>
                    <p class="schedule-search__hint" id="scheduleSearchHint">Escribe el número completo o una parte para encontrar tu grupo.</p>
                </div>
            </div>
            <p class="schedule-results__summary" id="scheduleResultsSummary" role="status" aria-atomic="true"></p>
            <div class="schedules-grid" id="scheduleResults"></div>
            <div class="schedule-empty" id="scheduleEmpty" hidden>
                <h3 id="scheduleEmptyTitle">No encontramos coincidencias</h3>
                <p id="scheduleEmptyDescription">Prueba con otro grupo o limpia la búsqueda.</p>
            </div>
            <template id="scheduleCardTemplate">
                <article class="schedule-card" data-pdf="">
                    <div class="schedule-card__heading">
                        <span class="schedule-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" focusable="false"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18M8 15h2m4 0h2"/></svg>
                        </span>
                        <div>
                            <p class="schedule-card__eyebrow" data-schedule-eyebrow></p>
                            <h3 data-schedule-title></h3>
                        </div>
                    </div>
                    <p class="schedule-card__status"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><span>Horario por publicar</span></p>
                    <div class="schedule-card__documents" hidden>
                        <div class="schedule-card__actions">
                            <a class="btn btn--primary" data-pdf-open target="_blank" rel="noopener noreferrer">Abrir PDF <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M7 7h10v10M7 17 17 7"/></svg></a>
                            <a class="btn btn--ghost" data-pdf-download download>Descargar <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M12 3v12m-4-4 4 4 4-4M4 17v4h16v-4"/></svg></a>
                        </div>
                        <details class="schedule-card__preview">
                            <summary>Vista previa <span class="sr-only" data-schedule-context></span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="m6 9 6 6 6-6"/></svg></summary>
                            <object class="schedule-card__pdf" type="application/pdf">
                                <p class="schedule-card__fallback">Si tu navegador no muestra el documento, puedes <a data-pdf-open target="_blank" rel="noopener noreferrer">abrir el PDF en otra pestaña</a>.</p>
                            </object>
                        </details>
                    </div>
                </article>
            </template>
        </section>

        
   
    </main>

    <footer class="site-footer">
        <div class="site-footer__inner container">
            <div class="site-footer__brand">
                <img class="site-footer__logo" src="{{  asset('images/logo.png')}}" alt="CECyTEG Guanajuato" width="2837" height="854" loading="lazy" decoding="async">
                <span class="site-footer__title">Plantel Pénjamo</span>
                <span class="site-footer__sub">Comunidad estudiantil · Guanajuato</span>
            </div>
            <nav class="site-footer__links" aria-label="Información institucional">
                <a href="">Colegio de Estudios Científicos y Tecnológicos del estado de Guanajuato</a>
            </nav>
            <div class="site-footer__social">
                <a href="#" aria-label="Facebook" class="social-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M15 8H17V5H15C13.34 5 12 6.34 12 8V10H10V13H12V19H15V13H17L18 10H15V8Z"/></svg>
                </a>
                <a href="#" aria-label="Instagram" class="social-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="4" y="4" width="16" height="16" rx="4"/><circle cx="12" cy="12" r="3.5"/><circle cx="16.5" cy="7.5" r="0.8" fill="currentColor"/></svg>
                </a>
                <a href="#" aria-label="X" class="social-btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><path d="M5 5L19 19"/><path d="M19 5L5 19"/></svg>
                </a>
            </div>
        </div>
        <div class="creator-signature container">
            <div class="signature-line">
                <p class="signature-powered">Powered by</p>
                <div class="signature-makers">
                    <figure class="signature-person">
                        <div class="signature-visual">
                            <span class="signature-photo"><span class="signature-photo__crop"><img src="{{ asset('images/Angel.webp') }}" alt="Retrato de Angel Escamilla" width="896" height="1600" loading="lazy" decoding="async"></span></span>
                        </div>
                        <figcaption><strong>Angel Escamilla</strong><span class="signature-role">Frontend</span></figcaption>
                    </figure>
                    <figure class="signature-person signature-person--backend">
                        <div class="signature-visual signature-logo"><img src="{{ asset('images/Juanjosoft.png') }}" alt="juanjosoft" width="1254" height="189" loading="lazy" decoding="async"></div>
                        <figcaption><span class="signature-role">Backend</span></figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </footer>
    </div>

<script>
        document.addEventListener('DOMContentLoaded', () => {
            const root = document.documentElement;
            const themeButton = document.getElementById('themeSwitch');
            const header = document.getElementById('topbar');
            const menuButton = document.getElementById('hamburgerBtn');
            const nav = document.getElementById('mainNav');
            const backToTop = document.getElementById('backToTop');
            const portal = document.getElementById('portalContent');
            const mobile = window.matchMedia('(max-width: 900px)');
            const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
            const navLinks = [...nav.querySelectorAll('.nav__link')];
            const sections = ['inicio', 'servicios', 'avisos', 'horarios'].map(id => document.getElementById(id)).filter(Boolean);
            const anchorSections = [...sections, document.getElementById('examenes')].filter(Boolean);
            let selectedSection = null;
            let framePending = false;
            let viewportWidth = window.innerWidth;
            let anchorIsMoving = false;
            let scrollSettleTimer;

            function setTheme(theme) {
                root.dataset.theme = theme;
                themeButton.setAttribute('aria-pressed', String(theme === 'dark'));
                themeButton.dataset.tooltip = theme === 'dark' ? 'Cambiar a modo claro' : 'Cambiar a modo oscuro';
            }
            try { setTheme(localStorage.getItem('theme') === 'dark' ? 'dark' : 'light'); }
            catch { setTheme('light'); }
            themeButton.addEventListener('click', () => {
                const theme = root.dataset.theme === 'dark' ? 'light' : 'dark';
                setTheme(theme);
                try { localStorage.setItem('theme', theme); } catch {}
            });


            const scheduleCatalog = {
                grupos: [
                    { grupo: '2901', pdf: @json(asset('horarios_grupos/2901.pdf')) },
                    { grupo: '2902', pdf: @json(asset('horarios_grupos/2902.pdf')) },
                    { grupo: '2903', pdf: @json(asset('horarios_grupos/2903.pdf')) },
                    { grupo: '2904', pdf: @json(asset('horarios_grupos/2904.pdf')) },
                    { grupo: '2905', pdf: @json(asset('horarios_grupos/2905.pdf')) },
                    { grupo: '2906', pdf: @json(asset('horarios_grupos/2906.pdf')) },
                    { grupo: '3001', pdf: @json(asset('horarios_grupos/3001.pdf')) },
                    { grupo: '3002', pdf: @json(asset('horarios_grupos/3002.pdf')) },
                    { grupo: '3003', pdf: @json(asset('horarios_grupos/3003.pdf')) },
                    { grupo: '3004', pdf: @json(asset('horarios_grupos/3004.pdf')) },
                    { grupo: '3005', pdf: @json(asset('horarios_grupos/3005.pdf')) },
                    { grupo: '3006', pdf: @json(asset('horarios_grupos/3006.pdf')) },
                    { grupo: '3101', pdf: @json(asset('horarios_grupos/3101.pdf')) },
                    { grupo: '3102', pdf: @json(asset('horarios_grupos/3102.pdf')) },
                    { grupo: '3103', pdf: @json(asset('horarios_grupos/3103.pdf')) },
                    { grupo: '3104', pdf: @json(asset('horarios_grupos/3104.pdf')) },
                    { grupo: '3105', pdf: @json(asset('horarios_grupos/3105.pdf')) },
                    { grupo: '3106', pdf: @json(asset('horarios_grupos/3106.pdf')) },
                ],
                docentes: [
                    { nombre: 'Angélica Gutiérrez Morales', pdf: @json(asset('horarios_docentes/ANGELICA.pdf')) },
                    { nombre: 'Blanca Rosa Troncoso Domínguez', pdf: @json(asset('horarios_docentes/BLANCA.pdf')) }, // 02
                    { nombre: 'Cristina Guerrero Rodríguez', pdf: @json(asset('horarios_docentes/CRISTINA.pdf')) }, // 03
                    { nombre: 'David Zaragoza Torres', pdf: @json(asset('horarios_docentes/DAVID.pdf')) }, // 04
                    { nombre: 'Héctor Mejía Martínez', pdf: @json(asset('horarios_docentes/HECTOR.pdf')) }, // 05
                    { nombre: 'Hortensia Espitia Rodríguez', pdf: @json(asset('horarios_docentes/HORTENSIA.pdf')) }, // 06
                    { nombre: 'Jaime Hernández Calderón', pdf: @json(asset('horarios_docentes/JAIME.pdf')) }, // 07
                    { nombre: 'José Francisco González Alvarado', pdf: @json(asset('horarios_docentes/JOSE.pdf')) }, // 08
                    { nombre: 'José Luis Luevanos Barragán', pdf: @json(asset('horarios_docentes/JOSE_LUIS.pdf')) }, // 09
                    { nombre: 'Julia Elena Nuñes Soto', pdf: @json(asset('horarios_docentes/JULIA.pdf')) }, // 10
                    { nombre: 'Octavio Ramírez Medel', pdf: @json(asset('horarios_docentes/OCTAVIO.pdf')) }, // 11
                    { nombre: 'Reynaldo Negrete Soto', pdf: @json(asset('horarios_docentes/REYNALDO.pdf')) }, // 12
                    { nombre: 'Roberto Baltazar Vázquez', pdf: @json(asset('horarios_docentes/ROBERTO.pdf')) }, // 13
                    { nombre: 'Salvador Cabrera Vázquez', pdf: @json(asset('horarios_docentes/SALVADOR.pdf')) }, // 14
                    { nombre: 'Victor Manuel Zapien Ceno', pdf: @json(asset('horarios_docentes/VICTOR.pdf')) },  // 15
                    { nombre: 'Norberto Zavala García', pdf: @json(asset('horarios_docentes/NORBERTO.pdf')) }, // 16
                    { nombre: 'Jonhy Walther Salinas Montejano', pdf: @json(asset('horarios_docentes/JHONY.pdf')) }, // 17
                    { nombre: 'Xochitl Yesenia Rangel Segundo', pdf: @json(asset('horarios_docentes/XOCHI.pdf')) }  // 18
                ]
            };

            function normalizeScheduleSearch(value) {
                return value.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase().trim().replace(/\s+/g, ' ');
            }

            function prepareScheduleBrowser() {
                const results = document.getElementById('scheduleResults');
                const template = document.getElementById('scheduleCardTemplate');
                const search = document.getElementById('scheduleSearch');
                const clear = document.getElementById('scheduleSearchClear');
                const label = document.getElementById('scheduleSearchLabel');
                const hint = document.getElementById('scheduleSearchHint');
                const summary = document.getElementById('scheduleResultsSummary');
                const empty = document.getElementById('scheduleEmpty');
                const emptyTitle = document.getElementById('scheduleEmptyTitle');
                const emptyDescription = document.getElementById('scheduleEmptyDescription');
                const filters = [...document.querySelectorAll('[data-schedule-filter]')];
                let activeType = 'grupos';

                const entries = [
                    ...scheduleCatalog.grupos.map(item => ({ ...item, type: 'grupos', title: 'Grupo ' + item.grupo, context: 'del grupo ' + item.grupo })),
                    ...scheduleCatalog.docentes.filter(item => item.nombre.trim()).sort((a, b) => a.nombre.localeCompare(b.nombre, 'es')).map(item => ({ ...item, type: 'docentes', title: item.nombre.trim(), context: 'de ' + item.nombre.trim() }))
                ];
                const cards = entries.map((entry, index) => {
                    const card = template.content.firstElementChild.cloneNode(true);
                    card.hidden = true;
                    const title = card.querySelector('[data-schedule-title]');
                    title.id = 'schedule-title-' + index;
                    title.textContent = entry.title;
                    card.setAttribute('aria-labelledby', title.id);
                    card.dataset.scheduleType = entry.type;
                    card.dataset.search = normalizeScheduleSearch(entry.title);
                    card.dataset.pdf = entry.pdf.trim();
                    card.querySelector('[data-schedule-eyebrow]').textContent = entry.type === 'grupos' ? 'Horario de clases' : 'Docente';
                    card.querySelector('[data-schedule-context]').textContent = 'del horario ' + entry.context;
                    card.querySelector('.schedule-card__pdf').setAttribute('aria-label', 'Horario ' + entry.context + ' en PDF');
                    card.querySelectorAll('[data-pdf-open]').forEach(link => link.setAttribute('aria-label', 'Abrir horario ' + entry.context + ' en PDF en otra pestaña'));
                    card.querySelector('[data-pdf-download]').setAttribute('aria-label', 'Descargar horario ' + entry.context);
                    results.append(card);
                    return card;
                });
                prepareScheduleDocuments();
                document.querySelectorAll('[data-schedule-count]').forEach(count => {
                    count.textContent = String(cards.filter(card => card.dataset.scheduleType === count.dataset.scheduleCount).length);
                });

                function filterSchedules() {
                    const query = normalizeScheduleSearch(search.value);
                    const words = query ? query.split(' ') : [];
                    const category = cards.filter(card => card.dataset.scheduleType === activeType);
                    const visible = query ? category.filter(card => words.every(word => card.dataset.search.includes(word))) : [];
                    const visibleSet = new Set(visible);
                    cards.forEach(card => {
                        card.hidden = !visibleSet.has(card);
                        if (card.hidden) {
                            card.querySelector('.schedule-card__preview').open = false;
                            card.classList.remove('schedule-card--expanded');
                        }
                    });
                    clear.hidden = search.value.length === 0;
                    if (!query) {
                        summary.textContent = activeType === 'grupos' ? 'Escribe tu grupo para consultar su horario.' : 'Escribe el nombre o apellido del docente para consultar su horario.';
                        empty.hidden = true;
                        return;
                    }
                    const kind = activeType === 'grupos' ? 'grupos' : 'docentes';
                    const published = visible.filter(card => card.dataset.pdfReady === 'true').length;
                    summary.textContent = visible.length + ' de ' + category.length + ' ' + kind + ' · ' + published + ' con PDF';
                    empty.hidden = visible.length > 0;
                    if (activeType === 'docentes' && category.length === 0) {
                        summary.textContent = 'Los horarios de docentes se publicarán próximamente.';
                        emptyTitle.textContent = 'Horarios de docentes por publicar';
                        emptyDescription.textContent = 'Aquí podrás buscar a cada docente por su nombre cuando se publiquen los horarios.';
                    } else {
                        emptyTitle.textContent = 'No encontramos coincidencias';
                        emptyDescription.textContent = activeType === 'grupos' ? 'Prueba con otro número de grupo o limpia la búsqueda.' : 'Prueba con otro nombre o apellido, o limpia la búsqueda.';
                    }
                }

                search.addEventListener('input', filterSchedules);
                search.addEventListener('search', filterSchedules);
                clear.addEventListener('click', () => {
                    search.value = '';
                    filterSchedules();
                    search.focus({ preventScroll: true });
                });
                filters.forEach(button => button.addEventListener('click', () => {
                    const nextType = button.dataset.scheduleFilter;
                    if (nextType === activeType) return;
                    activeType = nextType;
                    search.value = '';
                    const groups = activeType === 'grupos';
                    label.textContent = groups ? 'Buscar por grupo' : 'Buscar por nombre de docente';
                    search.placeholder = groups ? 'Ej. 2901' : 'Escribe un nombre o apellido';
                    search.inputMode = groups ? 'numeric' : 'text';
                    hint.textContent = groups ? 'Escribe el número completo o una parte para encontrar tu grupo.' : 'Puedes buscar por nombre o apellidos, con o sin acentos.';
                    filters.forEach(filter => filter.setAttribute('aria-pressed', String(filter === button)));
                    filterSchedules();
                }));
                filterSchedules();
            }

            function prepareScheduleDocuments() {
                document.querySelectorAll('.schedule-card[data-pdf]').forEach(card => {
                    const source = card.dataset.pdf.trim();
                    if (!source) return;
                    let pdfUrl;
                    try { pdfUrl = new URL(source, document.baseURI); }
                    catch { return; }
                    if (!['http:', 'https:', 'file:'].includes(pdfUrl.protocol)) return;

                    const documents = card.querySelector('.schedule-card__documents');
                    const preview = card.querySelector('.schedule-card__preview');
                    const pdf = card.querySelector('.schedule-card__pdf');
                    const status = card.querySelector('.schedule-card__status span');
                    card.querySelectorAll('[data-pdf-open], [data-pdf-download]').forEach(link => {
                        link.href = pdfUrl.href;
                    });
                    card.dataset.pdfReady = 'true';
                    if (documents) documents.hidden = false;
                    if (status) status.textContent = 'Horario en PDF';
                    if (!preview || !pdf) return;
                    let previewLoaded = false;
                    function updatePreview() {
                        card.classList.toggle('schedule-card--expanded', preview.open);
                        if (preview.open && !previewLoaded) {
                            pdf.data = pdfUrl.href;
                            previewLoaded = true;
                        }
                    }
                    preview.addEventListener('toggle', updatePreview);
                    if (preview.open) updatePreview();
                });
            }
            prepareScheduleBrowser();

            function prepareSectionReveals() {
                const targets = [...portal.querySelectorAll('.hero__copy, .hero__visual, .section-head, .service-card, .notice-panel, .help-card, .schedule-card, .support-card, .faq-section, .location-card, .creator-signature, .exams-section')];
                targets.forEach((target, index) => {
                    target.dataset.reveal = '';
                    target.style.setProperty('--reveal-delay', target.classList.contains('service-card') ? `${index % 3 * 60}ms` : '0ms');
                });
                if (!('IntersectionObserver' in window)) return;
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting && !portal.hidden) {
                            entry.target.classList.add('reveal-in');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: .08 });
                targets.forEach(target => observer.observe(target));
            }

            function closeMenu() {
                nav.classList.remove('is-open');
                menuButton.setAttribute('aria-expanded', 'false');
                menuButton.setAttribute('aria-label', 'Abrir menú');
            }
            menuButton.addEventListener('click', () => {
                const open = nav.classList.toggle('is-open');
                menuButton.setAttribute('aria-expanded', String(open));
                menuButton.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
                if (open) navLinks[0].focus();
            });
            document.addEventListener('keydown', event => {
                if (event.key === 'Escape' && nav.classList.contains('is-open')) {
                    closeMenu();
                    menuButton.focus();
                }
            });
            document.addEventListener('click', event => {
                if (!nav.contains(event.target) && !menuButton.contains(event.target)) closeMenu();
                const link = event.target.closest('a[href^="#"]');
                const id = link?.getAttribute('href').slice(1);
                if (anchorSections.some(section => section.id === id)) {
                    selectSection(id);
                    closeMenu();
                    document.getElementById(id).focus({ preventScroll: true });
                }
            });
            nav.addEventListener('focusout', event => {
                if (event.relatedTarget && !nav.contains(event.relatedTarget) && event.relatedTarget !== menuButton) closeMenu();
            });
            mobile.addEventListener('change', () => { closeMenu(); queueUpdate(); });

            function setActive(id) {
                navLinks.forEach(link => {
                    const active = link.getAttribute('href') === '#' + id;
                    link.classList.toggle('is-active', active);
                    if (active) link.setAttribute('aria-current', 'location');
                    else link.removeAttribute('aria-current');
                });
            }
            function settleAnchorScroll() {
                clearTimeout(scrollSettleTimer);
                scrollSettleTimer = setTimeout(() => { anchorIsMoving = false; }, 200);
            }
            function selectSection(id) {
                selectedSection = id;
                anchorIsMoving = true;
                settleAnchorScroll();
                setActive(id);
            }
            function updateScroll() {
                framePending = false;
                const headerHeight = header.getBoundingClientRect().height;
                header.classList.toggle('scrolled', window.scrollY > 8);
                backToTop.classList.toggle('visible', window.scrollY > 400);
                if (selectedSection) { setActive(selectedSection); return; }
                const offset = headerHeight + 40;
                let active = sections[0].id;
                sections.forEach(section => {
                    if (section.id === 'avisos' && window.innerWidth > 900) return;
                    if (section.getBoundingClientRect().top <= offset) active = section.id;
                });
                if (window.scrollY > 0 && window.innerHeight + window.scrollY >= root.scrollHeight - 4) active = sections[sections.length - 1].id;
                setActive(active);
            }
            function queueUpdate() {
                if (!framePending) { framePending = true; requestAnimationFrame(updateScroll); }
            }
            function resumeScrollTracking() {
                selectedSection = null;
                anchorIsMoving = false;
                clearTimeout(scrollSettleTimer);
                queueUpdate();
            }
            window.addEventListener('wheel', resumeScrollTracking, { passive: true });
            window.addEventListener('touchmove', resumeScrollTracking, { passive: true });
            document.addEventListener('keydown', event => {
                if (['ArrowDown', 'ArrowUp', 'PageDown', 'PageUp', 'Home', 'End', ' '].includes(event.key)) resumeScrollTracking();
            });
            window.addEventListener('scroll', () => {
                if (!anchorIsMoving) selectedSection = null;
                else settleAnchorScroll();
                queueUpdate();
            }, { passive: true });
            window.addEventListener('resize', () => {
                const width = window.innerWidth;
                if (width !== viewportWidth) {
                    const restoreMenuFocus = width > 650 && width <= 900 && nav.contains(document.activeElement);
                    closeMenu();
                    if (restoreMenuFocus) menuButton.focus({ preventScroll: true });
                    viewportWidth = width;
                }
                resumeScrollTracking();
            });
            window.addEventListener('hashchange', () => {
                const id = window.location.hash.slice(1);
                const target = id ? document.getElementById(id) : null;
                if (anchorSections.some(section => section.id === id)) {
                    selectSection(id);
                    target?.focus({ preventScroll: true });
                }
                else resumeScrollTracking();
                queueUpdate();
            });
            backToTop.addEventListener('click', () => {
                selectSection('inicio');
                const start = document.getElementById('inicio');
                start.scrollIntoView({ block: 'start', behavior: reducedMotion.matches ? 'instant' : 'smooth' });
                start.focus({ preventScroll: true });
            });
            const initialId = window.location.hash.slice(1);
            if (anchorSections.some(section => section.id === initialId)) selectSection(initialId);
            updateScroll();
            prepareSectionReveals();
        });
    </script>
</body>
</html>