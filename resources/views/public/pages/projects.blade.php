@extends('public.layouts.app')

@section('content')
    <section style="position: relative; height: 400px; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); display: flex; align-items: center; justify-content: center;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3);"></div>
        <div class="container" style="position: relative; z-index: 10; text-align: center; color: white;">
            <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: bold; margin-bottom: 1.5rem;">
                Nos Projets
            </h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 48rem; margin: 0 auto;">
                Découvrez nos initiatives concrètes qui transforment les communautés 
                et créent un impact durable au Burkina Faso
            </p>
        </div>
    </section>

    <div style="padding-top: 80px;">
        <div class="container">
            <!-- Filtres -->
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-bottom: 4rem;">
                <button class="btn btn-primary filter-btn active" data-category="all">
                    🎯 Tous les projets
                </button>
                <button class="btn btn-outline filter-btn" data-category="Infrastructure" style="border-color: var(--primary-blue); color: var(--primary-blue);">
                    🏗️ Infrastructure
                </button>
                <button class="btn btn-outline filter-btn" data-category="Logement" style="border-color: var(--primary-blue); color: var(--primary-blue);">
                    🏠 Logement
                </button>
                <button class="btn btn-outline filter-btn" data-category="Humanitaire" style="border-color: var(--primary-blue); color: var(--primary-blue);">
                    ❤️ Humanitaire
                </button>
                <button class="btn btn-outline filter-btn" data-category="Agriculture" style="border-color: var(--primary-blue); color: var(--primary-blue);">
                    🌾 Agriculture
                </button>
            </div>
            
            <!-- Grille de projets -->
            <div class="grid grid-cols-3 projects-grid" id="all-projects">
                <!-- Les projets seront chargés par JavaScript -->
            </div>
        </div>
    </div>

    <br>


    <script>
        // JavaScript spécifique pour la page projets
        document.addEventListener('DOMContentLoaded', function() {
            const projectsContainer = document.getElementById('all-projects');
            
            function loadAllProjects() {
                const projectsHtml = siteData.projects.map(project => `
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
                                    <span style="font-weight: 600; color: var(--primary-blue);">${project.completion}%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" style="width: ${project.completion}%; background: linear-gradient(90deg, var(--primary-blue), var(--primary-blue-dark));"></div>
                                </div>
                            </div>
                            
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin: 1rem 0;">
                                <div style="text-align: center; padding: 0.75rem; background: var(--gray-50); border-radius: 0.5rem;">
                                    <div style="font-weight: bold; font-size: 1.125rem;">${formatCurrency(project.budget)}</div>
                                    <div style="font-size: 0.75rem; color: var(--gray-600);">Budget</div>
                                </div>
                                <div style="text-align: center; padding: 0.75rem; background: rgba(59, 130, 246, 0.1); border-radius: 0.5rem;">
                                    <div style="font-weight: bold; font-size: 1.125rem; color: var(--primary-blue);">${project.beneficiaries}</div>
                                    <div style="font-size: 0.75rem; color: var(--gray-600);">Bénéficiaires</div>
                                </div>
                            </div>
                            
                            <div style="display: flex; align-items: center; gap: 0.5rem; color: var(--gray-600); font-size: 0.875rem; margin-bottom: 1rem;">
                                <span>📍</span>
                                <span>${project.location}</span>
                            </div>
                            
                            <button class="btn" style="width: 100%; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); color: white;" onclick="showProjectDetails(${project.id})">
                                Voir les détails
                                <span>→</span>
                            </button>
                        </div>
                    </div>
                `).join('');

                projectsContainer.innerHTML = projectsHtml;
            }

            // Charger tous les projets au démarrage
            loadAllProjects();

            // Fonction pour afficher les détails d'un projet
            window.showProjectDetails = function(projectId) {
                const project = siteData.projects.find(p => p.id === projectId);
                if (project) {
                    // Créer une modal ou rediriger vers une page de détails
                    alert(`Projet: ${project.title}\n\nDétails:\n${project.details.join('\n')}\n\nTimeline: ${project.timeline}\nBudget: ${formatCurrency(project.budget)}`);
                }
            };
        });
    </script>

@endsection