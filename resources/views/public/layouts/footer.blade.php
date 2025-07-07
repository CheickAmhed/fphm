<footer class="footer">
        <!-- Newsletter -->
        <div class="footer-newsletter">
            <div class="container">
                <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Restez informé de nos actions</h3>
                <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">
                    Recevez nos dernières actualités et découvrez l'impact de nos projets
                </p>
                <form class="newsletter-form" style="display: flex; flex-wrap: wrap; gap: 1rem; max-width: 24rem; margin: 0 auto;">
                    <input 
                        type="email" 
                        placeholder="Votre adresse email" 
                        required
                        style="flex: 1; padding: 0.75rem 1rem; border-radius: 0.5rem; border: none; min-width: 200px;"
                    >
                    <button type="submit" class="btn" style="background: white; color: var(--primary-orange); font-weight: 600; padding: 0.75rem 1.5rem;">
                        S'abonner
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Footer Principal -->
        <div class="footer-main">
            <div class="container">
                <div class="footer-grid">
                    <!-- À propos -->
                    <div class="footer-section">
                        <a href="{{ url('/') }}" class="logo">
                            <div class="logo-icon">
                                <img src="{{ asset('img/logo.png') }}" alt="PHM logo" class="logo-img">
                            </div>
                        </a>
                        <p style="color: var(--gray-400); font-size: 0.875rem; line-height: 1.6; margin-bottom: 1rem;">
                            La Fondation PHM œuvre pour le développement durable du Burkina Faso à travers 
                            des projets d'infrastructure, de logement et d'aide humanitaire.
                        </p>
                        <div style="display: flex; gap: 1rem;">
                            <a href="#" style="color: var(--gray-400); font-size: 1.25rem; transition: color var(--transition-fast);">📘</a>
                            <a href="#" style="color: var(--gray-400); font-size: 1.25rem; transition: color var(--transition-fast);">🐦</a>
                            <a href="#" style="color: var(--gray-400); font-size: 1.25rem; transition: color var(--transition-fast);">📷</a>
                            <a href="#" style="color: var(--gray-400); font-size: 1.25rem; transition: color var(--transition-fast);">💼</a>
                        </div>
                    </div>

                    <!-- Liens rapides -->
                    <div class="footer-section">
                        <h3>Liens rapides</h3>
                        <ul>
                            <li><a href="about.html">À propos</a></li>
                            <li><a href="projects.html">Nos projets</a></li>
                            <li><a href="news.html">Actualités</a></li>
                            <li><a href="gallery.html">Galerie</a></li>
                            <li><a href="volunteer.html">Volontariat</a></li>
                        </ul>
                    </div>

                    <!-- Nos domaines -->
                    <div class="footer-section">
                        <h3>Nos domaines</h3>
                        <ul>
                            <li>Infrastructure hydraulique</li>
                            <li>Logements sociaux</li>
                            <li>Aide humanitaire</li>
                            <li>Agriculture durable</li>
                            <li>Développement communautaire</li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="footer-section">
                        <h3>Contact</h3>
                        <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <span>📍</span>
                            <span style="color: var(--gray-400); font-size: 0.875rem;">Avenue de la Liberté, Secteur 15, Ouagadougou, Burkina Faso</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <span>📞</span>
                            <span style="color: var(--gray-400); font-size: 0.875rem;">+226 25 30 45 67</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <span>✉️</span>
                            <span style="color: var(--gray-400); font-size: 0.875rem;">contact@fondationphm.org</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 1rem;">
                    <div style="font-size: 0.875rem;">
                        © 2024 <a href="{{ url('/login') }}" target="_blank" style="color: #ef4444">Fondation PHM</a>. Tous droits réservés.
                    </div>
                    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 1.5rem; font-size: 0.875rem;">
                        <a href="#" style="color: var(--gray-400); text-decoration: none;">Politique de confidentialité</a>
                        <a href="#" style="color: var(--gray-400); text-decoration: none;">Conditions d'utilisation</a>
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <span>Fait avec</span>
                            <span style="color: #ef4444;">❤️</span>
                            <span>au Burkina Faso</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>