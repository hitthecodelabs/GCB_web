# Global Change Bank — Frontend (Re-construcción y Entrega Inicial)

Este repositorio documenta la **implementación del frontend** para **Global Change Bank (GCB)**. La interfaz se desarrolla a partir de una **guía de estilo y componentes definida por el cliente**, cuidando consistencia visual, accesibilidad y rendimiento.


## 🎯 Objetivo del proyecto
Entregar una **capa de presentación** moderna y mantenible para Global Change Bank, integrada a una base **Laravel** existente, con vistas en **Blade**, assets organizados, y un flujo claro de despliegue en hosting con **cPanel** (y/o SFTP/SSH).


## 🧭 Alcance
- **Incluye:** maquetación HTML5, estilos CSS, interacciones JS (vanilla), integración a Blade, organización de assets, responsividad, y checklists (SEO, A11y, performance).
- **No incluye:** lógica de negocio, autenticación, pasarelas de pago, integraciones con core bancario, copy final del cliente.


## 🧰 Stack tecnológico
- **Backend:** Laravel (preinstalado)
- **Frontend:** HTML5, CSS3, JavaScript (vanilla)
- **Build opcional:** Node.js + Vite (minificación/agrupación)
- **Entorno de despliegue:** cPanel / Administrador de Archivos (SFTP/SSH opcional)


## 📁 Estructura del repositorio (sugerida)
```
/frontend_gcb/
├── css/                 # Hojas de estilo del proyecto
├── js/                  # Scripts del proyecto (sin dependencias innecesarias)
├── images/              # Imágenes/íconos optimizados
├── reference_ui/        # Bocetos/maquetas/decisiones de diseño
└── docs/                # Capturas, notas y checklists
```
Ubicación de assets en hosting (Laravel productivo):
```
/public_html/assets/gcb_theme/
├── css/
├── js/
└── images/
```
Vistas Blade:
```
/home/<usuario>/public_html/resources/views/frontend/gcb/
```


## 🚀 Flujo de trabajo recomendado
1. **Definir tokens de diseño** (tipografías, colores, espaciado, grid).
2. **Crear layout base** y **parciales Blade** reutilizables.
3. **Maquetar componentes** (hero, cards, features, CTA, formularios).
4. **Integrar en rutas/controladores** sin afectar el backend existente.
5. **Pruebas** visuales/funcionales multi-dispositivo.
6. **Optimización** (imágenes, minificación, lazy-loading, SEO, A11y).


## 🗂️ Mapeo Blade (propuesto)
```
resources/views/frontend/gcb/
├── layout.blade.php
├── partials/
│   ├── _header.blade.php
│   ├── _hero.blade.php
│   ├── _features.blade.php
│   ├── _cta.blade.php
│   └── _footer.blade.php
├── home.blade.php
├── auth/
│   ├── login.blade.php
│   └── register.blade.php
└── pages/
    ├── products.blade.php
    ├── about.blade.php
    └── contact.blade.php
```
> Los nombres/rutas pueden ajustarse a la convención de la app.


## 📦 Despliegue en cPanel
1. Subir **assets** a: `/public_html/assets/gcb_theme/` (carpetas `css/`, `js/`, `images/`).
2. Integrar/modificar **vistas** en: `resources/views/frontend/gcb/`.
3. Durante la etapa de maquetación rápida, puede emplearse un **index temporal** en `public_html` (solo para pruebas visuales).
4. Una vez estable, **restaurar** el front controller de Laravel y enrutar a las vistas Blade finales.


## 🔁 Modo temporal (index de prueba) y restauración de Laravel
- **Temporal:** `public_html/index.php` puede apuntar a un HTML de prueba.
- **Restauración:** renombrar el index original de Laravel a `index.php` y eliminar/mover el index temporal a `/public_html/_legacy/`.
- Verificar que `.htaccess` (si aplica) enrute correctamente al front controller.


## 🧪 Estado actual (checklist)
- [x] Acceso y control del servidor.
- [ ] Home (desktop + mobile) con parciales reutilizables.
- [ ] Header/Footer integrados en Blade.
- [ ] Login/Registro.
- [ ] Optimización de imágenes (WebP cuando aplique).
- [ ] Checklist de accesibilidad y SEO.
- [ ] Minificación/agrupación de CSS/JS (Vite opcional).


## 🛠️ Comandos útiles (SSH opcional)
> *Solo si tu hosting permite SSH.*
```bash
# Estructura de assets
mkdir -p ~/public_html/assets/gcb_theme/{css,js,images}

# Subir archivos (ejemplo scp desde local)
# scp -i ~/.ssh/<key>.pem ./frontend_gcb/css/* user@host:~/public_html/assets/gcb_theme/css/

# Permisos
find ~/public_html/assets -type d -exec chmod 755 {} \;
find ~/public_html/assets -type f -exec chmod 644 {} \;
```


## 🎨 Convenciones
- **CSS:** BEM simplificado (`.bloque__elemento--modificador`), evitar `!important` salvo casos puntuales.
- **JS:** funciones pequeñas/puras; documentar responsabilidades; sin dependencias innecesarias.
- **Blade:** `@extends('layout')`, `@section('content')`, parciales en `partials/`.


## ♿ Accesibilidad (A11y)
- Texto alternativo en imágenes (`alt` significativo).
- Contraste adecuado (WCAG AA).
- Navegación por teclado y estilos `:focus` visibles.
- Semántica HTML apropiada (`<header>`, `<nav>`, `<main>`, `<footer>`).


## 🔎 SEO
- Títulos únicos por página (`<title>`).
- Metadescripciones y etiquetas `meta` relevantes.
- `lang="es"` (o el que corresponda) en `<html>`.
- Jerarquía H1/H2/H3 coherente.
- Sitemap/robots (si aplica con backend).


## ⚡ Performance
- Optimizar imágenes (WebP/JPEG progresivo).
- `loading="lazy"` para medios no críticos.
- CSS crítico mínimo inline; diferir el resto si es viable.
- Minificar/agrupación de CSS/JS (Vite).


## 🔐 Seguridad
- No versionar **secretos** ni **API keys**.
- Considerar cabeceras de seguridad (p. ej., `Content-Security-Policy`).
- Validar orígenes de librerías JS externas.


## 🧭 Roadmap sugerido
1. Cierre de Home (desktop/mobile).
2. Componentes reutilizables (cards, grids, testimonials, CTA).
3. Formularios (login/registro) y estados.
4. Accesibilidad/SEO/Performance.
5. Activación completa con Laravel (sin index temporal).


## 🗂️ Ramas y versionado
- `main`: estable/producción.
- `develop`: integración.
- `feat/<nombre>`: nuevas vistas/componentes.
- `fix/<nombre>`: correcciones.
Hacer PRs a `develop`, luego merge a `main` para releases.


## 📝 Changelog (plantilla)
```
## [1.0.0] - YYYY-MM-DD
### Added
- Home inicial con header/footer en parciales.

### Changed
- Tipografía, espaciado y breakpoints.

### Fixed
- Enlaces rotos de navegación.
```


## 📄 Licencia / Uso
Código de interfaz para **Global Change Bank**. El contenido visual/textual final es provisto por el cliente.


## 👤 Autor / Contacto
**Jean Paul Panchana Espinoza** — Hit the Code Labs  
Soporte y ajustes: abrir un **Issue** o contactar por el canal acordado.
