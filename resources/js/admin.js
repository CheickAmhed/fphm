// Moved from public/js/admin.js
// Admin Panel Core Functionality

import {
  MOCK_DATA,
  getMockData,
} from './mock-data.js';



class AdminPanel {
    constructor() {
        this.currentUser = null;
        this.currentPage = 'dashboard';
        this.isAuthenticated = false;
        this.sidebarCollapsed = false;
        this.isMobile = window.innerWidth <= 768;
        
        this.init();
    }
    
    init() {
        this.setupEventListeners();
        this.setupResponsive();
        this.showDashboard();
    }
    
    setupEventListeners() {
        // Login form
        const loginForm = document.getElementById('login-form');
        if (loginForm) {
            loginForm.addEventListener('submit', (e) => this.handleLogin(e));
        }
        
        // Sidebar toggle
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const mobileSidebarToggle = document.getElementById('mobile-sidebar-toggle');
        
        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', () => this.toggleSidebar());
        }
        
        if (mobileSidebarToggle) {
            mobileSidebarToggle.addEventListener('click', () => this.toggleMobileSidebar());
        }
        
        // Navigation links
        const navLinks = document.querySelectorAll('.nav-link[data-page]');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const page = link.dataset.page;
                this.navigateToPage(page);
            });
        });
        
        // Close mobile sidebar when clicking outside
        document.addEventListener('click', (e) => {
            const sidebar = document.getElementById('sidebar');
            const mobileSidebarToggle = document.getElementById('mobile-sidebar-toggle');
            
            if (this.isMobile && 
                sidebar.classList.contains('mobile-open') && 
                !sidebar.contains(e.target) && 
                !mobileSidebarToggle.contains(e.target)) {
                this.closeMobileSidebar();
            }
        });
        
        // Window resize
        window.addEventListener('resize', () => {
            this.handleResize();
        });
    }
    
    setupResponsive() {
        this.handleResize();
    }
    
    handleResize() {
        const wasOnMobile = this.isMobile;
        this.isMobile = window.innerWidth <= 768;
        
        if (wasOnMobile !== this.isMobile) {
            const sidebar = document.getElementById('sidebar');
            if (this.isMobile) {
                sidebar.classList.remove('collapsed');
                sidebar.classList.remove('mobile-open');
            } else {
                sidebar.classList.remove('mobile-open');
            }
        }
    }
    
    async handleLogin(e) {
        e.preventDefault();
        
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const rememberMe = document.getElementById('remember-me').checked;
        
        const loginBtn = e.target.querySelector('.login-btn');
        const originalText = loginBtn.innerHTML;
        
        // Show loading state
        loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Connexion...';
        loginBtn.disabled = true;
        
        try {
            // Simulate API call
            await this.simulateLogin(username, password);
            
            // Set authentication data
            this.isAuthenticated = true;
            this.currentUser = {
                username: username,
                name: 'Admin PHM',
                role: 'Administrateur',
                avatar: null
            };
            
            // Save auth data if remember me is checked
            if (rememberMe) {
                const authData = {
                    user: this.currentUser,
                    expires: Date.now() + (7 * 24 * 60 * 60 * 1000) // 7 days
                };
                localStorage.setItem('phm_admin_auth', JSON.stringify(authData));
            }
            
            // Show success message
            this.showNotification('Connexion réussie !', 'success');
            
            // Redirect to dashboard
            setTimeout(() => {
                this.showDashboard();
            }, 1000);
            
        } catch (error) {
            this.showNotification(error.message, 'error');
            
            // Restore button
            loginBtn.innerHTML = originalText;
            loginBtn.disabled = false;
        }
    }
    
    async simulateLogin(username, password) {
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                // Demo credentials
                if (username === 'admin' && password === 'phm2024') {
                    resolve();
                } else {
                    reject(new Error('Nom d\'utilisateur ou mot de passe incorrect'));
                }
            }, 1500);
        });
    }
    
    showDashboard() {
        document.getElementById('login-page').style.display = 'none';
        document.getElementById('admin-dashboard').style.display = 'flex';
        
        // Load default page
        this.navigateToPage('dashboard');
        
        // Add fade-in animation
        document.getElementById('admin-dashboard').classList.add('fade-in');
    }
    
    toggleSidebar() {
        if (this.isMobile) return;
        
        const sidebar = document.getElementById('sidebar');
        this.sidebarCollapsed = !this.sidebarCollapsed;
        
        if (this.sidebarCollapsed) {
            sidebar.classList.add('collapsed');
        } else {
            sidebar.classList.remove('collapsed');
        }
    }
    
    toggleMobileSidebar() {
        if (!this.isMobile) return;
        
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('mobile-open');
    }
    
    closeMobileSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.remove('mobile-open');
    }
    
    navigateToPage(page) {
        // Update current page
        this.currentPage = page;
        
        // Update active nav link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
        });
        
        const activeLink = document.querySelector(`.nav-link[data-page="${page}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
        }
        
        // Update page title
        const pageTitles = {
            dashboard: 'Dashboard',
            projects: 'Gestion des Projets',
            news: 'Gestion des Actualités',
            donations: 'Gestion des Dons',
            volunteers: 'Gestion des Bénévoles',
            gallery: 'Gestion de la Galerie',
            users: 'Gestion des Utilisateurs',
            settings: 'Paramètres'
        };
        
        document.getElementById('page-title').textContent = pageTitles[page] || 'Page';
        
        // Load page content
        this.loadPageContent(page);
        
        // Close mobile sidebar if open
        if (this.isMobile) {
            this.closeMobileSidebar();
        }
        
        // Update URL hash
        window.location.hash = page;
    }
    
    loadPageContent(page) {
        const pageContent = document.getElementById('page-content');
        
        // Show loading state
        pageContent.innerHTML = `
            <div class="loading-container">
                <div class="loading-spinner"></div>
                <p>Chargement...</p>
            </div>
        `;
        
        // Simulate loading delay
        setTimeout(() => {
            switch (page) {
                case 'dashboard':
                    this.loadDashboard();
                    break;
                case 'projects':
                    this.loadProjectsPage();
                    break;
                case 'news':
                    this.loadNewsPage();
                    break;
                case 'donations':
                    this.loadDonationsPage();
                    break;
                case 'volunteers':
                    this.loadVolunteersPage();
                    break;
                case 'gallery':
                    this.loadGalleryPage();
                    break;
                case 'users':
                    this.loadUsersPage();
                    break;
                case 'settings':
                    this.loadSettingsPage();
                    break;
                default:
                    this.loadDashboard();
            }
        }, 500);
    }
    
    loadDashboard() {
        if (window.dashboardManager) {
            window.dashboardManager.render();
        }
    }
    
    loadProjectsPage() {
        const pageContent = document.getElementById('page-content');
        pageContent.innerHTML = `
            <div class="page-header">
                <div class="page-header-content">
                    <h2>Gestion des Projets</h2>
                    <p>Gérez les projets de la fondation, leur statut et leurs détails.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-primary" onclick="adminPanel.openProjectModal()">
                        <i class="fas fa-plus"></i>
                        Nouveau Projet
                    </button>
                </div>
            </div>
            
            <div class="content-card">
                <div class="card-header">
                    <h3>Liste des Projets</h3>
                    <div class="card-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Rechercher un projet...">
                        </div>
                        <select class="filter-select">
                            <option value="">Tous les statuts</option>
                            <option value="active">Actif</option>
                            <option value="completed">Terminé</option>
                            <option value="planned">Planifié</option>
                        </select>
                    </div>
                </div>
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Projet</th>
                                <th>Catégorie</th>
                                <th>Statut</th>
                                <th>Progression</th>
                                <th>Budget</th>
                                <th>Bénéficiaires</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="projects-table-body">
                            <!-- Projects will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        `;
        
        this.loadProjectsData();
    }
    
    loadNewsPage() {
        const pageContent = document.getElementById('page-content');
        pageContent.innerHTML = `
            <div class="page-header">
                <div class="page-header-content">
                    <h2>Gestion des Actualités</h2>
                    <p>Gérez les articles et événements de la fondation.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-primary" onclick="adminPanel.openNewsModal()">
                        <i class="fas fa-plus"></i>
                        Nouvelle Actualité
                    </button>
                </div>
            </div>
            
            <div class="content-card">
                <div class="card-header">
                    <h3>Articles et Événements</h3>
                    <div class="card-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Rechercher un article...">
                        </div>
                        <select class="filter-select">
                            <option value="">Toutes les catégories</option>
                            <option value="event">Événement</option>
                            <option value="news">Actualité</option>
                            <option value="formation">Formation</option>
                        </select>
                    </div>
                </div>
                <div class="news-grid" id="news-grid">
                    <!-- News items will be loaded here -->
                </div>
            </div>
        `;
        
        this.loadNewsData();
    }
    
    loadDonationsPage() {
        const pageContent = document.getElementById('page-content');
        pageContent.innerHTML = `
            <div class="page-header">
                <div class="page-header-content">
                    <h2>Gestion des Dons</h2>
                    <p>Suivez les dons reçus et générez des reçus fiscaux.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-secondary" onclick="adminPanel.exportDonations()">
                        <i class="fas fa-download"></i>
                        Exporter
                    </button>
                </div>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="stat-content">
                        <h3>2,450,000 FCFA</h3>
                        <p>Total des dons</p>
                        <span class="stat-change positive">+12% ce mois</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3>156</h3>
                        <p>Donateurs actifs</p>
                        <span class="stat-change positive">+8 ce mois</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3>85%</h3>
                        <p>Paiements mobiles</p>
                        <span class="stat-change neutral">Stable</span>
                    </div>
                </div>
            </div>
            
            <div class="content-card">
                <div class="card-header">
                    <h3>Derniers Dons</h3>
                    <div class="card-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Rechercher un don...">
                        </div>
                        <select class="filter-select">
                            <option value="">Tous les moyens</option>
                            <option value="orange-money">Orange Money</option>
                            <option value="moov-money">Moov Money</option>
                            <option value="visa">Carte Visa</option>
                        </select>
                    </div>
                </div>
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Donateur</th>
                                <th>Montant</th>
                                <th>Moyen de paiement</th>
                                <th>Projet</th>
                                <th>Date</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="donations-table-body">
                            <!-- Donations will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        `;
        
        this.loadDonationsData();
    }
    
    loadVolunteersPage() {
        const pageContent = document.getElementById('page-content');
        pageContent.innerHTML = `
            <div class="page-header">
                <div class="page-header-content">
                    <h2>Gestion des Bénévoles</h2>
                    <p>Gérez les inscriptions et l'engagement des bénévoles.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-primary" onclick="adminPanel.openVolunteerModal()">
                        <i class="fas fa-plus"></i>
                        Ajouter un Bénévole
                    </button>
                </div>
            </div>
            
            <div class="content-card">
                <div class="card-header">
                    <h3>Liste des Bénévoles</h3>
                    <div class="card-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Rechercher un bénévole...">
                        </div>
                        <select class="filter-select">
                            <option value="">Tous les statuts</option>
                            <option value="active">Actif</option>
                            <option value="inactive">Inactif</option>
                            <option value="pending">En attente</option>
                        </select>
                    </div>
                </div>
                <div class="volunteers-grid" id="volunteers-grid">
                    <!-- Volunteers will be loaded here -->
                </div>
            </div>
        `;
        
        this.loadVolunteersData();
    }
    
    loadGalleryPage() {
        const pageContent = document.getElementById('page-content');
        pageContent.innerHTML = `
            <div class="page-header">
                <div class="page-header-content">
                    <h2>Gestion de la Galerie</h2>
                    <p>Gérez les photos et vidéos des projets.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-primary" onclick="adminPanel.openUploadModal()">
                        <i class="fas fa-upload"></i>
                        Ajouter des Médias
                    </button>
                </div>
            </div>
            
            <div class="content-card">
                <div class="card-header">
                    <h3>Médias</h3>
                    <div class="card-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Rechercher...">
                        </div>
                        <select class="filter-select">
                            <option value="">Tous les types</option>
                            <option value="image">Images</option>
                            <option value="video">Vidéos</option>
                        </select>
                    </div>
                </div>
                <div class="gallery-grid" id="gallery-grid">
                    <!-- Gallery items will be loaded here -->
                </div>
            </div>
        `;
        
        this.loadGalleryData();
    }
    
    loadUsersPage() {
        const pageContent = document.getElementById('page-content');
        pageContent.innerHTML = `
            <div class="page-header">
                <div class="page-header-content">
                    <h2>Gestion des Utilisateurs</h2>
                    <p>Gérez les comptes administrateurs et leurs permissions.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-primary" onclick="adminPanel.openUserModal()">
                        <i class="fas fa-plus"></i>
                        Nouvel Utilisateur
                    </button>
                </div>
            </div>
            
            <div class="content-card">
                <div class="card-header">
                    <h3>Utilisateurs Administrateurs</h3>
                </div>
                <div class="user-card">
                    <div class="user-card-header">
                        <div class="user-avatar">AP</div>
                        <div class="user-info-text">
                        <h3 class="user-name">Amhed Pakodé</h3>
                        <p class="user-role">Administrateur</p>
                        </div>
                    </div>
                    <div class="user-card-body">
                        <p><strong>Email:</strong> amhed@example.com</p>
                        <p><strong>Telephone:</strong> +22676483971</p>
                    </div>
                </div>
            </div>
        `;
        
        this.loadUsersData();
    }
    
    loadSettingsPage() {
        const pageContent = document.getElementById('page-content');
        pageContent.innerHTML = `
            <div class="page-header">
                <div class="page-header-content">
                    <h2>Paramètres du Site</h2>
                    <p>Configurez les paramètres généraux de la fondation.</p>
                </div>
                <div class="page-header-actions">
                    <button class="btn btn-primary" onclick="adminPanel.saveSettings()">
                        <i class="fas fa-save"></i>
                        Enregistrer
                    </button>
                </div>
            </div>
            
            <div class="settings-grid">
                <div class="content-card">
                    <div class="card-header">
                        <h3>Informations Générales</h3>
                    </div>
                    <div class="settings-form">
                        <div class="form-group">
                            <label>Nom de la fondation</label>
                            <input type="text" value="Fondation PHM" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3">Initiative citoyenne et solidaire pour le développement durable des communautés du Burkina Faso.</textarea>
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" value="Louda, Burkina Faso" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="tel" value="+226 XX XX XX XX" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="contact@fondationphm.org" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="content-card">
                    <div class="card-header">
                        <h3>Paramètres de Paiement</h3>
                    </div>
                    <div class="settings-form">
                        <div class="form-group">
                            <label>Orange Money</label>
                            <input type="text" placeholder="Numéro Orange Money" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Moov Money</label>
                            <input type="text" placeholder="Numéro Moov Money" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Telecel Money</label>
                            <input type="text" placeholder="Numéro Telecel Money" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Clé API Stripe</label>
                            <input type="password" placeholder="sk_..." class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
    
    // Data loading methods (mock data for now)
    loadProjectsData() {
        // Will be implemented with actual data loading
        const tbody = document.getElementById('projects-table-body');
        if (tbody) {
            tbody.innerHTML = `
                <tr>
                    <td>
                        <div class="table-cell-content">
                            <strong>Réhabilitation du Barrage</strong>
                            <span class="text-muted">Infrastructure hydraulique</span>
                        </div>
                    </td>
                    <td><span class="badge badge-info">Infrastructure</span></td>
                    <td><span class="badge badge-warning">En cours</span></td>
                    <td>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%"></div>
                        </div>
                        <span class="progress-text">75%</span>
                    </td>
                    <td>2.5M FCFA</td>
                    <td>1,000</td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn-icon" title="Modifier"><i class="fas fa-edit"></i></button>
                            <button class="btn-icon" title="Voir"><i class="fas fa-eye"></i></button>
                            <button class="btn-icon danger" title="Supprimer"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            `;
        }
    }
    
    loadNewsData() {
        // Will be implemented with actual data loading
    }
    
    loadDonationsData() {
        // Will be implemented with actual data loading
    }
    
    loadVolunteersData() {
        // Will be implemented with actual data loading
    }
    
    loadGalleryData() {
        // Will be implemented with actual data loading
    }
    
    loadUsersData() {
        // Will be implemented with actual data loading
    }
    
    showNotification(message, type = 'info') {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `admin-notification ${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <div class="notification-icon">
                    <i class="fas ${this.getNotificationIcon(type)}"></i>
                </div>
                <span class="notification-message">${message}</span>
                <button class="notification-close" onclick="this.closest('.admin-notification').remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        
        // Add to page
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => notification.classList.add('show'), 100);
        
        // Auto remove
        setTimeout(() => {
            if (notification.parentNode) {
                notification.classList.remove('show');
                setTimeout(() => notification.remove(), 300);
            }
        }, 5000);
    }
    
    getNotificationIcon(type) {
        const icons = {
            success: 'fa-check-circle',
            error: 'fa-exclamation-circle',
            warning: 'fa-exclamation-triangle',
            info: 'fa-info-circle'
        };
        return icons[type] || icons.info;
    }
}

// Toggle password visibility
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleBtn = document.querySelector('.toggle-password i');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleBtn.className = 'fas fa-eye-slash';
    } else {
        passwordInput.type = 'password';
        toggleBtn.className = 'fas fa-eye';
    }
}

// Global logout function
function logout() {
    if (window.adminPanel) {
        window.adminPanel.logout();
    }
}

// Initialize admin panel when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    window.adminPanel = new AdminPanel();
    
    // Handle hash navigation
    window.addEventListener('hashchange', function() {
        const hash = window.location.hash.substring(1);
        if (hash && window.adminPanel.isAuthenticated) {
            window.adminPanel.navigateToPage(hash);
        }
    });
});

// Add notification styles
const notificationStyles = `
<style>
    .admin-notification {
        position: fixed;
        top: 20px;
        right: 20px;
        background: var(--white);
        border-left: 4px solid var(--info-color);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-lg);
        min-width: 300px;
        max-width: 400px;
        z-index: 2000;
        transform: translateX(100%);
        transition: transform var(--transition-base);
    }

    .admin-notification.show {
        transform: translateX(0);
    }

    .admin-notification.success {
        border-left-color: var(--success-color);
    }

    .admin-notification.error {
        border-left-color: var(--danger-color);
    }

    .admin-notification.warning {
        border-left-color: var(--warning-color);
    }

    .notification-content {
        display: flex;
        align-items: center;
        gap: var(--spacing-md);
        padding: var(--spacing-lg);
    }

    .notification-icon {
        flex-shrink: 0;
    }

    .notification-icon i {
        font-size: 1.2rem;
    }

    .admin-notification.success .notification-icon i {
        color: var(--success-color);
    }

    .admin-notification.error .notification-icon i {
        color: var(--danger-color);
    }

    .admin-notification.warning .notification-icon i {
        color: var(--warning-color);
    }

    .admin-notification.info .notification-icon i {
        color: var(--info-color);
    }

    .notification-message {
        flex: 1;
        font-weight: var(--font-weight-medium);
    }

    .notification-close {
        background: none;
        border: none;
        color: var(--gray-500);
        cursor: pointer;
        padding: var(--spacing-xs);
        border-radius: var(--border-radius);
        transition: all var(--transition-base);
    }

    .notification-close:hover {
        background: var(--gray-100);
        color: var(--gray-700);
    }

    .loading-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: var(--spacing-xxl);
        color: var(--gray-600);
    }

    .loading-spinner {
        width: 40px;
        height: 40px;
        border: 3px solid var(--gray-200);
        border-top-color: var(--primary-color);
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-bottom: var(--spacing-md);
    }
</style>
`;

document.head.insertAdjacentHTML('beforeend', notificationStyles);
