# Eventos de octubre y Día de Muertos · 2026

Cada tema vive en una rama independiente, creada desde `origin/master` (`787a6cb`) después de actualizar las referencias remotas. La rama de flores amarillas se conserva sin cambios.

| Fecha | Tema | Rama |
| --- | --- | --- |
| 12 de octubre | Día de la Nación Pluricultural | `eventos/nacion-pluricultural-12-octubre-2026` |
| 19 de octubre | Octubre Rosa: concientización sobre el cáncer de mama | `eventos/octubre-rosa-19-octubre-2026` |
| 31 de octubre | Halloween | `eventos/halloween-31-octubre-2026` |
| 1 y 2 de noviembre | Día de Muertos; diseño preparado para finales de octubre | `eventos/dia-de-muertos-2026` |

Halloween se presenta como una temática de temporada. Esta lista no es un calendario de días de descanso ni anuncia actividades organizadas por el plantel.

## Ver un diseño localmente

En `C:\Users\Angel Escamilla\Desktop\diezpuntodiez`, revisa primero `git status`. Guarda cualquier trabajo pendiente antes de cambiar de rama.

```powershell
git switch eventos/halloween-31-octubre-2026
php artisan view:clear
php artisan serve
```

Abre `http://127.0.0.1:8000/` y actualiza con **Ctrl + F5**. Si el servidor ya está iniciado, no vuelvas a ejecutar `php artisan serve`.

Para ver otro tema, sustituye el nombre de la rama por el de la tabla. Las ramas contienen commits locales; publicarlas en el remoto requiere un push posterior.

## Activación y mantenimiento

Los diseños **no se activan automáticamente por fecha**. Cada rama muestra su propio tema al abrir la página principal. Para producción, revisa e integra la variante elegida mediante el flujo acordado con el responsable del proyecto. No mezcles las cuatro ramas como si fueran temas simultáneos: sus referencias de temporada en `principal.blade.php` son alternativas.

Cada tema tiene un parcial en `resources/views/partials/eventos/`, una hoja de estilos en `public/css/eventos/` y, cuando hay interacción, un script en `public/js/eventos/`. Octubre Rosa usa un acordeón HTML nativo y no necesita JavaScript adicional.

`principal.blade.php` solo conecta la temporada, el parcial y sus recursos. Las rutas, controladores, formularios, catálogo de horarios y enlaces institucionales se mantienen desde la base compartida. Los acentos estacionales conservan el logo, el hero azul y el footer institucionales.

Al actualizar un tema, comprueba modo claro/oscuro, anchos de 320, 390 y 1440 px, teclado, movimiento reducido y ausencia de desplazamiento horizontal. La interacción de Halloween enciende una calabaza; la de Día de Muertos enciende las velas. No hay audio, destellos rápidos ni formularios de datos personales en los eventos.

## Referencias de fechas y contenido

- [Día de la Nación Pluricultural, 12 de octubre — Gobierno de México](https://www.gob.mx/cjef/articulos/dia-de-la-nacion-pluricultural-410315).
- [19 de octubre, concientización sobre el cáncer de mama — IMSS](https://www.gob.mx/imss/articulos/dia-mundial-de-la-lucha-contra-el-cancer-de-mama-179061?idiom=es).
- [Halloween, 31 de octubre — UNAM](https://puedjs.unam.mx/revista_tlatelolco/dulce-como-la-muerte/).
- [Día de Muertos, 1 y 2 de noviembre — INAFED](https://www.gob.mx/inafed/es/articulos/dia-de-muertos-tradicion-mexicana-que-trasciende-en-el-tiempo).

Octubre Rosa ofrece información institucional y acompañamiento, sin consejos médicos personalizados. Día de Muertos mantiene su fecha de noviembre, aunque se prepare durante octubre.
