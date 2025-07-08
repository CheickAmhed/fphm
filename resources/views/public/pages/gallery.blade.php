@extends('public.layouts.app')

@section('content')
    <section style="padding-top: 80px; position: relative; height: 400px; background: linear-gradient(135deg, var(--purple-500), var(--purple-600)); display: flex; align-items: center; justify-content: center;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3);"></div>
        <div class="container" style="position: relative; z-index: 10; text-align: center; color: white;">
            <div style="font-size: 4rem; margin-bottom: 1.5rem;">📸</div>
            <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: bold; margin-bottom: 1.5rem;">
                Galerie Multimédia
            </h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 48rem; margin: 0 auto;">
                Découvrez en images nos projets, événements et l'impact 
                de nos actions au Burkina Faso
            </p>
        </div>
    </section>

    <div style="padding-top: 80px;">
        <div class="container">
            <!-- Filtres -->
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; margin-bottom: 4rem;">
                <button class="btn btn-primary gallery-filter active" data-filter="all">
                    🖼️ Toutes les photos
                </button>
                <button class="btn btn-outline gallery-filter" data-filter="projects" style="border-color: var(--primary-blue); color: var(--primary-blue);">
                    🏗️ Projets
                </button>
                <button class="btn btn-outline gallery-filter" data-filter="events" style="border-color: var(--green-500); color: var(--green-500);">
                    🎉 Événements
                </button>
                <button class="btn btn-outline gallery-filter" data-filter="community" style="border-color: var(--yellow-500); color: var(--yellow-500);">
                    👥 Communauté
                </button>
                <button class="btn btn-outline gallery-filter" data-filter="videos" style="border-color: var(--red-500); color: var(--red-500);">
                    🎥 Vidéos
                </button>
            </div>

            <!-- Galerie principale -->
            <div id="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-bottom: 4rem;">
                <!-- Les éléments de la galerie seront chargés par JavaScript -->
            </div>

            <!-- Section Vidéos -->
            <section style="margin-bottom: 4rem;">
                <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                    Vidéos de nos actions
                </h2>
                <div class="grid grid-cols-2" style="gap: 2rem;">
                    <div class="card">
                        <div style="position: relative; height: 200px; background: var(--gray-200); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1725083802424-e4bf1144ad4e" alt="Vidéo barrage" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;">
                                <button class="btn btn-primary" style="border-radius: 50%; width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;">
                                    ▶️
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">
                                Réhabilitation du barrage de Louda
                            </h3>
                            <p style="color: var(--gray-600);">
                                Découvrez les étapes de reconstruction du barrage et son impact sur la communauté
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div style="position: relative; height: 200px; background: var(--gray-200); border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; overflow: hidden;">
                            <img src="https://images.unsplash.com/photo-1566853166891-3936c0191f60" alt="Vidéo logements" style="width: 100%; height: 100%; object-fit: cover;">
                            <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center;">
                                <button class="btn btn-primary" style="border-radius: 50%; width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;">
                                    ▶️
                                </button>
                            </div>
                        </div>
                        <div class="card-content">
                            <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.5rem;">
                                Construction de logements sociaux
                            </h3>
                            <p style="color: var(--gray-600);">
                                Témoignages des familles bénéficiaires de nos programmes de logement
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Témoignages visuels -->
            <section style="background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(249, 115, 22, 0.2)); border-radius: 1.5rem; padding: 3rem;">
                <h2 style="font-size: 2rem; font-weight: bold; color: var(--gray-900); margin-bottom: 2rem; text-align: center;">
                    Avant / Après
                </h2>
                <p style="text-align: center; color: var(--gray-700); margin-bottom: 3rem; font-size: 1.125rem;">
                    L'impact visuel de nos interventions
                </p>
                
                <div class="grid grid-cols-2" style="gap: 3rem; align-items: center;">
                    <div>
                        <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem; text-align: center;">Avant</h3>
                        <img 
                            src="https://images.unsplash.com/photo-1578662996442-48f60103fc96" 
                            alt="Avant réhabilitation"
                            style="width: 100%; height: 500px; border-radius: 1rem; box-shadow: var(--shadow-md);"
                        >
                    </div>
                    <div>
                        <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 1rem; text-align: center;">Après</h3>
                        <img 
                            src="https://images.unsplash.com/photo-1725083802424-e4bf1144ad4e" 
                            alt="Après réhabilitation"
                            style="width: 100%; height: 500px; border-radius: 1rem; box-shadow: var(--shadow-md);"
                        >
                    </div>
                </div>
                
                <div style="text-align: center; margin-top: 2rem;">
                    <p style="color: var(--gray-700); font-style: italic;">
                        "Le barrage transformé : de l'abandon à l'espoir pour toute notre communauté"
                    </p>
                </div>
            </section>
        </div>
    </div>

    <br>

    <!-- Modal pour les images -->
    <div id="image-modal" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.9); z-index: 9999; align-items: center; justify-content: center; padding: 2rem;">
        <div style="position: relative; max-width: 90vw; max-height: 90vh;">
            <button id="close-modal" style="position: absolute; top: -3rem; right: 0; background: white; color: black; border: none; border-radius: 50%; width: 40px; height: 40px; cursor: pointer; font-size: 1.5rem;">
                ×
            </button>
            <img id="modal-image" src="" alt="" style="max-width: 100%; max-height: 100%; border-radius: 1rem;">
            <div id="modal-caption" style="color: white; text-align: center; margin-top: 1rem; font-size: 1.125rem;"></div>
        </div>
    </div>


    <script>
        // JavaScript pour la galerie
        document.addEventListener('DOMContentLoaded', function() {
            const galleryGrid = document.getElementById('gallery-grid');
            const galleryFilters = document.querySelectorAll('.gallery-filter');
            const modal = document.getElementById('image-modal');
            const modalImage = document.getElementById('modal-image');
            const modalCaption = document.getElementById('modal-caption');
            const closeModal = document.getElementById('close-modal');
            
            let currentFilter = 'all';

            // Images de la galerie
            const galleryImages = [
                {
                    src: "https://images.unsplash.com/photo-1725083802424-e4bf1144ad4e",
                    caption: "Travaux de réhabilitation du barrage de Louda",
                    category: "projects"
                },
                {
                    src: "https://images.unsplash.com/photo-1566853166891-3936c0191f60",
                    caption: "Nouvelles constructions de logements sociaux",
                    category: "projects"
                },
                {
                    src: "https://images.pexels.com/photos/4314674/pexels-photo-4314674.jpeg",
                    caption: "Aide aux familles déplacées",
                    category: "community"
                },
                {
                    src: "https://images.unsplash.com/photo-1635548003172-b9b44acfdcff",
                    caption: "Formation en agriculture durable",
                    category: "projects"
                },
                {
                    src: "https://images.pexels.com/photos/32826199/pexels-photo-32826199.jpeg",
                    caption: "Festival Allons à Louda 2024",
                    category: "events"
                },
                {
                    src: "https://images.unsplash.com/photo-1511578314322-379afb476865",
                    caption: "Réunion communautaire",
                    category: "community"
                },
                {
                    src: "https://images.unsplash.com/photo-1576091160550-2173dba999ef",
                    caption: "Campagne de sensibilisation santé",
                    category: "community"
                },
                {
                    src: "https://images.unsplash.com/photo-1464226184884-fa280b87c399",
                    caption: "Techniques de maraîchage moderne",
                    category: "projects"
                },
                {
                    src: "https://images.unsplash.com/photo-1578662996442-48f60103fc96",
                    caption: "État initial du barrage",
                    category: "projects"
                }
            ];

            function loadGallery() {
                const filteredImages = currentFilter === 'all' ? galleryImages : galleryImages.filter(img => img.category === currentFilter);
                
                galleryGrid.innerHTML = filteredImages.map((image, index) => `
                    <div class="gallery-item" style="cursor: pointer; transition: transform var(--transition-normal);" data-index="${index}">
                        <div style="position: relative; overflow: hidden; border-radius: 1rem; box-shadow: var(--shadow-md); height: 250px;">
                            <img 
                                src="${image.src}" 
                                alt="${image.caption}"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform var(--transition-normal);"
                            >
                            <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent); opacity: 0; transition: opacity var(--transition-normal); display: flex; align-items: flex-end; padding: 1rem;">
                                <p style="color: white; font-weight: 600; font-size: 0.875rem;">${image.caption}</p>
                            </div>
                        </div>
                    </div>
                `).join('');

                // Effets hover et click
                document.querySelectorAll('.gallery-item').forEach(item => {
                    const img = item.querySelector('img');
                    const overlay = item.querySelector('div > div');
                    
                    item.addEventListener('mouseenter', () => {
                        img.style.transform = 'scale(1.1)';
                        overlay.style.opacity = '1';
                        item.style.transform = 'translateY(-4px)';
                    });
                    
                    item.addEventListener('mouseleave', () => {
                        img.style.transform = 'scale(1)';
                        item.style.transform = 'translateY(0)';
                    });
                    
                    item.addEventListener('click', () => {
                        const index = parseInt(item.dataset.index);
                        const imageData = filteredImages[index];
                        openModal(imageData.src, imageData.caption);
                    });
                });
            }

            function openModal(src, caption) {
                modalImage.src = src;
                modalCaption.textContent = caption;
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            }

            function closeModalFunc() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            // Event listeners
            galleryFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    galleryFilters.forEach(f => {
                        f.classList.remove('active', 'btn-primary');
                        f.classList.add('btn-outline');
                    });
                    
                    this.classList.add('active', 'btn-primary');
                    this.classList.remove('btn-outline');
                    
                    currentFilter = this.dataset.filter;
                    loadGallery();
                });
            });

            closeModal.addEventListener('click', closeModalFunc);
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModalFunc();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeModalFunc();
                }
            });

            // Charger la galerie au démarrage
            loadGallery();
        });
    </script>

@endsection