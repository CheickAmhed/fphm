@extends('public.layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
    </section>

    <!-- Section Statistiques -->
    <section class="section stats-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="color: white;">
                    Notre Impact
                    <span style="color: #fbbf24; margin-top: 0.5rem;">En Chiffres</span>
                </h2>
                <p class="section-subtitle" style="color: #d1d5db;">
                    Des résultats concrets qui témoignent de notre engagement 
                    pour le développement durable du Burkina Faso
                </p>
            </div>
            
            <div class="stats-grid">
                <!-- Les statistiques seront chargées par JavaScript -->
            </div>
            
            <div style="text-align: center; margin-top: 4rem;">
                <div style="display: inline-flex; align-items: center; gap: 0.75rem; background: rgba(249, 115, 22, 0.2); border: 1px solid rgba(249, 115, 22, 0.3); border-radius: 50px; padding: 0.75rem 1.5rem; color: #fbbf24;">
                    📈 Des résultats qui parlent d'eux-mêmes
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section class="section" style="background: linear-gradient(135deg, var(--gray-50), white);">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Nos Projets
                    <span style="color: var(--primary-orange); margin-top: 0.5rem;">En Action</span>
                </h2>
                <p class="section-subtitle">
                    Découvrez nos initiatives concrètes qui transforment les communautés 
                    et créent un impact durable au Burkina Faso
                </p>
            </div>
            
            <!-- Filtres -->
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-bottom: 3rem;">
                <button class="btn btn-primary filter-btn active" data-category="all">
                    🎯 Tous les projets
                </button>
                <button class="btn btn-outline filter-btn" data-category="Infrastructure">
                    🏗️ Infrastructure
                </button>
                <button class="btn btn-outline filter-btn" data-category="Logement">
                    🏠 Logement
                </button>
                <button class="btn btn-outline filter-btn" data-category="Humanitaire">
                    ❤️ Humanitaire
                </button>
                <button class="btn btn-outline filter-btn" data-category="Agriculture">
                    🌾 Agriculture
                </button>
            </div>
            
            <div class="projects-grid">
                <!-- Les projets seront chargés par JavaScript -->
            </div>
            
            <div style="text-align: center; margin-top: 4rem;">
                <a href="projects.html" class="btn btn-outline btn-lg">
                    Voir tous nos projets →
                </a>
            </div>
        </div>
    </section>

    <!-- Section Actualités -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Actualités
                    <span style="color: var(--primary-orange); margin-top: 0.5rem;">& Événements</span>
                </h2>
                <p class="section-subtitle">
                    Restez informé de nos dernières réalisations, événements 
                    et initiatives qui marquent notre engagement quotidien
                </p>
            </div>
            
            <div class="news-grid">
                <!-- Les actualités seront chargées par JavaScript -->
            </div>
            
            <div style="text-align: center; margin-top: 4rem;">
                <a href="news.html" class="btn btn-outline btn-lg">
                    Voir toutes les actualités →
                </a>
            </div>
        </div>
    </section>

    <!-- Section CTA -->
    <section class="section" style="background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(249, 115, 22, 0.2)); position: relative; overflow: hidden;">
        <!-- Pattern de fond -->
        <div style="position: absolute; inset: 0; opacity: 0.1; background-image: radial-gradient(circle at 20px 20px, rgba(249,115,22,0.3) 2px, transparent 0); background-size: 60px 60px;"></div>
        
        <div class="container" style="position: relative;">
            <div class="section-header">
                <h2 class="section-title">
                    Agissons
                    <span style="color: var(--primary-orange); margin-top: 0.5rem;">Ensemble</span>
                </h2>
                <p class="section-subtitle" style="color: var(--gray-700);">
                    Votre soutien, sous toutes ses formes, est essentiel pour poursuivre 
                    notre mission et créer un impact durable au Burkina Faso
                </p>
            </div>
            
            <div class="cta-grid" style="margin-bottom: 4rem;">
                <div class="card" style="text-align: center;">
                    <div class="card-content">
                        <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; border-radius: 50%; background: linear-gradient(135deg, var(--red-500), var(--red-600)); display: flex; align-items: center; justify-content: center; transition: transform var(--transition-normal);">
                            <span style="font-size: 2rem;">❤️</span>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color: var(--gray-900);">Faire un don</h3>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">Contribuez financièrement à nos projets et soutenez notre mission</p>
                        <a href="donate.html" class="btn btn-primary" style="width: 100%; text-decoration: none;">
                            Donner maintenant →
                        </a>
                    </div>
                </div>
                
                <div class="card" style="text-align: center;">
                    <div class="card-content">
                        <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; border-radius: 50%; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); display: flex; align-items: center; justify-content: center; transition: transform var(--transition-normal);">
                            <span style="font-size: 2rem;">👥</span>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color: var(--gray-900);">Devenir bénévole</h3>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">Rejoignez nos équipes et participez directement à nos actions</p>
                        <a href="volunteer.html" class="btn" style="width: 100%; text-decoration: none; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); color: white;">
                            Nous rejoindre →
                        </a>
                    </div>
                </div>
                
                <div class="card" style="text-align: center;">
                    <div class="card-content">
                        <div style="width: 80px; height: 80px; margin: 0 auto 1.5rem; border-radius: 50%; background: linear-gradient(135deg, var(--green-500), #059669); display: flex; align-items: center; justify-content: center; transition: transform var(--transition-normal);">
                            <span style="font-size: 2rem;">🤝</span>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color: var(--gray-900);">Partenariat</h3>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">Collaborez avec nous pour amplifier l'impact de nos initiatives</p>
                        <a href="contact.html" class="btn" style="width: 100%; text-decoration: none; background: linear-gradient(135deg, var(--green-500), #059669); color: white;">
                            Nous contacter →
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Message de fin -->
            <div style="text-align: center;">
                <div style="background: rgba(255,255,255,0.8); backdrop-filter: blur(10px); border-radius: 1.5rem; padding: 2rem; box-shadow: var(--shadow-lg); border: 1px solid rgba(249, 115, 22, 0.2);">
                    <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem; color: var(--gray-900);">
                        "L'union fait la force"
                    </h3>
                    <p style="color: var(--gray-700); font-size: 1.125rem; line-height: 1.6; max-width: 32rem; margin: 0 auto 1.5rem;">
                        Ensemble, nous construisons un avenir meilleur pour le Burkina Faso. 
                        Chaque geste compte, chaque contribution fait la différence.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; font-size: 0.875rem; color: var(--gray-600);">
                        <span style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="width: 8px; height: 8px; background: var(--primary-orange); border-radius: 50%;"></div>
                            Impact direct
                        </span>
                        <span style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="width: 8px; height: 8px; background: var(--primary-orange); border-radius: 50%;"></div>
                            Transparence totale
                        </span>
                        <span style="display: flex; align-items: center; gap: 0.5rem;">
                            <div style="width: 8px; height: 8px; background: var(--primary-orange); border-radius: 50%;"></div>
                            Suivi des résultats
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection