@extends('public.layouts.app')

@section('content')
    <section style="padding-top: 80px; position: relative; height: 400px; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); display: flex; align-items: center; justify-content: center;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3);"></div>
        <div class="container" style="position: relative; z-index: 10; text-align: center; color: white;">
            <div style="font-size: 4rem; margin-bottom: 1.5rem;">🤝</div>
            <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: bold; margin-bottom: 1.5rem;">
                Nous rejoindre
            </h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 48rem; margin: 0 auto;">
                Rejoignez nos équipes et participez directement à nos actions 
                pour le développement du Burkina Faso
            </p>
        </div>
    </section>

    <div style="padding-top: 80px;">
        <div class="container">
            <!-- Pourquoi nous rejoindre -->
            <section style="margin-bottom: 5rem;">
                <div class="section-header">
                    <h2 class="section-title">Pourquoi nous rejoindre ?</h2>
                    <p class="section-subtitle">
                        Faire partie de la Fondation PHM, c'est contribuer concrètement 
                        au développement durable et à l'amélioration des conditions de vie
                    </p>
                </div>
                
                <div class="grid grid-cols-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-content">
                            <div style="font-size: 3rem; margin-bottom: 1rem;">🌟</div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem;">Impact réel</h3>
                            <p style="color: var(--gray-600);">
                                Participez à des projets qui transforment concrètement la vie des communautés
                            </p>
                        </div>
                    </div>
                    
                    <div class="card" style="text-align: center;">
                        <div class="card-content">
                            <div style="font-size: 3rem; margin-bottom: 1rem;">🎓</div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem;">Développement personnel</h3>
                            <p style="color: var(--gray-600);">
                                Acquérez de nouvelles compétences et vivez une expérience humaine enrichissante
                            </p>
                        </div>
                    </div>
                    
                    <div class="card" style="text-align: center;">
                        <div class="card-content">
                            <div style="font-size: 3rem; margin-bottom: 1rem;">👥</div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem;">Équipe dynamique</h3>
                            <p style="color: var(--gray-600);">
                                Rejoignez une équipe passionnée et engagée dans le changement social
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Opportunités de bénévolat -->
            <section style="margin-bottom: 5rem;">
                <div class="section-header">
                    <h2 class="section-title">Opportunités de bénévolat</h2>
                    <p class="section-subtitle">
                        Découvrez les différentes façons de contribuer à nos missions
                    </p>
                </div>
                
                <div class="grid grid-cols-3" id="volunteer-opportunities">
                    <!-- Les opportunités seront chargées par JavaScript -->
                </div>
            </section>

            <!-- Formulaire de candidature -->
            <section style="margin-bottom: 5rem;">
                <div class="section-header">
                    <h2 class="section-title">Postuler maintenant</h2>
                    <p class="section-subtitle">
                        Remplissez le formulaire ci-dessous pour rejoindre notre équipe
                    </p>
                </div>
                
                <div style="max-width: 100%; margin: 0 auto;">
                    <form class="volunteer-form card">
                        <div class="card-content">
                            <div class="grid grid-cols-2" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                                <div>
                                    <label for="firstName" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Prénom *</label>
                                    <input 
                                        id="firstName" 
                                        name="firstName"
                                        type="text" 
                                        required 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                </div>
                                <div>
                                    <label for="lastName" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Nom *</label>
                                    <input 
                                        id="lastName" 
                                        name="lastName"
                                        type="text" 
                                        required 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                </div>
                                <div>
                                    <label for="email" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Email *</label>
                                    <input 
                                        id="email" 
                                        name="email"
                                        type="email" 
                                        required 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                </div>
                                <div>
                                    <label for="phone" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Téléphone *</label>
                                    <input 
                                        id="phone" 
                                        name="phone"
                                        type="tel" 
                                        required 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                </div>
                                <div>
                                    <label for="city" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Ville de résidence</label>
                                    <input 
                                        id="city" 
                                        name="city"
                                        type="text" 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                </div>
                                <div>
                                    <label for="availability" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Disponibilité</label>
                                    <select 
                                        id="availability" 
                                        name="availability"
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                        <option value="">Sélectionner...</option>
                                        <option value="weekend">Week-ends uniquement</option>
                                        <option value="part-time">Temps partiel</option>
                                        <option value="full-time">Temps plein</option>
                                        <option value="occasional">Ponctuel</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <label for="interests" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Domaines d'intérêt *</label>
                                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem;">
                                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="checkbox" name="interests" value="infrastructure"> Infrastructure
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="checkbox" name="interests" value="education"> Éducation
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="checkbox" name="interests" value="health"> Santé
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="checkbox" name="interests" value="agriculture"> Agriculture
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="checkbox" name="interests" value="communication"> Communication
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                                        <input type="checkbox" name="interests" value="administration"> Administration
                                    </label>
                                </div>
                            </div>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <label for="experience" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Expérience pertinente</label>
                                <textarea 
                                    id="experience" 
                                    name="experience"
                                    placeholder="Décrivez votre expérience dans le domaine humanitaire, associatif ou tout autre expérience pertinente..."
                                    style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem; height: 120px; resize: vertical;"
                                ></textarea>
                            </div>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <label for="motivation" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Motivation *</label>
                                <textarea 
                                    id="motivation" 
                                    name="motivation"
                                    placeholder="Expliquez pourquoi vous souhaitez rejoindre la Fondation PHM..."
                                    required
                                    style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem; height: 120px; resize: vertical;"
                                ></textarea>
                            </div>
                            
                            <div style="margin-bottom: 2rem;">
                                <label style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem;">
                                    <input type="checkbox" name="terms" required>
                                    J'accepte les conditions d'utilisation et la politique de confidentialité *
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                🚀 Envoyer ma candidature
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- Témoignages de bénévoles -->
            <section style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.2)); border-radius: 1.5rem; padding: 3rem;">
                <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 3rem; text-align: center;">
                    Témoignages de nos bénévoles
                </h2>
                
                <div class="grid grid-cols-3">
                    <div style="text-align: center;">
                        <img 
                            src="https://images.pexels.com/photos/30920008/pexels-photo-30920008.jpeg" 
                            alt="Marie Ouédraogo"
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; object-fit: cover;"
                        >
                        <blockquote style="font-style: italic; color: var(--gray-700); margin-bottom: 1rem;">
                            "Rejoindre la Fondation PHM a été une expérience transformatrice. 
                            J'ai pu contribuer concrètement à l'amélioration des conditions de vie de ma communauté."
                        </blockquote>
                        <cite style="font-weight: 600; color: var(--primary-blue);">
                            - Marie Ouédraogo, Bénévole depuis 2 ans
                        </cite>
                    </div>
                    
                    <div style="text-align: center;">
                        <img 
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" 
                            alt="Jean Kaboré"
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; object-fit: cover;"
                        >
                        <blockquote style="font-style: italic; color: var(--gray-700); margin-bottom: 1rem;">
                            "L'équipe de PHM m'a accueilli à bras ouverts. 
                            Ensemble, nous construisons un avenir meilleur pour le Burkina Faso."
                        </blockquote>
                        <cite style="font-weight: 600; color: var(--primary-blue);">
                            - Jean Kaboré, Coordinateur bénévole
                        </cite>
                    </div>
                    
                    <div style="text-align: center;">
                        <img 
                            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d" 
                            alt="Aminata Sawadogo"
                            style="width: 80px; height: 80px; border-radius: 50%; margin: 0 auto 1rem; object-fit: cover;"
                        >
                        <blockquote style="font-style: italic; color: var(--gray-700); margin-bottom: 1rem;">
                            "Chaque jour passé avec PHM renforce ma conviction 
                            que nous pouvons vraiment faire la différence ensemble."
                        </blockquote>
                        <cite style="font-weight: 600; color: var(--primary-blue);">
                            - Aminata Sawadogo, Formatrice bénévole
                        </cite>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <br>


    <script>
        // JavaScript pour la page volontariat
        document.addEventListener('DOMContentLoaded', function() {
            const opportunitiesContainer = document.getElementById('volunteer-opportunities');
            
            function loadVolunteerOpportunities() {
                const opportunitiesHtml = siteData.volunteerOpportunities.map(opportunity => `
                    <div class="card">
                        <div class="card-content">
                            <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;">
                                <span class="badge badge-info">${opportunity.type}</span>
                                <span style="color: var(--gray-500); font-size: 0.875rem;">📍 ${opportunity.location}</span>
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 1rem;">
                                ${opportunity.title}
                            </h3>
                            <p style="color: var(--gray-600); margin-bottom: 1rem;">
                                ${opportunity.description}
                            </p>
                            <div style="margin-bottom: 1.5rem;">
                                <h4 style="font-weight: 600; margin-bottom: 0.5rem; color: var(--gray-800);">Prérequis :</h4>
                                <ul style="list-style: none; padding: 0;">
                                    ${opportunity.requirements.map(req => `
                                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem;">
                                            <span style="color: var(--green-500);">✓</span>
                                            <span style="font-size: 0.875rem; color: var(--gray-600);">${req}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                            <button class="btn btn-primary" style="width: 100%;" onclick="applyForPosition('${opportunity.id}')">
                                Postuler
                            </button>
                        </div>
                    </div>
                `).join('');

                opportunitiesContainer.innerHTML = opportunitiesHtml;
            }

            // Fonction pour postuler à un poste
            window.applyForPosition = function(opportunityId) {
                // Faire défiler vers le formulaire
                const form = document.querySelector('.volunteer-form');
                form.scrollIntoView({ behavior: 'smooth', block: 'start' });
                
                // Pré-remplir le domaine d'intérêt correspondant
                const opportunity = siteData.volunteerOpportunities.find(opp => opp.id == opportunityId);
                if (opportunity) {
                    // Cocher la case correspondante
                    const checkboxes = document.querySelectorAll('input[name="interests"]');
                    checkboxes.forEach(checkbox => {
                        if (opportunity.type.toLowerCase().includes(checkbox.value)) {
                            checkbox.checked = true;
                        }
                    });
                }
            };

            // Charger les opportunités
            loadVolunteerOpportunities();
        });
    </script>

@endsection