
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="logo">
                    <div class="logo-icon">
                        <img src="{{ asset('img/logo.png') }}" alt="PHM logo" class="logo-img">
                    </div>
                </a>

                <!-- Navigation Desktop -->
                <nav>
                    <ul class="nav">
                        <li><a href="{{ url('/') }}" class="nav-link @if(Request::segment(1) == '') active @endif">Accueil</a></li>
                        <li><a href="{{ url('/about') }}" class="nav-link @if(Request::segment(1) == 'about') active @endif">À propos</a></li>
                        <li><a href="{{ url('/projects') }}" class="nav-link @if(Request::segment(1) == 'projects') active @endif">Projets</a></li>
                        <li><a href="{{ url('/news') }}" class="nav-link @if(Request::segment(1) == 'news') active @endif">Actualités</a></li>
                        <li><a href="{{ url('/gallery') }}" class="nav-link @if(Request::segment(1) == 'gallery') active @endif">Galerie</a></li>
                        <li><a href="{{ url('/volunteer') }}" class="nav-link @if(Request::segment(1) == 'volunteer') active @endif">Nous rejoindre</a></li>
                        <li><a href="{{ url('/contact') }}" class="nav-link @if(Request::segment(1) == 'contact') active @endif">contact</a></li>
                    </ul>
                </nav>

                <!-- Actions Header -->
                <div class="header-actions">
                    <button class="btn btn-outline langue">
                        🌐 FR ▼
                    </button>
                    <a href="{{ url('/donate') }}" class="btn btn-primary don">
                        ❤️ Faire un don
                    </a>
                    <button class="mobile-menu-toggle">
                        <span style="font-size: 1.5rem;">☰</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="mobile-menu">
        <div class="mobile-menu-content">
            <button class="mobile-menu-close" aria-label="Fermer le menu">
                &times;
            </button>
                <a href="{{ url('/') }}" class="logo">
                    <div class="logo-icon">
                        <img src="{{ asset('img/logo.png') }}" alt="PHM logo" class="logo-img">
                    </div>
                </a>
            
            <nav>
                <ul class="mobile-nav">
                        <li><a href="{{ url('/') }}" class="nav-link @if(Request::segment(1) == '') active @endif">Accueil</a></li>
                        <li><a href="{{ url('/about') }}" class="nav-link @if(Request::segment(1) == 'about') active @endif">À propos</a></li>
                        <li><a href="{{ url('/projects') }}" class="nav-link @if(Request::segment(1) == 'projects') active @endif">Projets</a></li>
                        <li><a href="{{ url('/news') }}" class="nav-link @if(Request::segment(1) == 'news') active @endif">Actualités</a></li>
                        <li><a href="{{ url('/gallery') }}" class="nav-link @if(Request::segment(1) == 'gallery') active @endif">Galerie</a></li>
                        <li><a href="{{ url('/volunteer') }}" class="nav-link @if(Request::segment(1) == 'volunteer') active @endif">Nous rejoindre</a></li>
                        <li><a href="{{ url('/contact') }}" class="nav-link @if(Request::segment(1) == 'contact') active @endif">contact</a></li>
                </ul>
            </nav>
            
            <div style="display: flex; flex-direction: column; gap: 0.75rem; padding-top: 1.5rem; border-top: 1px solid var(--gray-200);">
                <button class="btn btn-outline" style="width: 100%;">
                    🌐 Changer de langue
                </button>
                <a href="{{ url('/donate') }}" class="btn btn-primary" style="width: 100%; text-decoration: none;">
                    ❤️ Faire un don
                </a>
            </div>
        </div>
    </div>