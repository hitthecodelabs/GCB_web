<!-- ============================================================================== -->
<!-- INICIO DE LA ESTRUCTURA DEL HEADER ADAPTADA PARA LARAVEL -->
<!-- ============================================================================== -->
<header class="site-header headroom l-header">
    <a href="#main" class="skip-link">Skip to main content</a>
    <div class="skip-link-backdrop"></div>

    <div class="site-header__elements l-header__elements">
        <div class="site-header__utility-bar">
          <div class="container-fluid">
            <div class="site-header__utility-content">
              <nav aria-label="secondary" class="site-header__utility-nav">
                <ul>
                  <li><a href="{{ route('home') }}">Home</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="{{ url('/#') }}">News &amp; Updates</a></li>
                </ul>
              </nav>
              {{-- Eliminamos el bloque con el Global Collaboration ID --}}
            </div>
          </div>
        </div>
        
        <!-- Barra Principal -->
        <div class="site-header__main-bar">
            <div class="container-fluid">
                <div class="site-header__main-inner">
                    
                    <!-- 1) Logo a la izquierda -->
                    <div class="site-header__brand">
                      <a class="site-header__logo" href="{{ route('home') }}">
                        <img src="{{ asset('gcb_theme/images/logo_cgc.svg') }}" alt="Global Change Bank Logo" width="153" height="40">
                      </a>
                    </div>
                    
                    <!-- 2) Navegación (centro) -->
                    <div class="site-header__navigation">
                      <div class="site-header__off-canvas l-off-canvas slide-over-transition" id="offCanvasArea" tabindex="-1" aria-hidden="true">
                        <div class="l-off-canvas__helper">
                            
                        <!-- Header del panel (logo + botón cerrar/hamburguesa interno) -->
                        <div class="off-canvas-header">
                          <a class="site-header__logo" href="{{ route('home') }}">
                            <img src="{{ asset('gcb_theme/images/logo_cgc.svg') }}" alt="Global Change Bank Logo" width="153" height="40">
                            <span class="visually-hidden">Global Change Bank</span>
                          </a>
                        
                          <!-- Este botón cierra el panel (también puede abrir si estuviera cerrado) -->
                          <button
                            class="toggle-hamburger js-offcanvas-toggle off-canvas-close-btn"
                            type="button"
                            aria-label="Cerrar menú"
                            aria-controls="offCanvasArea">
                            <span class="toggle-hamburger__wrapper" aria-hidden="true">
                              <span class="toggle-hamburger__bun"></span>
                              <span class="toggle-hamburger__bun"></span>
                              <span class="toggle-hamburger__bun"></span>
                            </span>
                            <span class="visually-hidden">Close</span>
                          </button>
                        </div>
                            
                          <nav class="main-nav" aria-label="primary">
                            <a class="site-header__logo" href="{{ route('home') }}">
                              <img src="{{ asset('gcb_theme/images/logo_cgc.svg') }}" alt="Global Change Bank Logo" width="153" height="40">
                              <span class="visually-hidden">Global Change Bank</span>
                            </a>
                    
                            <div class="site-header__controls-wrap">
                              <!-- Menu principal -->
                              <ul class="mln__list">
                                <li><a href="{{ url('/#') }}">Save</a></li>
                                <li><a href="{{ url('/#') }}">Spend</a></li>
                                <li><a href="{{ url('/#') }}">Borrow</a></li>
                                <li><a href="{{ url('/#') }}">Transfer</a></li>
                                <li><a href="{{ url('/#') }}">Learn</a></li>
                              </ul>
                    
                              <!-- Controles Desktop (derecha) -->
                              <ul class="site-header__desktop-side-controls">
                                <li>
                                  <div class="join-toggle-wrap">
                                    @guest('web')
                                      <a class="btn btn-join" href="{{ route('register') }}"><span>Join</span></a>
                                    @endguest
                                  </div>
                                </li>
                                <li>
                                  <div class="site-header__sign-in-toggle-desktop">
                                    @auth('web')
                                      <a class="btn btn-primary" href="{{ route('user.dashboard') }}"><span>Dashboard</span></a>
                                    @else
                                      <a class="btn btn-primary" href="{{ route('login') }}"><span>Log In</span></a>
                                    @endauth
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </nav>
                        </div>
                      </div>
                    </div>
                    
                    <!-- 3) Botón hamburguesa (móvil) -->
                    <button
                      class="toggle-hamburger js-offcanvas-toggle"
                      type="button"
                      aria-expanded="false"
                      aria-controls="offCanvasArea"
                      aria-label="Abrir menú">
                      <span class="toggle-hamburger__wrapper" aria-hidden="true">
                        <span class="toggle-hamburger__bun"></span>
                        <span class="toggle-hamburger__bun"></span>
                        <span class="toggle-hamburger__bun"></span>
                      </span>
                      <span class="toggle-hamburger__text">Menu</span>
                    </button>
                    
                    <!-- 4) Controles móviles (Join + Log In) -->
                    <ul class="site-header__mobile-side-controls">
                      <li>
                        <div class="join-toggle-wrap">
                          @guest('web')
                            <a class="btn btn-sign-in" href="{{ route('register') }}"><span>Join</span></a>
                          @endguest
                        </div>
                      </li>
                      <li>
                        <div class="site-header__sign-in-toggle-mobile">
                          <div class="sign-in-toggle-wrap">
                            @auth('web')
                              <a class="btn btn-sign-in" href="{{ route('user.dashboard') }}"><span>Dashboard</span></a>
                            @else
                              <a class="btn btn-sign-in" href="{{ route('login') }}"><span>Log In</span></a>
                            @endauth
                          </div>
                        </div>
                      </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- El contenedor del buscador puede permanecer igual por ahora -->
        
    </div>
</header>
<div class="offcanvas-overlay" id="offCanvasOverlay"></div>
<!-- ============================================================================== -->
<!-- FIN DE LA ESTRUCTURA DEL HEADER -->
<!-- ============================================================================== -->
