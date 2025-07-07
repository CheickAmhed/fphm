// Moved from public/js/dashboard.js
// Dashboard Management for Admin Panel

class DashboardManager {
    constructor() {
        this.stats = {
            totalDonations: 2450000,
            totalProjects: 3,
            activeDonors: 156,
            totalBeneficiaries: 1500
        };
        
        this.recentActivities = [];
        this.chartData = {};
        
        this.init();
    }
    
    init() {
        this.loadMockData();
    }
    
    loadMockData() {
        // Mock recent activities
        this.recentActivities = [
            {
                id: 1,
                type: 'donation',
                title: 'Nouveau don reçu',
                description: 'Marie ZOUNGRANA a fait un don de 25,000 FCFA',
                time: '2 minutes',
                icon: 'fas fa-heart',
                color: 'success'
            },
            {
                id: 2,
                type: 'project',
                title: 'Projet mis à jour',
                description: 'Progression du barrage mise à jour à 75%',
                time: '1 heure',
                icon: 'fas fa-project-diagram',
                color: 'info'
            },
            {
                id: 3,
                type: 'volunteer',
                title: 'Nouveau bénévole',
                description: 'Jean Baptiste s\'est inscrit comme bénévole',
                time: '3 heures',
                icon: 'fas fa-hands-helping',
                color: 'primary'
            },
            {
                id: 4,
                type: 'news',
                title: 'Article publié',
                description: 'Nouvel article sur la formation agricole',
                time: '5 heures',
                icon: 'fas fa-newspaper',
                color: 'warning'
            },
            {
                id: 5,
                type: 'donation',
                title: 'Don mensuel',
                description: 'Don récurrent de 10,000 FCFA traité',
                time: '1 jour',
                icon: 'fas fa-redo',
                color: 'success'
            }
        ];
        
        // Mock chart data
        this.chartData = {
            donations: {
                labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun'],
                data: [180000, 220000, 195000, 240000, 260000, 285000]
            },
            projects: {
                labels: ['Barrage', 'Logement', 'Agriculture'],
                data: [75, 60, 85]
            }
        };
    }
    
    render() {
        const pageContent = document.getElementById('page-content');
        
        pageContent.innerHTML = `
            ${this.renderWelcomeSection()}
            ${this.renderStatsGrid()}
            ${this.renderChartsSection()}
            ${this.renderRecentActivity()}
            ${this.renderQuickActions()}
        `;
        
        // Initialize charts after rendering
        setTimeout(() => {
            this.initializeCharts();
        }, 100);
    }
    
    renderWelcomeSection() {
        const currentHour = new Date().getHours();
        let greeting = 'Bonne journée';
        if (currentHour < 12) greeting = 'Bonjour';
        else if (currentHour < 18) greeting = 'Bon après-midi';
        else greeting = 'Bonsoir';
        
        return `
            <div class="welcome-section">
                <div class="welcome-content">
                    <h2>${greeting}, Admin !</h2>
                    <p>Voici un aperçu de l'activité de la Fondation PHM aujourd'hui.</p>
                </div>
                <div class="welcome-stats">
                    <div class="welcome-stat">
                        <i class="fas fa-eye"></i>
                        <span>1,234 visites aujourd'hui</span>
                    </div>
                    <div class="welcome-stat">
                        <i class="fas fa-heart"></i>
                        <span>12 nouveaux dons</span>
                    </div>
                </div>
            </div>
        `;
    }
    
    renderStatsGrid() {
        return `
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon donations">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${this.formatAmount(this.stats.totalDonations)} FCFA</h3>
                        <p>Total des dons</p>
                        <div class="stat-footer">
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i>
                                +12% ce mois
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon projects">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${this.stats.totalProjects}</h3>
                        <p>Projets actifs</p>
                        <div class="stat-footer">
                            <span class="stat-change neutral">
                                <i class="fas fa-minus"></i>
                                Stable
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon donors">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${this.stats.activeDonors}</h3>
                        <p>Donateurs actifs</p>
                        <div class="stat-footer">
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i>
                                +8 ce mois
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon beneficiaries">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="stat-content">
                        <h3>${this.stats.totalBeneficiaries}</h3>
                        <p>Bénéficiaires aidés</p>
                        <div class="stat-footer">
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i>
                                +150 ce mois
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }
    
    renderChartsSection() {
        return `
            <div class="charts-grid">
                <div class="chart-card">
                    <div class="card-header">
                        <h3>Évolution des Dons</h3>
                        <div class="card-actions">
                            <select class="period-select">
                                <option value="6m">6 derniers mois</option>
                                <option value="1y">12 derniers mois</option>
                                <option value="2y">2 dernières années</option>
                            </select>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="donations-chart"></canvas>
                    </div>
                </div>
                
                <div class="chart-card">
                    <div class="card-header">
                        <h3>Progression des Projets</h3>
                    </div>
                    <div class="chart-container">
                        <canvas id="projects-chart"></canvas>
                    </div>
                </div>
            </div>
        `;
    }
    
    renderRecentActivity() {
        return `
            <div class="activity-section">
                <div class="content-card">
                    <div class="card-header">
                        <h3>Activité Récente</h3>
                        <a href="#" class="view-all-link">Voir tout</a>
                    </div>
                    <div class="activity-list">
                        ${this.recentActivities.map(activity => `
                            <div class="activity-item">
                                <div class="activity-icon ${activity.color}">
                                    <i class="${activity.icon}"></i>
                                </div>
                                <div class="activity-content">
                                    <h4>${activity.title}</h4>
                                    <p>${activity.description}</p>
                                    <span class="activity-time">Il y a ${activity.time}</span>
                                </div>
                                <div class="activity-actions">
                                    <button class="btn-icon" title="Voir">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        `).join('')}
                    </div>
                </div>
            </div>
        `;
    }
    
    renderQuickActions() {
        return `
            <div class="quick-actions-section">
                <div class="content-card">
                    <div class="card-header">
                        <h3>Actions Rapides</h3>
                    </div>
                    <div class="quick-actions-grid">
                        <button class="quick-action-btn" onclick="adminPanel.navigateToPage('projects')">
                            <div class="action-icon">
                                <i class="fas fa-plus"></i>
                            </div>
                            <span>Nouveau Projet</span>
                        </button>
                        
                        <button class="quick-action-btn" onclick="adminPanel.navigateToPage('news')">
                            <div class="action-icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <span>Publier Article</span>
                        </button>
                        
                        <button class="quick-action-btn" onclick="adminPanel.navigateToPage('volunteers')">
                            <div class="action-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <span>Ajouter Bénévole</span>
                        </button>
                        
                        <button class="quick-action-btn" onclick="adminPanel.navigateToPage('gallery')">
                            <div class="action-icon">
                                <i class="fas fa-upload"></i>
                            </div>
                            <span>Upload Médias</span>
                        </button>
                        
                        <button class="quick-action-btn" onclick="this.exportData()">
                            <div class="action-icon">
                                <i class="fas fa-download"></i>
                            </div>
                            <span>Exporter Données</span>
                        </button>
                        
                        <button class="quick-action-btn" onclick="adminPanel.navigateToPage('settings')">
                            <div class="action-icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <span>Paramètres</span>
                        </button>
                    </div>
                </div>
            </div>
        `;
    }
    
    initializeCharts() {
        // Initialize donations chart (line chart)
        this.initializeDonationsChart();
        
        // Initialize projects chart (doughnut chart)
        this.initializeProjectsChart();
    }
    
    initializeDonationsChart() {
        const canvas = document.getElementById('donations-chart');
        if (!canvas) return;
        
        const ctx = canvas.getContext('2d');
        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(231, 126, 34, 0.2)');
        gradient.addColorStop(1, 'rgba(231, 126, 34, 0.05)');
        
        // Simple chart implementation (you can use Chart.js for more advanced charts)
        this.drawLineChart(ctx, this.chartData.donations, gradient);
    }
    
    initializeProjectsChart() {
        const canvas = document.getElementById('projects-chart');
        if (!canvas) return;
        
        const ctx = canvas.getContext('2d');
        
        // Simple doughnut chart implementation
        this.drawDoughnutChart(ctx, this.chartData.projects);
    }
    
    drawLineChart(ctx, data, gradient) {
        const canvas = ctx.canvas;
        const width = canvas.width;
        const height = canvas.height;
        const padding = 40;
        
        // Clear canvas
        ctx.clearRect(0, 0, width, height);
        
        // Set up drawing area
        const chartWidth = width - 2 * padding;
        const chartHeight = height - 2 * padding;
        
        // Find max value for scaling
        const maxValue = Math.max(...data.data);
        const minValue = Math.min(...data.data);
        const valueRange = maxValue - minValue;
        
        // Draw grid lines
        ctx.strokeStyle = '#f1f3f4';
        ctx.lineWidth = 1;
        
        // Horizontal grid lines
        for (let i = 0; i <= 4; i++) {
            const y = padding + (chartHeight / 4) * i;
            ctx.beginPath();
            ctx.moveTo(padding, y);
            ctx.lineTo(width - padding, y);
            ctx.stroke();
        }
        
        // Draw line
        ctx.strokeStyle = '#E67E22';
        ctx.lineWidth = 3;
        ctx.fillStyle = gradient;
        
        const stepX = chartWidth / (data.data.length - 1);
        
        // Create path for line
        ctx.beginPath();
        data.data.forEach((value, index) => {
            const x = padding + stepX * index;
            const y = padding + chartHeight - ((value - minValue) / valueRange) * chartHeight;
            
            if (index === 0) {
                ctx.moveTo(x, y);
            } else {
                ctx.lineTo(x, y);
            }
        });
        
        // Fill area under line
        ctx.lineTo(width - padding, padding + chartHeight);
        ctx.lineTo(padding, padding + chartHeight);
        ctx.closePath();
        ctx.fill();
        
        // Draw line on top
        ctx.beginPath();
        data.data.forEach((value, index) => {
            const x = padding + stepX * index;
            const y = padding + chartHeight - ((value - minValue) / valueRange) * chartHeight;
            
            if (index === 0) {
                ctx.moveTo(x, y);
            } else {
                ctx.lineTo(x, y);
            }
        });
        ctx.stroke();
        
        // Draw points
        ctx.fillStyle = '#E67E22';
        data.data.forEach((value, index) => {
            const x = padding + stepX * index;
            const y = padding + chartHeight - ((value - minValue) / valueRange) * chartHeight;
            
            ctx.beginPath();
            ctx.arc(x, y, 4, 0, 2 * Math.PI);
            ctx.fill();
        });
    }
    
    drawDoughnutChart(ctx, data) {
        const canvas = ctx.canvas;
        const width = canvas.width;
        const height = canvas.height;
        const centerX = width / 2;
        const centerY = height / 2;
        const radius = Math.min(width, height) / 3;
        
        const colors = ['#E67E22', '#3498DB', '#2ECC71'];
        const total = data.data.reduce((sum, value) => sum + value, 0);
        
        let currentAngle = -Math.PI / 2;
        
        // Clear canvas
        ctx.clearRect(0, 0, width, height);
        
        data.data.forEach((value, index) => {
            const sliceAngle = (value / 100) * 2 * Math.PI;
            
            // Draw slice
            ctx.fillStyle = colors[index % colors.length];
            ctx.beginPath();
            ctx.arc(centerX, centerY, radius, currentAngle, currentAngle + sliceAngle);
            ctx.arc(centerX, centerY, radius * 0.6, currentAngle + sliceAngle, currentAngle, true);
            ctx.closePath();
            ctx.fill();
            
            // Draw label
            const labelAngle = currentAngle + sliceAngle / 2;
            const labelX = centerX + Math.cos(labelAngle) * (radius * 0.8);
            const labelY = centerY + Math.sin(labelAngle) * (radius * 0.8);
            
            ctx.fillStyle = '#fff';
            ctx.font = 'bold 12px Inter';
            ctx.textAlign = 'center';
            ctx.fillText(`${value}%`, labelX, labelY);
            
            currentAngle += sliceAngle;
        });
        
        // Draw center text
        ctx.fillStyle = '#495057';
        ctx.font = 'bold 16px Inter';
        ctx.textAlign = 'center';
        ctx.fillText('Projets', centerX, centerY - 5);
        ctx.font = '12px Inter';
        ctx.fillText('Progression', centerX, centerY + 10);
    }
    
    formatAmount(amount) {
        return amount.toLocaleString('fr-FR');
    }
    
    exportData() {
        // Mock export functionality
        adminPanel.showNotification('Export des données en cours...', 'info');
        
        setTimeout(() => {
            adminPanel.showNotification('Données exportées avec succès !', 'success');
        }, 2000);
    }
}

// Initialize dashboard manager
document.addEventListener('DOMContentLoaded', function() {
    window.dashboardManager = new DashboardManager();
});

// Add dashboard-specific styles
const dashboardStyles = `
<style>
/* Dashboard Specific Styles */
.welcome-section {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: var(--white);
    padding: var(--spacing-xxl);
    border-radius: var(--border-radius-lg);
    margin-bottom: var(--spacing-xl);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.welcome-content h2 {
    font-size: 1.75rem;
    font-weight: var(--font-weight-bold);
    margin-bottom: var(--spacing-sm);
}

.welcome-content p {
    opacity: 0.9;
    font-size: 1.1rem;
}

.welcome-stats {
    display: flex;
    gap: var(--spacing-xl);
}

.welcome-stat {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    background: rgba(255, 255, 255, 0.1);
    padding: var(--spacing-md);
    border-radius: var(--border-radius);
    backdrop-filter: blur(10px);
}

.welcome-stat i {
    font-size: 1.2rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.stat-card {
    background: var(--white);
    border-radius: var(--border-radius-lg);
    padding: var(--spacing-lg);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--gray-200);
    transition: all var(--transition-base);
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
}

.stat-card:hover {
    box-shadow: var(--shadow-md);
    transform: translateY(-2px);
}

.stat-icon {
    width: 60px;
    height: 60px;
    border-radius: var(--border-radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--white);
    flex-shrink: 0;
}

.stat-icon.donations {
    background: linear-gradient(135deg, var(--warning-color), #F39C12);
}

.stat-icon.projects {
    background: linear-gradient(135deg, var(--info-color), var(--secondary-color));
}

.stat-icon.donors {
    background: linear-gradient(135deg, var(--success-color), #27AE60);
}

.stat-icon.beneficiaries {
    background: linear-gradient(135deg, var(--danger-color), #E74C3C);
}

.stat-content {
    flex: 1;
}

.stat-content h3 {
    font-size: 1.75rem;
    font-weight: var(--font-weight-black);
    color: var(--gray-900);
    margin-bottom: var(--spacing-xs);
}

.stat-content p {
    color: var(--gray-600);
    margin-bottom: var(--spacing-sm);
}

.stat-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.stat-change {
    font-size: 0.85rem;
    font-weight: var(--font-weight-medium);
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.stat-change.positive {
    color: var(--success-color);
}

.stat-change.negative {
    color: var(--danger-color);
}

.stat-change.neutral {
    color: var(--gray-500);
}

.charts-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.chart-card {
    background: var(--white);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--gray-200);
    overflow: hidden;
}

.chart-container {
    padding: var(--spacing-lg);
    height: 300px;
}

.chart-container canvas {
    width: 100%;
    height: 100%;
}

.period-select {
    background: var(--white);
    border: 1px solid var(--gray-300);
    border-radius: var(--border-radius);
    padding: var(--spacing-sm) var(--spacing-md);
    font-size: 0.9rem;
    cursor: pointer;
}

.activity-section {
    margin-bottom: var(--spacing-xl);
}

.activity-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
}

.activity-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-md);
    border-radius: var(--border-radius);
    transition: background var(--transition-base);
}

.activity-item:hover {
    background: var(--gray-50);
}

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    flex-shrink: 0;
}

.activity-icon.success {
    background: var(--success-color);
}

.activity-icon.info {
    background: var(--info-color);
}

.activity-icon.primary {
    background: var(--primary-color);
}

.activity-icon.warning {
    background: var(--warning-color);
}

.activity-content {
    flex: 1;
}

.activity-content h4 {
    font-weight: var(--font-weight-semibold);
    color: var(--gray-900);
    margin-bottom: var(--spacing-xs);
    font-size: 0.95rem;
}

.activity-content p {
    color: var(--gray-600);
    font-size: 0.9rem;
    margin-bottom: var(--spacing-xs);
}

.activity-time {
    color: var(--gray-500);
    font-size: 0.8rem;
}

.activity-actions {
    flex-shrink: 0;
}

.view-all-link {
    color: var(--primary-color);
    text-decoration: none;
    font-size: 0.9rem;
    font-weight: var(--font-weight-medium);
}

.view-all-link:hover {
    color: var(--primary-dark);
}

.quick-actions-section {
    margin-bottom: var(--spacing-xl);
}

.quick-actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: var(--spacing-md);
}

.quick-action-btn {
    background: var(--white);
    border: 2px solid var(--gray-200);
    border-radius: var(--border-radius-lg);
    padding: var(--spacing-lg);
    cursor: pointer;
    transition: all var(--transition-base);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-md);
    text-decoration: none;
    color: var(--gray-700);
}

.quick-action-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.action-icon {
    width: 50px;
    height: 50px;
    background: var(--gray-100);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    transition: all var(--transition-base);
}

.quick-action-btn:hover .action-icon {
    background: var(--primary-color);
    color: var(--white);
}

.quick-action-btn span {
    font-weight: var(--font-weight-medium);
    font-size: 0.9rem;
    text-align: center;
}

/* Content Card Styles */
.content-card {
    background: var(--white);
    border-radius: var(--border-radius-lg);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--gray-200);
    overflow: hidden;
}

.card-header {
    padding: var(--spacing-lg);
    border-bottom: 1px solid var(--gray-200);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h3 {
    font-size: 1.2rem;
    font-weight: var(--font-weight-bold);
    color: var(--gray-900);
}

.card-actions {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

/* Page Header Styles */
.page-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: var(--spacing-xl);
    padding-bottom: var(--spacing-lg);
    border-bottom: 1px solid var(--gray-200);
}

.page-header-content h2 {
    font-size: 1.75rem;
    font-weight: var(--font-weight-bold);
    color: var(--gray-900);
    margin-bottom: var(--spacing-sm);
}

.page-header-content p {
    color: var(--gray-600);
    font-size: 1rem;
}

.page-header-actions {
    display: flex;
    gap: var(--spacing-md);
}

/* Button Styles */
.btn {
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-md) var(--spacing-lg);
    border-radius: var(--border-radius);
    font-weight: var(--font-weight-medium);
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all var(--transition-base);
    font-size: 0.9rem;
}

.btn-primary {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: var(--white);
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.btn-secondary {
    background: var(--white);
    color: var(--gray-700);
    border: 1px solid var(--gray-300);
}

.btn-secondary:hover {
    background: var(--gray-50);
    border-color: var(--primary-color);
    color: var(--primary-color);
}

.btn-icon {
    background: none;
    border: none;
    color: var(--gray-500);
    cursor: pointer;
    padding: var(--spacing-sm);
    border-radius: var(--border-radius);
    transition: all var(--transition-base);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
}

.btn-icon:hover {
    background: var(--gray-100);
    color: var(--primary-color);
}

.btn-icon.danger:hover {
    background: var(--danger-color);
    color: var(--white);
}

/* Search and Filter Styles */
.search-box {
    position: relative;
    display: flex;
    align-items: center;
}

.search-box i {
    position: absolute;
    left: var(--spacing-md);
    color: var(--gray-500);
}

.search-box input {
    padding: var(--spacing-sm) var(--spacing-md) var(--spacing-sm) 2.5rem;
    border: 1px solid var(--gray-300);
    border-radius: var(--border-radius);
    font-size: 0.9rem;
    min-width: 200px;
}

.search-box input:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(231, 126, 34, 0.1);
}

.filter-select {
    background: var(--white);
    border: 1px solid var(--gray-300);
    border-radius: var(--border-radius);
    padding: var(--spacing-sm) var(--spacing-md);
    font-size: 0.9rem;
    cursor: pointer;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .charts-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
}

@media (max-width: 768px) {
    .welcome-section {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-lg);
    }
    
    .welcome-stats {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .page-header {
        flex-direction: column;
        gap: var(--spacing-md);
        align-items: stretch;
    }
    
    .quick-actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    }
    
    .card-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
}
</style>
`;

document.head.insertAdjacentHTML('beforeend', dashboardStyles);
