@extends('public.layouts.app')

@section('content')
    <section style="position: relative; height: 400px; background: linear-gradient(135deg, var(--red-500), var(--red-600)); display: flex; align-items: center; justify-content: center;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3);"></div>
        <div class="container" style="position: relative; z-index: 10; text-align: center; color: white;">
            <div style="font-size: 4rem; margin-bottom: 1.5rem;">❤️</div>
            <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: bold; margin-bottom: 1.5rem;">
                Faire un don
            </h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 48rem; margin: 0 auto;">
                Votre générosité transforme des vies. Chaque contribution compte 
                pour construire un avenir meilleur au Burkina Faso.
            </p>
        </div>
    </section>

    <div style="padding-top: 80px;">
        <div class="container" style="max-width: 64rem; margin: 0 auto;">
            <form class="donation-form" style="display: flex; flex-direction: column; gap: 3rem;">
                
                <!-- Packages de don -->
                <section>
                    <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                        Choisissez votre contribution
                    </h2>
                    <div class="grid grid-cols-3" style="margin-bottom: 2rem;">
                        <div class="card donation-package" style="cursor: pointer; text-align: center;" data-package="basic">
                            <div class="card-content">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--red-500), var(--red-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem;">
                                    🎁
                                </div>
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">
                                    Soutien de base
                                </h3>
                                <div style="font-size: 1.5rem; font-weight: bold; color: var(--red-600); margin-bottom: 1rem;">
                                    5 000 FCFA
                                </div>
                                <p style="color: var(--gray-600); margin-bottom: 1rem;">Contribuer aux frais de fonctionnement</p>
                                <span class="badge badge-info">Aide au fonctionnement quotidien</span>
                            </div>
                        </div>
                        
                        <div class="card donation-package" style="cursor: pointer; text-align: center;" data-package="project">
                            <div class="card-content">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--red-500), var(--red-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem;">
                                    🎁
                                </div>
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">
                                    Soutien projet
                                </h3>
                                <div style="font-size: 1.5rem; font-weight: bold; color: var(--red-600); margin-bottom: 1rem;">
                                    25 000 FCFA
                                </div>
                                <p style="color: var(--gray-600); margin-bottom: 1rem;">Financer une partie d'un projet</p>
                                <span class="badge badge-info">Participation directe à un projet</span>
                            </div>
                        </div>
                        
                        <div class="card donation-package" style="cursor: pointer; text-align: center;" data-package="sponsor">
                            <div class="card-content">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--red-500), var(--red-600)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 1.5rem;">
                                    🎁
                                </div>
                                <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">
                                    Parrainage
                                </h3>
                                <div style="font-size: 1.5rem; font-weight: bold; color: var(--red-600); margin-bottom: 1rem;">
                                    50 000 FCFA
                                </div>
                                <p style="color: var(--gray-600); margin-bottom: 1rem;">Parrainer une famille ou un projet</p>
                                <span class="badge badge-info">Impact direct sur une famille</span>
                            </div>
                        </div>
                    </div>

                    <!-- Montant personnalisé -->
                    <div class="card">
                        <div class="card-content">
                            <h3 style="display: flex; align-items: center; font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem;">
                                <span style="font-size: 1.25rem; color: var(--red-500); margin-right: 0.5rem;">❤️</span>
                                Montant personnalisé
                            </h3>
                            <div style="display: flex; align-items: center; gap: 1rem;">
                                <div style="flex: 1;">
                                    <label for="custom-amount" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Montant en FCFA</label>
                                    <input 
                                        id="custom-amount" 
                                        name="amount"
                                        type="number" 
                                        placeholder="Entrez votre montant" 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem;"
                                    >
                                </div>
                                <button type="button" class="btn btn-outline custom-btn">
                                    Choisir
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Mode de paiement -->
                <section>
                    <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                        Mode de paiement
                    </h2>
                    <div class="grid grid-cols-2">
                        <div class="card payment-method" style="cursor: pointer;" data-method="mobile">
                            <div class="card-content" style="text-align: center;">
                                <div style="font-size: 3rem; color: var(--primary-blue); margin-bottom: 1rem;">📱</div>
                                <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Mobile Money</h3>
                                <p style="color: var(--gray-600);">Orange Money, Moov Money, etc.</p>
                            </div>
                        </div>
                        
                        <div class="card payment-method" style="cursor: pointer;" data-method="card">
                            <div class="card-content" style="text-align: center;">
                                <div style="font-size: 3rem; color: var(--green-500); margin-bottom: 1rem;">💳</div>
                                <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">Carte bancaire</h3>
                                <p style="color: var(--gray-600);">Visa, Mastercard, etc.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Informations du donateur -->
                <section>
                    <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                        Vos informations
                    </h2>
                    <div class="card">
                        <div class="card-content">
                            <div class="grid grid-cols-2" style="gap: 1.5rem;">
                                <div>
                                    <label for="name" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Nom complet *</label>
                                    <input 
                                        id="name" 
                                        name="name"
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
                                    <label for="message" style="display: block; font-weight: 600; margin-bottom: 0.5rem;">Message (optionnel)</label>
                                    <textarea 
                                        id="message" 
                                        name="message"
                                        placeholder="Votre message..." 
                                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--gray-300); border-radius: 0.5rem; height: 100px; resize: vertical;"
                                    ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Sécurité -->
                <section style="background: var(--gray-50); border-radius: 1.5rem; padding: 2rem;">
                    <div style="text-align: center; margin-bottom: 1.5rem;">
                        <div style="font-size: 3rem; color: var(--green-500); margin-bottom: 1rem;">🛡️</div>
                        <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">
                            Paiement sécurisé
                        </h3>
                        <p style="color: var(--gray-600);">
                            Vos informations sont protégées et votre don est traité de manière sécurisée
                        </p>
                    </div>
                    <div class="grid grid-cols-3" style="text-align: center;">
                        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <span style="color: var(--green-500);">✅</span>
                            <span style="font-size: 0.875rem; color: var(--gray-600);">Cryptage SSL</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <span style="color: var(--green-500);">✅</span>
                            <span style="font-size: 0.875rem; color: var(--gray-600);">Reçu fiscal</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                            <span style="color: var(--green-500);">✅</span>
                            <span style="font-size: 0.875rem; color: var(--gray-600);">Transparence totale</span>
                        </div>
                    </div>
                </section>

                <!-- Bouton de soumission -->
                <div style="text-align: center;">
                    <button 
                        type="submit" 
                        class="btn btn-lg" 
                        style="background: linear-gradient(135deg, var(--red-500), var(--red-600)); color: white; padding: 1rem 3rem; font-size: 1.125rem; font-weight: 600; box-shadow: var(--shadow-lg); transform: none; transition: all var(--transition-normal);"
                    >
                        <span style="margin-right: 0.5rem;">❤️</span>
                        Finaliser mon don
                    </button>
                    <p style="font-size: 0.875rem; color: var(--gray-600); margin-top: 1rem;">
                        En cliquant sur "Finaliser mon don", vous acceptez nos conditions d'utilisation
                    </p>
                </div>
            </form>
        </div>
    </div>


    <script>
        // JavaScript pour la page de donation
        document.addEventListener('DOMContentLoaded', function() {
            const packages = document.querySelectorAll('.donation-package');
            const paymentMethods = document.querySelectorAll('.payment-method');
            const customBtn = document.querySelector('.custom-btn');
            const customAmount = document.getElementById('custom-amount');
            
            let selectedPackage = null;
            let selectedPaymentMethod = 'mobile';
            
            // Sélection des packages
            packages.forEach(pkg => {
                pkg.addEventListener('click', function() {
                    packages.forEach(p => {
                        p.style.border = '1px solid var(--gray-200)';
                        p.style.background = 'white';
                    });
                    this.style.border = '2px solid var(--red-500)';
                    this.style.background = 'rgba(239, 68, 68, 0.1)';
                    selectedPackage = this.dataset.package;
                    
                    // Définir le montant
                    const amounts = { basic: 5000, project: 25000, sponsor: 50000 };
                    customAmount.value = amounts[selectedPackage];
                });
            });
            
            // Montant personnalisé
            customBtn.addEventListener('click', function() {
                packages.forEach(p => {
                    p.style.border = '1px solid var(--gray-200)';
                    p.style.background = 'white';
                });
                selectedPackage = 'custom';
            });
            
            // Modes de paiement
            paymentMethods.forEach(method => {
                method.addEventListener('click', function() {
                    paymentMethods.forEach(m => {
                        m.style.border = '1px solid var(--gray-200)';
                        m.style.background = 'white';
                    });
                    this.style.border = '2px solid var(--primary-blue)';
                    this.style.background = 'rgba(59, 130, 246, 0.1)';
                    selectedPaymentMethod = this.dataset.method;
                });
            });
            
            // Sélection par défaut
            paymentMethods[0].click();
        });
    </script>

@endsection