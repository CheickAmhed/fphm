@extends('public.layouts.app')

@section('content')
    <section style="position: relative; height: 400px; background: linear-gradient(135deg, var(--primary-orange), var(--primary-orange-dark)); display: flex; align-items: center; justify-content: center;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.3);"></div>
        <div class="container" style="position: relative; z-index: 10; text-align: center; color: white;">
            <h1 style="font-size: clamp(3rem, 5vw, 4rem); font-weight: bold; margin-bottom: 1.5rem;">
                À propos de nous
            </h1>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.9); max-width: 48rem; margin: 0 auto;">
                Découvrez l'histoire, la mission et les valeurs qui guident notre engagement 
                pour le développement durable du Burkina Faso
            </p>
        </div>
    </section>

    <div style="padding-top: 80px;">
        <!-- Mission Section -->
        <section class="section">
            <div class="container">
                <div class="grid grid-cols-2" style="align-items: center; gap: 4rem;">
                    <div>
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <span style="font-size: 2rem; color: var(--primary-orange); margin-right: 0.75rem;">🎯</span>
                            <h2 style="font-size: 2rem; font-weight: bold; margin: 0;">Notre Mission</h2>
                        </div>
                        <p style="font-size: 1.125rem; color: var(--gray-700); line-height: 1.7; margin-bottom: 1.5rem;">
                            La Fondation PHM du groupe Louda est une initiative citoyenne et solidaire 
                            qui œuvre pour le développement durable du Burkina Faso. Nous nous engageons 
                            dans la réhabilitation d'infrastructures communautaires, la promotion de 
                            l'agriculture durable, le soutien aux déplacés internes et le développement local.
                        </p>
                        <p style="font-size: 1.125rem; color: var(--gray-700); line-height: 1.7;">
                            Notre approche se base sur la participation communautaire, la durabilité 
                            environnementale et l'impact social mesurable. Nous croyons que chaque 
                            action, aussi petite soit-elle, peut contribuer à transformer positivement 
                            la vie des communautés.
                        </p>
                    </div>
                    <div style="position: relative;">
                        <img 
                            src="https://images.unsplash.com/photo-1566853166891-3936c0191f60"
                            alt="Mission PHM"
                            style="width: 100%; border-radius: 1.5rem; box-shadow: var(--shadow-2xl);"
                        >
                        <div style="position: absolute; top: -1.5rem; right: -1.5rem; background: var(--primary-orange); color: white; padding: 1rem; border-radius: 50%; font-size: 2rem;">
                            🏆
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vision Section -->
        <section class="section">
            <div class="container">
                <div class="grid grid-cols-2" style="align-items: center; gap: 4rem;">
                    <div style="position: relative; order: 2;">
                        <img 
                            src="https://images.unsplash.com/photo-1725083802424-e4bf1144ad4e"
                            alt="Vision PHM"
                            style="width: 100%; border-radius: 1.5rem; box-shadow: var(--shadow-2xl);"
                        >
                        <div style="position: absolute; bottom: -1.5rem; left: -1.5rem; background: var(--primary-blue); color: white; padding: 1rem; border-radius: 50%; font-size: 2rem;">
                            👁️
                        </div>
                    </div>
                    <div style="order: 1;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <span style="font-size: 2rem; color: var(--primary-blue); margin-right: 0.75rem;">👁️</span>
                            <h2 style="font-size: 2rem; font-weight: bold; margin: 0;">Notre Vision</h2>
                        </div>
                        <p style="font-size: 1.125rem; color: var(--gray-700); line-height: 1.7; margin-bottom: 1.5rem;">
                            Nous aspirons à un Burkina Faso où chaque communauté dispose des 
                            infrastructures nécessaires à son épanouissement, où l'agriculture 
                            nourrit dignement les familles, et où personne n'est laissé pour compte.
                        </p>
                        <p style="font-size: 1.125rem; color: var(--gray-700); line-height: 1.7;">
                            Notre vision s'étend au-delà des frontières nationales : contribuer 
                            à un développement africain durable, inclusif et respectueux de 
                            l'environnement, où les communautés sont actrices de leur propre 
                            transformation.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Nos Valeurs</h2>
                    <p class="section-subtitle">
                        Les principes fondamentaux qui guident chacune de nos actions 
                        et définissent notre identité
                    </p>
                </div>
                <div class="grid grid-cols-2" style="gap: 2rem;">
                    <div class="card">
                        <div class="card-content" style="text-align: center;">
                            <div style="width: 64px; height: 64px; margin: 0 auto 1rem; background: linear-gradient(135deg, var(--primary-orange), var(--primary-orange-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem;">
                                ❤️
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--gray-900); margin-bottom: 1rem;">Solidarité</h3>
                            <p style="color: var(--gray-600); line-height: 1.6;">
                                Nous croyons en la force de l'entraide et du partage pour construire un monde plus juste.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-content" style="text-align: center;">
                            <div style="width: 64px; height: 64px; margin: 0 auto 1rem; background: linear-gradient(135deg, var(--primary-orange), var(--primary-orange-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem;">
                                🏆
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--gray-900); margin-bottom: 1rem;">Excellence</h3>
                            <p style="color: var(--gray-600); line-height: 1.6;">
                                Nous visons l'excellence dans tous nos projets pour maximiser l'impact positif.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-content" style="text-align: center;">
                            <div style="width: 64px; height: 64px; margin: 0 auto 1rem; background: linear-gradient(135deg, var(--primary-orange), var(--primary-orange-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem;">
                                👥
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--gray-900); margin-bottom: 1rem;">Inclusion</h3>
                            <p style="color: var(--gray-600); line-height: 1.6;">
                                Nous œuvrons pour une société inclusive où chacun a sa place et ses chances.
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-content" style="text-align: center;">
                            <div style="width: 64px; height: 64px; margin: 0 auto 1rem; background: linear-gradient(135deg, var(--primary-orange), var(--primary-orange-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem;">
                                📍
                            </div>
                            <h3 style="font-size: 1.5rem; font-weight: bold; color: var(--gray-900); margin-bottom: 1rem;">Développement local</h3>
                            <p style="color: var(--gray-600); line-height: 1.6;">
                                Nous privilégions les solutions locales et durables adaptées aux besoins spécifiques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Notre Équipe</h2>
                    <p class="section-subtitle">
                        Des professionnels passionnés et expérimentés qui portent notre mission
                    </p>
                </div>
                <div class="grid grid-cols-3">
                    <div class="card">
                        <div style="height: 256px; overflow: hidden;">
                            <img 
                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d"
                                alt="Dr. Amadou Traoré"
                                class="card-image"
                                style="height: 100%;"
                            >
                        </div>
                        <div class="card-content" style="text-align: center;">
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">
                                Dr. Amadou Traoré
                            </h3>
                            <p style="color: var(--primary-orange); font-weight: 600; margin-bottom: 0.75rem;">
                                Directeur Général
                            </p>
                            <p style="color: var(--gray-600); font-size: 0.875rem; line-height: 1.6;">
                                Expert en développement communautaire avec 20 ans d'expérience
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div style="height: 256px; overflow: hidden;">
                            <img 
                                src="https://images.unsplash.com/photo-1494790108755-2616b612b786"
                                alt="Mme Fatou Ouédraogo"
                                class="card-image"
                                style="height: 100%;"
                            >
                        </div>
                        <div class="card-content" style="text-align: center;">
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">
                                Mme Fatou Ouédraogo
                            </h3>
                            <p style="color: var(--primary-orange); font-weight: 600; margin-bottom: 0.75rem;">
                                Responsable Projets
                            </p>
                            <p style="color: var(--gray-600); font-size: 0.875rem; line-height: 1.6;">
                                Ingénieure en génie civil spécialisée dans les infrastructures rurales
                            </p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div style="height: 256px; overflow: hidden;">
                            <img 
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e"
                                alt="M. Ibrahim Sawadogo"
                                class="card-image"
                                style="height: 100%;"
                            >
                        </div>
                        <div class="card-content" style="text-align: center;">
                            <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">
                                M. Ibrahim Sawadogo
                            </h3>
                            <p style="color: var(--primary-orange); font-weight: 600; margin-bottom: 0.75rem;">
                                Coordinateur Terrain
                            </p>
                            <p style="color: var(--gray-600); font-size: 0.875rem; line-height: 1.6;">
                                Spécialiste en mobilisation communautaire et développement local
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- History Section -->
        <section class="section">
            <div class="container">
                <div style="background: linear-gradient(135deg, rgba(249, 115, 22, 0.1), rgba(249, 115, 22, 0.2)); border-radius: 1.5rem; padding: 3rem;">
                    <div class="section-header">
                        <h2 class="section-title">Notre Histoire</h2>
                        <p class="section-subtitle" style="color: var(--gray-700);">
                            15 années d'engagement au service du développement durable
                        </p>
                    </div>
                    <div style="max-width: 64rem; margin: 0 auto;">
                        <div style="display: flex; flex-direction: column; gap: 2rem;">
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 48px; height: 48px; background: var(--primary-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; flex-shrink: 0;">
                                    1
                                </div>
                                <div>
                                    <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">2009 - Fondation</h3>
                                    <p style="color: var(--gray-700);">
                                        Création de la Fondation PHM avec pour mission première 
                                        l'amélioration des conditions de vie des communautés rurales.
                                    </p>
                                </div>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 48px; height: 48px; background: var(--primary-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; flex-shrink: 0;">
                                    2
                                </div>
                                <div>
                                    <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">2015 - Expansion</h3>
                                    <p style="color: var(--gray-700);">
                                        Extension de nos activités vers le soutien aux déplacés internes 
                                        et le développement de programmes d'urgence humanitaire.
                                    </p>
                                </div>
                            </div>
                            <div style="display: flex; align-items: flex-start; gap: 1rem;">
                                <div style="width: 48px; height: 48px; background: var(--primary-orange); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; flex-shrink: 0;">
                                    3
                                </div>
                                <div>
                                    <h3 style="font-size: 1.25rem; font-weight: bold; color: var(--gray-900); margin-bottom: 0.5rem;">2020 - Innovation</h3>
                                    <p style="color: var(--gray-700);">
                                        Lancement du programme d'agriculture durable et adoption 
                                        de nouvelles technologies pour optimiser l'impact de nos projets.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection