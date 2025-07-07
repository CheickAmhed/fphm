// JavaScript principal pour le site Fondation PHM
import {
  siteData,
  formatCurrency,
  formatDate,
  getProjectsByCategory,
  getRecentNews
} from './data.js';

class FondationPHM {
    constructor() {
        this.currentSlide = 0;
        this.totalSlides = siteData.slides.length;
        this.currentCategory = 'all';
        this.isVisible = {};
        this.animatedCounters = new Set();
        
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.initializeHeader();
        this.initializeHero();
        this.initializeAnimations();
        this.loadContent();
    }

    setupEventListeners() {
        // Navigation mobile
        const mobileToggle = document.querySelector('.mobile-menu-toggle');
        const mobileClose = document.querySelector('.mobile-menu-close');
        const mobileMenu = document.querySelector('.mobile-menu');
        const mobileOverlay = document.querySelector('.mobile-overlay');

        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('open');
            });
        }
        
        if (mobileClose) {
            mobileClose.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
            });
        }

        // Fermer le menu mobile en cliquant sur un lien
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
            });
        });

        // Scroll header
        window.addEventListener('scroll', () => {
            this.handleHeaderScroll();
            this.handleScrollAnimations();
        });
        
        // Auto-slide
        setInterval(() => {
            this.nextSlide();
        }, 5000);

        // Filtres de projets
        this.setupProjectFilters();

        // Formulaires
        this.setupForms();
    }

    initializeHeader() {
        const header = document.querySelector('.header');
        if (!header) return;

        // Marquer le lien actif
        const currentPage = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
        
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === currentPage || (currentPage === '/' && href === 'index.html')) {
                link.classList.add('active');
            }
        });
    }

    handleHeaderScroll() {
        const header = document.querySelector('.header');
        if (!header) return;

        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    initializeHero() {
        const heroSection = document.querySelector('.hero');
        if (!heroSection) return;

        this.updateHeroSlide();
    }
    
    updateHeroSlide() {
        const container = document.querySelector('.hero');

        if (!container || !siteData.slides[this.currentSlide]) return;

        const currentSlideData = siteData.slides[this.currentSlide];

        // Dynamically generate slide indicators HTML
        const indicatorsHTML = siteData.slides.map((_, index) => {
            const isActive = index === this.currentSlide ? 'active' : '';
            return `<button class="slide-indicator ${isActive}" data-index="${index}"></button>`;
        }).join('');

        // Generate HTML with dynamic values
        container.innerHTML = `
            <div class="hero-background">
                <img src="${currentSlideData.image}" alt="${currentSlideData.title}" class="hero-image zoom-on-load">
                <div class="hero-overlay"></div>
            </div>

            <div class="container">
                <div class="hero-content animate-fade-in-up">
                    <div class="hero-badge">
                        🏆 15 années d'engagement
                    </div>
                    
                    <h1 class="hero-title">${currentSlideData.title}</h1>
                    
                    <p class="hero-subtitle">${currentSlideData.subtitle}</p>
                    
                    <div class="hero-action">
                        <div class="hero-actions">
                            <a href="projects.html" class="btn btn-primary btn-lg">
                                Découvrir le projet →
                            </a>
                            <button class="btn btn-outline btn-lg">
                                ▶️ Voir la vidéo
                            </button>
                        </div>
                    </div>
                    
                    <div class="hero-stats">
                        <div class="hero-stat">
                            <div class="hero-stat-value">50+</div>
                            <div class="hero-stat-label">Projets réalisés</div>
                        </div>
                        <div class="hero-stat">
                            <div class="hero-stat-value">5000+</div>
                            <div class="hero-stat-label">Bénéficiaires</div>
                        </div>
                        <div class="hero-stat">
                            <div class="hero-stat-value">15</div>
                            <div class="hero-stat-label">Années d'expérience</div>
                        </div>
                        <div class="hero-stat">
                            <div class="hero-stat-value">3</div>
                            <div class="hero-stat-label">Régions couvertes</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slide-indicators">
                ${indicatorsHTML}
            </div>
        `;

        // Animate indicators
        const indicators = document.querySelectorAll('.slide-indicator');
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                this.currentSlide = index;
                this.updateHeroSlide();
            });
        });
    }

    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateHeroSlide();
    }

    initializeAnimations() {
        // Observer pour les animations au scroll
        this.observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    element.classList.add('animate-fadeInUp');
                    
                    // Animation des compteurs
                    if (element.classList.contains('stats-section')) {
                        this.animateCounters();
                    }
                    
                    // Animation des cartes avec délai
                    if (element.classList.contains('grid')) {
                        this.animateGridItems(element);
                    }
                }
            });
        }, { threshold: 0.1 });

        // Observer toutes les sections
        const sections = document.querySelectorAll('.section, .stats-section');
        sections.forEach(section => {
            this.observer.observe(section);
        });
    }

    handleScrollAnimations() {
        // Parallax sur les images hero
        const heroImage = document.querySelector('.hero-image');
        if (heroImage) {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            heroImage.style.transform = `scale(1.1) translateY(${parallax}px)`;
        }
    }

    animateCounters() {
        if (this.animatedCounters.has('stats')) return;
        this.animatedCounters.add('stats');

        const counters = document.querySelectorAll('.stat-value[data-target]');
        counters.forEach((counter, index) => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000;
            const start = Date.now();

            const updateCounter = () => {
                const elapsed = Date.now() - start;
                const progress = Math.min(elapsed / duration, 1);
                
                const current = Math.floor(target * progress);
                counter.textContent = this.formatNumber(current) + (counter.textContent.includes('+') ? '+' : '');

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            };

            // Délai pour chaque compteur
            setTimeout(() => {
                updateCounter();
            }, index * 200);
        });
    }

    animateGridItems(grid) {
        const items = grid.querySelectorAll('.card, .stat-card');
        items.forEach((item, index) => {
            setTimeout(() => {
                item.classList.add('animate-fadeInUp');
            }, index * 100);
        });
    }

    setupProjectFilters() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                
                const category = button.getAttribute('data-category');
                this.currentCategory = category;

                // Mettre à jour les boutons actifs
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Filtrer les projets
                this.filterProjects(category);
            });
        });
    }

    filterProjects(category) {
        const projectCards = document.querySelectorAll('.project-card');
        
        projectCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            
            if (category === 'all' || cardCategory === category) {
                card.style.display = 'block';
                setTimeout(() => {
                    card.classList.add('animate-fadeInUp');
                }, 100);
            } else {
                card.style.display = 'none';
                card.classList.remove('animate-fadeInUp');
            }
        });
    }

    setupForms() {
        // Newsletter
        const newsletterForm = document.querySelector('.newsletter-form');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.handleNewsletterSubmit(e.target);
            });
        }

        // Formulaire de don
        const donationForm = document.querySelector('.donation-form');
        if (donationForm) {
            donationForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.handleDonationSubmit(e.target);
            });
        }

        // Formulaire de contact
        const contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.handleContactSubmit(e.target);
            });
        }
    }

    handleNewsletterSubmit(form) {
        const email = form.querySelector('input[type="email"]').value;
        
        if (this.validateEmail(email)) {
            this.showNotification('Merci pour votre inscription !', 'success');
            form.reset();
        } else {
            this.showNotification('Veuillez entrer une adresse email valide.', 'error');
        }
    }

    handleDonationSubmit(form) {
        const formData = new FormData(form);
        const amount = formData.get('amount');
        const email = formData.get('email');

        if (!amount || !email) {
            this.showNotification('Veuillez remplir tous les champs requis.', 'error');
            return;
        }

        if (!this.validateEmail(email)) {
            this.showNotification('Veuillez entrer une adresse email valide.', 'error');
            return;
        }

        // Simulation du processus de don
        this.showNotification('Redirection vers le paiement...', 'info');
        setTimeout(() => {
            // Ici, vous intégrerez avec votre système de paiement
            alert(`Don de ${formatCurrency(parseInt(amount))} - Merci pour votre générosité !`);
        }, 2000);
    }

    handleContactSubmit(form) {
        const formData = new FormData(form);
        const name = formData.get('name');
        const email = formData.get('email');
        const message = formData.get('message');

        if (!name || !email || !message) {
            this.showNotification('Veuillez remplir tous les champs requis.', 'error');
            return;
        }

        if (!this.validateEmail(email)) {
            this.showNotification('Veuillez entrer une adresse email valide.', 'error');
            return;
        }

        this.showNotification('Message envoyé avec succès !', 'success');
        form.reset();
    }

    validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    showNotification(message, type = 'info') {
        // Créer la notification
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.textContent = message;

        // Styles de base pour la notification
        Object.assign(notification.style, {
            position: 'fixed',
            top: '20px',
            right: '20px',
            padding: '1rem 1.5rem',
            borderRadius: '0.5rem',
            color: 'white',
            fontWeight: '600',
            zIndex: '9999',
            transform: 'translateX(100%)',
            transition: 'transform 0.3s ease-in-out'
        });

        // Couleurs selon le type
        const colors = {
            success: '#10b981',
            error: '#ef4444',
            warning: '#f59e0b',
            info: '#3b82f6'
        };
        notification.style.backgroundColor = colors[type] || colors.info;

        document.body.appendChild(notification);

        // Animation d'entrée
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);

        // Suppression automatique
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 4000);
    }

    loadContent() {
        // Charger les statistiques
        this.loadStats();
        
        // Charger les projets
        this.loadProjects();
        
        // Charger les actualités
        this.loadNews();
    }

    loadStats() {
        const statsContainer = document.querySelector('.stats-grid');
        if (!statsContainer) return;

        const stats = [
            { icon: '📊', value: 50, label: 'Projets réalisés', description: 'Projets d\'impact social', color: '#3b82f6' },
            { icon: '👥', value: 5000, label: 'Bénéficiaires', description: 'Personnes aidées', color: '#10b981' },
            { icon: '💰', value: 8.5, label: 'Millions FCFA', description: 'Budget global', color: '#f97316' },
            { icon: '📍', value: 5, label: 'Régions couvertes', description: 'Zones d\'intervention', color: '#8b5cf6' },
            { icon: '❤️', value: 25, label: 'Partenaires', description: 'Organisations partenaires', color: '#ef4444' },
            { icon: '🏆', value: 15, label: 'Années d\'expérience', description: 'Années d\'engagement', color: '#f59e0b' }
        ];

        statsContainer.innerHTML = stats.map(stat => `
            <div class="stat-card">
                <div class="stat-icon" style="background: ${stat.color};">
                    <span style="font-size: 1.5rem;">${stat.icon}</span>
                </div>
                <div class="stat-value" data-target="${stat.value}">
                    ${stat.value}${stat.label.includes('Millions') ? 'M' : '+'}
                </div>
                <div class="stat-label">${stat.label}</div>
                <div class="stat-description">${stat.description}</div>
            </div>
        `).join('');
    }

    loadProjects() {
        const projectsContainer = document.querySelector('.projects-grid');
        if (!projectsContainer) return;

        const projectsHtml = siteData.projects.slice(0, 3).map(project => `
            <div class="card project-card" data-category="${project.category}">
                <div class="card-image-container" style="position: relative; overflow: hidden; height: 200px;">
                    <img src="${project.image}" alt="${project.title}" class="card-image">
                    <div class="card-badges" style="position: absolute; top: 1rem; left: 1rem; right: 1rem; display: flex; justify-content: space-between;">
                        <span class="badge badge-${project.status === 'En cours' ? 'success' : project.status === 'Planifié' ? 'info' : 'warning'}">
                            ${project.status}
                        </span>
                        <span class="badge" style="background: rgba(255,255,255,0.9); color: var(--gray-800);">
                            ${project.category}
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">${project.title}</h3>
                    <p class="card-description">${project.description}</p>
                    
                    <div style="margin: 1rem 0;">
                        <div style="display: flex; justify-content: space-between; font-size: 0.875rem; margin-bottom: 0.5rem;">
                            <span>Progression</span>
                            <span style="font-weight: 600; color: var(--primary-orange);">${project.completion}%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: ${project.completion}%;"></div>
                        </div>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin: 1rem 0;">
                        <div style="text-align: center; padding: 0.75rem; background: var(--gray-50); border-radius: 0.5rem;">
                            <div style="font-weight: bold; font-size: 1.125rem;">${formatCurrency(project.budget)}</div>
                            <div style="font-size: 0.75rem; color: var(--gray-600);">Budget</div>
                        </div>
                        <div style="text-align: center; padding: 0.75rem; background: rgba(249, 115, 22, 0.1); border-radius: 0.5rem;">
                            <div style="font-weight: bold; font-size: 1.125rem; color: var(--primary-orange);">${project.beneficiaries}</div>
                            <div style="font-size: 0.75rem; color: var(--gray-600);">Bénéficiaires</div>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--gray-600); font-size: 0.875rem; margin-bottom: 1rem;">
                        <span>📍</span>
                        <span>${project.location}</span>
                    </div>
                    
                    <a href="project-detail.html?id=${project.id}" class="btn btn-primary" style="width: 100%; text-decoration: none;">
                        Voir les détails
                        <span>→</span>
                    </a>
                </div>
            </div>
        `).join('');

        projectsContainer.innerHTML = projectsHtml;
    }

    loadNews() {
        const newsContainer = document.querySelector('.news-grid');
        if (!newsContainer) return;

        const newsHtml = getRecentNews(3).map(article => `
            <div class="card">
                <div style="position: relative; overflow: hidden; height: 200px;">
                    <img src="${article.image}" alt="${article.title}" class="card-image">
                    <div style="position: absolute; top: 1rem; left: 1rem;">
                        <span class="badge badge-${article.category === 'Événement' ? 'warning' : article.category === 'Projet' ? 'success' : 'info'}">
                            ${article.category}
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <div style="display: flex; gap: 1rem; font-size: 0.875rem; color: var(--gray-500); margin-bottom: 1rem;">
                        <span>📅 ${formatDate(article.date)}</span>
                        <span>👤 ${article.author}</span>
                    </div>
                    <h3 class="card-title">${article.title}</h3>
                    <p class="card-description">${article.excerpt}</p>
                    
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin: 1rem 0;">
                        ${article.tags.map(tag => `
                            <span style="display: inline-flex; align-items: center; gap: 0.25rem; padding: 0.25rem 0.5rem; background: var(--gray-100); color: var(--gray-700); font-size: 0.75rem; border-radius: 1rem;">
                                🏷️ ${tag}
                            </span>
                        `).join('')}
                    </div>
                    
                    <a href="news-detail.html?id=${article.id}" class="btn btn-ghost" style="width: 100%; text-decoration: none;">
                        Lire la suite
                        <span>→</span>
                    </a>
                </div>
            </div>
        `).join('');

        newsContainer.innerHTML = newsHtml;
    }

    formatNumber(num) {
        if (num >= 1000000) {
            return (num / 1000000).toFixed(1) + 'M';
        }
        if (num >= 1000) {
            return (num / 1000).toFixed(0) + 'k';
        }
        return num.toString();
    }
}

// Initialiser l'application quand le DOM est prêt
document.addEventListener('DOMContentLoaded', () => {
    new FondationPHM();
});

// Fonctions utilitaires globales pour les autres pages
window.PHMUtils = {
    formatCurrency,
    formatDate,
    getProjectsByCategory,
    getRecentNews
};