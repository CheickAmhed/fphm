
<aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="logo-placeholder">PHM</div>
                <span class="sidebar-title">Admin Panel</span>
            </div>
            
            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#dashboard" class="nav-link active" data-page="dashboard">
                            <i class="fas fa-th-large"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link" data-page="projects">
                            <i class="fas fa-project-diagram"></i>
                            <span class="nav-text">Projets</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#news" class="nav-link" data-page="news">
                            <i class="fas fa-newspaper"></i>
                            <span class="nav-text">Actualités</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#donations" class="nav-link" data-page="donations">
                            <i class="fas fa-heart"></i>
                            <span class="nav-text">Dons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#volunteers" class="nav-link" data-page="volunteers">
                            <i class="fas fa-hands-helping"></i>
                            <span class="nav-text">Bénévoles</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#gallery" class="nav-link" data-page="gallery">
                            <i class="fas fa-images"></i>
                            <span class="nav-text">Galerie</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#users" class="nav-link" data-page="users">
                            <i class="fas fa-users"></i>
                            <span class="nav-text">Utilisateurs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings" class="nav-link" data-page="settings">
                            <i class="fas fa-cog"></i>
                            <span class="nav-text">Paramètres</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="sidebar-footer">
                <div class="user-info">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-details">
                        <span class="user-name">Admin PHM</span>
                        <span class="user-role">Administrateur</span>
                    </div>
                </div>
                <button class="logout-btn" onclick="logout()">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-text">Déconnexion</span>
                </button>
            </div>
</aside>

<header class="main-header">
                <div class="header-left">
                    <button class="mobile-sidebar-toggle" id="mobile-sidebar-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title" id="page-title">Dashboard</h1>
                </div>
                
                <div class="header-right">
                    <div class="header-stats">
                        <div class="stat-item">
                            <i class="fas fa-eye"></i>
                            <span>1,234 visites aujourd'hui</span>
                        </div>
                    </div>
                    
                    <div class="header-actions">
                        <button class="header-btn" title="Notifications">
                            <i class="fas fa-bell"></i>
                            <span class="notification-badge">3</span>
                        </button>
                        
                        <div class="user-menu">
                            <button class="user-menu-toggle">
                                <div class="user-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="user-name">Admin</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="user-dropdown">
                                <a href="#profile"><i class="fas fa-user"></i> Profil</a>
                                <a href="#settings"><i class="fas fa-cog"></i> Paramètres</a>
                                <hr>
                                <a href="#" onclick="logout()"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                            </div>
                        </div>
                    </div>
                </div>
</header>