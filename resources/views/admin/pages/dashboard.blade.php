@extends('admin.layouts.app')

@section('content')
        <main class="main-content">
            <!-- Header -->
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

            <!-- Page Content -->
            <div class="page-content" id="page-content">
                <!-- Dashboard Content will be loaded here -->
            </div>
        </main>
@endsection