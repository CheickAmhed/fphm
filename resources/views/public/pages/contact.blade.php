@extends('public.layouts.app')

@section('content')
    <section style="position: relative; height: 400px; background: linear-gradient(135deg, var(--green-500), #059669); display: flex; align-items: center; justify-content: center;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3);"></div>
        <div class="container" style="position: relative; z-index: 10; text-align: center; color: white;">
            <div style="font-size: 4rem; margin-bottom: 1.5rem;">📞</div>
            <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: bold; margin-bottom: 1.5rem;">
                Contactez-nous
            </h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 48rem; margin: 0 auto;">
                Nous sommes là pour répondre à vos questions, discuter de partenariats 
                ou vous accompagner dans vos démarches
            </p>
        </div>
    </section>

    <div style="padding-top: 80px;">
        <div class="container">
            <div class="grid grid-cols-2" style="gap: 4rem; align-items: flex-start;">
                <!-- Informations de contact -->
                <div>
                    <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem;">
                        Nos coordonnées
                    </h2>
                    
                    <div style="display: flex; flex-direction: column; gap: 2rem;">
                        <!-- Adresse -->
                        <div class="card">
                            <div class="card-content">
                                <div style="display: flex; align-items: start; gap: 1rem;">
                                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-orange), var(--primary-orange-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <span style="font-size: 1.5rem;">📍</span>
                                    </div>
                                    <div>
                                        <h3 style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">Adresse</h3>
                                        <p style="color: var(--gray-600);">${siteData.contact.address}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Téléphone -->
                        <div class="card">
                            <div class="card-content">
                                <div style="display: flex; align-items: start; gap: 1rem;">
                                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <span style="font-size: 1.5rem;">📞</span>
                                    </div>
                                    <div>
                                        <h3 style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">Téléphone</h3>
                                        <p style="color: var(--gray-600);">${siteData.contact.phone}</p>
                                        <p style="color: var(--gray-500); font-size: 0.875rem;">Lun - Ven : 8h00 - 17h00</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="card">
                            <div class="card-content">
                                <div style="display: flex; align-items: start; gap: 1rem;">
                                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--green-500), #059669); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                        <span style="font-size: 1.5rem;">✉️</span>
                                    </div>
                                    <div>
                                        <h3 style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">Email</h3>
                                        <p style="color: var(--gray-600);">${siteData.contact.email}</p>
                                        <p style="color: var(--gray-500); font-size: 0.875rem;">Réponse sous 24h</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Réseaux sociaux -->
                        <div class="card">
                            <div class="card-content">
                                <h3 style="font-size: 1.125rem; font-weight: bold; margin-bottom: 1rem;">Suivez-nous</h3>
                                <div style="display: flex; gap: 1rem;">
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #1877f2; color: white; border-radius: 50%; text-decoration: none;">📘</a>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #1da1f2; color: white; border-radius: 50%; text-decoration: none;">🐦</a>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #e4405f; color: white; border-radius: 50%; text-decoration: none;">📷</a>
                                    <a href="#" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: #0077b5; color: white; border-radius: 50%; text-decoration: none;">💼</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de contact -->
                <div>
                    <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem;">
                        Envoyez-nous un message
                    </h2>
                    
                    <form class="contact-form card">
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
                                    <label for="phone" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Téléphone</label>
                                    <input 
                                        id="phone" 
                                        name="phone"
                                        type="tel" 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                </div>
                            </div>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <label for="subject" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Sujet *</label>
                                <select 
                                    id="subject" 
                                    name="subject"
                                    required
                                    style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                >
                                    <option value="">Sélectionnez un sujet...</option>
                                    <option value="partnership">Partenariat</option>
                                    <option value="volunteer">Bénévolat</option>
                                    <option value="donation">Don</option>
                                    <option value="project">Information sur un projet</option>
                                    <option value="media">Demande média</option>
                                    <option value="other">Autre</option>
                                </select>
                            </div>
                            
                            <div style="margin-bottom: 1.5rem;">
                                <label for="message" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Message *</label>
                                <textarea 
                                    id="message" 
                                    name="message"
                                    placeholder="Votre message..."
                                    required
                                    style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem; height: 150px; resize: vertical;"
                                ></textarea>
                            </div>
                            
                            <div style="margin-bottom: 2rem;">
                                <label style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem;">
                                    <input type="checkbox" name="terms" required>
                                    J'accepte que mes données soient utilisées pour répondre à ma demande *
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                📨 Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Carte de localisation -->
            <section style="margin-top: 5rem;">
                <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                    Nous trouver
                </h2>
                
                <div class="card">
                    <div style="height: 400px; background: var(--gray-200); border-radius: 1rem; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                        <!-- Simulation d'une carte -->
                        <div style="position: absolute; inset: 0; background: linear-gradient(45deg, #4ade80, #22c55e); opacity: 0.1;"></div>
                        <div style="text-align: center; z-index: 10;">
                            <div style="font-size: 3rem; margin-bottom: 1rem;">🗺️</div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--gray-800); margin-bottom: 0.5rem;">
                                Carte interactive
                            </h3>
                            <p style="color: var(--gray-600);">
                                Intégration Google Maps ou OpenStreetMap<br>
                                avec localisation précise de nos bureaux
                            </p>
                            <div style="margin-top: 1rem;">
                                <span style="display: inline-flex; align-items: center; gap: 0.5rem; background: var(--primary-orange); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600;">
                                    📍 Ouagadougou, Burkina Faso
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <section style="margin-top: 5rem;">
                <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                    Questions fréquentes
                </h2>
                
                <div style="max-width: 48rem; margin: 0 auto;">
                    <div class="faq-list">
                        <div class="card faq-item" style="margin-bottom: 1rem;">
                            <div class="card-content">
                                <button class="faq-question" style="width: 100%; text-align: left; background: none; border: none; padding: 0; font-size: 1.125rem; font-weight: 600; color: var(--gray-900); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                                    Comment puis-je faire un don à la fondation ?
                                    <span class="faq-toggle">+</span>
                                </button>
                                <div class="faq-answer" style="display: none; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--gray-200); color: var(--gray-600);">
                                    Vous pouvez faire un don en ligne via notre page dédiée, par virement bancaire, ou par Mobile Money. Tous les dons donnent droit à un reçu fiscal.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card faq-item" style="margin-bottom: 1rem;">
                            <div class="card-content">
                                <button class="faq-question" style="width: 100%; text-align: left; background: none; border: none; padding: 0; font-size: 1.125rem; font-weight: 600; color: var(--gray-900); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                                    Comment devenir bénévole ?
                                    <span class="faq-toggle">+</span>
                                </button>
                                <div class="faq-answer" style="display: none; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--gray-200); color: var(--gray-600);">
                                    Rendez-vous sur notre page "Nous rejoindre" pour découvrir les opportunités disponibles et remplir le formulaire de candidature.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card faq-item" style="margin-bottom: 1rem;">
                            <div class="card-content">
                                <button class="faq-question" style="width: 100%; text-align: left; background: none; border: none; padding: 0; font-size: 1.125rem; font-weight: 600; color: var(--gray-900); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                                    Puis-je visiter vos projets ?
                                    <span class="faq-toggle">+</span>
                                </button>
                                <div class="faq-answer" style="display: none; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--gray-200); color: var(--gray-600);">
                                    Oui, nous organisons régulièrement des visites de terrain. Contactez-nous pour planifier votre visite en fonction de votre disponibilité et de nos activités.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card faq-item">
                            <div class="card-content">
                                <button class="faq-question" style="width: 100%; text-align: left; background: none; border: none; padding: 0; font-size: 1.125rem; font-weight: 600; color: var(--gray-900); display: flex; justify-content: space-between; align-items: center; cursor: pointer;">
                                    Comment établir un partenariat ?
                                    <span class="faq-toggle">+</span>
                                </button>
                                <div class="faq-answer" style="display: none; margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--gray-200); color: var(--gray-600);">
                                    Envoyez-nous un message via le formulaire ci-dessus en précisant "Partenariat" comme sujet. Nous étudierons votre proposition et vous recontacterons rapidement.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script>
        // JavaScript pour la page contact
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ accordéon
            const faqQuestions = document.querySelectorAll('.faq-question');
            
            faqQuestions.forEach(question => {
                question.addEventListener('click', function() {
                    const answer = this.parentElement.querySelector('.faq-answer');
                    const toggle = this.querySelector('.faq-toggle');
                    
                    // Fermer les autres FAQ
                    faqQuestions.forEach(otherQuestion => {
                        if (otherQuestion !== this) {
                            const otherAnswer = otherQuestion.parentElement.querySelector('.faq-answer');
                            const otherToggle = otherQuestion.querySelector('.faq-toggle');
                            otherAnswer.style.display = 'none';
                            otherToggle.textContent = '+';
                        }
                    });
                    
                    // Toggle la FAQ actuelle
                    if (answer.style.display === 'none' || answer.style.display === '') {
                        answer.style.display = 'block';
                        toggle.textContent = '−';
                    } else {
                        answer.style.display = 'none';
                        toggle.textContent = '+';
                    }
                });
            });
            
            // Insertion des données de contact
            const contactElements = document.querySelectorAll('[data-contact]');
            contactElements.forEach(element => {
                const contactType = element.getAttribute('data-contact');
                if (siteData.contact[contactType]) {
                    element.textContent = siteData.contact[contactType];
                }
            });
        });
    </script>

@endsection