@extends('public.layouts.app')

@section('content')
    <section style="position: relative; height: 400px; background: linear-gradient(135deg, var(--green-500), #059669); display: flex; align-items: center; justify-content: center;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3);"></div>
        <div class="container" style="position: relative; z-index: 10; text-align: center; color: white;">
            <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: bold; margin-bottom: 1.5rem;">
                Actualités & Événements
            </h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 48rem; margin: 0 auto;">
                Restez informé de nos dernières réalisations, événements 
                et initiatives qui marquent notre engagement quotidien
            </p>
        </div>
    </section>

    <div style="padding-top: 80px;">
        <div class="container">
            <!-- Filtres par catégorie -->
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-bottom: 4rem;">
                <button class="btn btn-primary news-filter active" data-category="all">
                    📰 Toutes les actualités
                </button>
                <button class="btn btn-outline news-filter" data-category="Événement" style="border-color: var(--yellow-500); color: var(--yellow-500);">
                    🎉 Événements
                </button>
                <button class="btn btn-outline news-filter" data-category="Projet" style="border-color: var(--green-500); color: var(--green-500);">
                    🏗️ Projets
                </button>
                <button class="btn btn-outline news-filter" data-category="Formation" style="border-color: var(--primary-blue); color: var(--primary-blue);">
                    📚 Formations
                </button>
            </div>
            
            <!-- Articles en vedette -->
            <section style="margin-bottom: 4rem;">
                <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                    À la une
                </h2>
                <div class="grid grid-cols-2" style="gap: 2rem; align-items: center;">
                    <div>
                        <img 
                            src="https://images.pexels.com/photos/32826199/pexels-photo-32826199.jpeg"
                            alt="Festival Allons à Louda"
                            style="width: 100%; height: 300px; border-radius: 1rem; box-shadow: var(--shadow-lg);"
                        >
                    </div>
                    <div>
                        <div style="margin-bottom: 1rem;">
                            <span class="badge badge-warning">Événement</span>
                            <span style="color: var(--gray-500); font-size: 0.875rem; margin-left: 1rem;">📅 15 février 2024</span>
                        </div>
                        <h3 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 1rem;">
                            Lancement du Festival "Allons à Louda" 2024
                        </h3>
                        <p style="color: var(--gray-700); font-size: 1.125rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Un événement culturel et solidaire pour célébrer la résilience de la communauté. 
                            Le Festival "Allons à Louda" revient pour sa 5e édition avec un programme riche 
                            en activités culturelles, artistiques et de sensibilisation.
                        </p>
                        <a href="#" class="btn btn-primary">
                            Lire l'article complet →
                        </a>
                    </div>
                </div>
            </section>
            
            <!-- Grille d'actualités -->
            <div class="grid grid-cols-3 news-grid" id="all-news">
                <!-- Les actualités seront chargées par JavaScript -->
            </div>

            <!-- Newsletter -->
            <section style="margin-top: 5rem; background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(249, 115, 22, 0.2)); border-radius: 1.5rem; padding: 3rem; text-align: center;">
                <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--gray-900); margin-bottom: 1rem;">
                    Ne manquez aucune actualité
                </h3>
                <p style="color: var(--gray-700); margin-bottom: 2rem;">
                    Recevez nos dernières nouvelles directement dans votre boîte email
                </p>
                <form class="newsletter-form" style="display: flex; flex-wrap: wrap; gap: 1rem; max-width: 24rem; margin: 0 auto;">
                    <input 
                        type="email" 
                        placeholder="Votre adresse email" 
                        required 
                        style="flex: 1; padding: 0.75rem 1rem; border: 1px solid var(--gray-300); border-radius: 0.5rem; min-width: 200px;"
                    >
                    <button type="submit" class="btn btn-primary">
                        S'abonner
                    </button>
                </form>
            </section>
        </div>
    </div>

    <br>


    <script>
        // JavaScript spécifique pour la page actualités
        document.addEventListener('DOMContentLoaded', function() {
            const newsContainer = document.getElementById('all-news');
            const newsFilters = document.querySelectorAll('.news-filter');
            let currentFilter = 'all';
            
            function loadAllNews() {
                // Créer des actualités supplémentaires pour la démonstration
                const additionalNews = [
                    {
                        id: 4,
                        title: "Succès de la campagne de vaccination à Louda",
                        excerpt: "200 enfants vaccinés grâce à notre partenariat avec l'OMS",
                        image: "https://images.unsplash.com/photo-1576091160550-2173dba999ef",
                        category: "Projet",
                        date: "2024-02-01",
                        author: "Dr. Sankara",
                        tags: ["santé", "vaccination", "enfants"]
                    },
                    {
                        id: 5,
                        title: "Formation en maraîchage pour les femmes",
                        excerpt: "80 femmes formées aux techniques modernes de culture maraîchère",
                        image: "https://images.unsplash.com/photo-1464226184884-fa280b87c399",
                        category: "Formation",
                        date: "2024-01-20",
                        author: "Équipe Agriculture",
                        tags: ["formation", "femmes", "maraîchage"]
                    },
                    {
                        id: 6,
                        title: "Journée portes ouvertes de la fondation",
                        excerpt: "Découvrez nos bureaux et rencontrez nos équipes le 15 mars",
                        image: "https://images.unsplash.com/photo-1511578314322-379afb476865",
                        category: "Événement",
                        date: "2024-03-01",
                        author: "Communication PHM",
                        tags: ["événement", "portes-ouvertes", "visite"]
                    }
                ];

                const allNews = [...siteData.news, ...additionalNews];
                const filteredNews = currentFilter === 'all' ? allNews : allNews.filter(article => article.category === currentFilter);

                const newsHtml = filteredNews.map(article => `
                    <div class="card news-article" data-category="${article.category}">
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
                            
                            <button class="btn btn-ghost" style="width: 100%;" onclick="readArticle(${article.id})">
                                Lire la suite
                                <span>→</span>
                            </button>
                        </div>
                    </div>
                `).join('');

                newsContainer.innerHTML = newsHtml;
            }

            // Filtres d'actualités
            newsFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    newsFilters.forEach(f => {
                        f.classList.remove('active');
                        f.classList.add('btn-outline');
                        f.classList.remove('btn-primary');
                    });
                    
                    this.classList.add('active');
                    this.classList.remove('btn-outline');
                    this.classList.add('btn-primary');
                    
                    currentFilter = this.dataset.category;
                    loadAllNews();
                });
            });

            // Fonction pour lire un article
            window.readArticle = function(articleId) {
                // Simuler l'ouverture d'un article
                alert(`Ouverture de l'article ${articleId}...\n\nCette fonctionnalité sera implémentée avec le backend Laravel.`);
            };

            // Charger les actualités au démarrage
            loadAllNews();
        });
    </script>

@endsection