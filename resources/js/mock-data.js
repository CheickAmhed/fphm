// Moved from public/js/mock-data.js
// Mock data for Fondation PHM website

// Mock images - using placeholder services for demonstration
const MOCK_IMAGES = {
    logo: 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjgwIiB2aWV3Qm94PSIwIDAgMjAwIDgwIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMjAgNDBMMzUgMjVMNTAgNDBMNDAgNTBMMjUgNDBaIiBmaWxsPSIjRTY3RTIyIi8+CjxwYXRoIGQ9Ik0yNSA1MEwzNSA0MEw0MCA1MEwyNSA1MFoiIGZpbGw9IiNEMzU0MDAiLz4KPHRleHQgeD0iNzAiIHk9IjM1IiBmb250LWZhbWlseT0iSW50ZXIsIHNhbnMtc2VyaWYiIGZvbnQtc2l6ZT0iMTIiIGZvbnQtd2VpZ2h0PSI2MDAiIGZpbGw9IiM3RjhDOEQiPkZPTkRBVElPTjwvdGV4dD4KPHR4dCB4PSI3MCIgeT0iNTUiIGZvbnQtZmFtaWx5PSJJbnRlciwgc2Fucy1zZXJpZiIgZm9udC1zaXplPSIyMCIgZm9udC13ZWlnaHQ9IjcwMCIgZmlsbD0iIzM0OThEQiI+UEhNPC90ZXh0Pgo8L3N2Zz4K',
    heroVideo: 'https://videos.pexels.com/video-files/3045163/3045163-uhd_2560_1440_25fps.mp4',
    barrageProject: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&h=600&fit=crop',
    housingProject: 'https://images.unsplash.com/photo-1572297977580-7b7c1b8bd5e3?w=800&h=600&fit=crop',
    agricultureProject: 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=800&h=600&fit=crop',
    festivalLouda: 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=800&h=600&fit=crop',
    formationAgricole: 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=800&h=600&fit=crop',
    nouvellePompe: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=600&fit=crop'
};

// Mock project data
const MOCK_PROJECTS = [
    {
        id: 'barrage',
        title: 'Réhabilitation du Barrage',
        description: 'Restauration complète du barrage principal de Louda pour assurer l\'approvisionnement en eau de toute la communauté.',
        longDescription: 'Ce projet ambitieux vise à rénover entièrement le barrage principal de Louda qui alimente en eau plus de 1000 habitants. Les travaux incluent la réparation des fissures, l\'amélioration du système de filtration et l\'installation de pompes solaires pour un accès plus fiable à l\'eau potable.',
        image: MOCK_IMAGES.barrageProject,
        status: 'En cours',
        progress: 75,
        budget: '2.5M FCFA',
        timeline: '12 mois',
        startDate: '2024-01-15',
        expectedEnd: '2024-12-15',
        beneficiaries: 1000,
        category: 'Infrastructure',
        location: 'Louda, Burkina Faso',
        gallery: [
            MOCK_IMAGES.barrageProject,
            'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&h=600&fit=crop&q=80',
            'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=600&fit=crop&q=80'
        ]
    },
    {
        id: 'logement',
        title: 'Programme Logement',
        description: 'Construction et rénovation de logements pour les familles vulnérables.',
        longDescription: 'Initiative de construction de 50 nouveaux logements et rénovation de 30 habitations existantes pour accueillir les familles déplacées et les plus vulnérables de la communauté.',
        image: MOCK_IMAGES.housingProject,
        status: 'Actif',
        progress: 60,
        budget: '5M FCFA',
        timeline: '18 mois',
        startDate: '2024-03-01',
        expectedEnd: '2025-08-31',
        beneficiaries: 400,
        category: 'Logement',
        location: 'Louda, Burkina Faso'
    },
    {
        id: 'agriculture',
        title: 'Agriculture Durable',
        description: 'Formation et accompagnement des agriculteurs locaux aux techniques modernes.',
        longDescription: 'Programme permanent de formation aux techniques agricoles durables, distribution de semences améliorées et accompagnement technique pour améliorer les rendements.',
        image: MOCK_IMAGES.agricultureProject,
        status: 'Permanent',
        progress: 85,
        budget: '1.8M FCFA',
        timeline: 'Permanent',
        startDate: '2023-06-01',
        beneficiaries: 200,
        category: 'Agriculture',
        location: 'Louda et environs'
    }
];

// Mock news/actualités data
const MOCK_NEWS = [
    {
        id: 'festival',
        title: 'Festival "Allons à Louda" - Édition 2024',
        excerpt: 'Rejoignez-nous pour célébrer la culture et les traditions de Louda lors de notre festival annuel. Une semaine de festivités et d\'échanges.',
        content: 'Le festival annuel "Allons à Louda" revient pour sa 5ème édition du 15 au 22 décembre 2024. Cette année, le festival mettra l\'accent sur les traditions agricoles et l\'artisanat local. Au programme : concerts, expositions, ateliers de formation et marchés de produits locaux.',
        image: MOCK_IMAGES.festivalLouda,
        category: 'Événement',
        date: '2024-12-15',
        author: 'Équipe PHM',
        featured: true
    },
    {
        id: 'formation',
        title: 'Formation en Agriculture Durable',
        excerpt: '50 agriculteurs formés aux techniques modernes d\'irrigation et de cultures.',
        content: 'La fondation PHM a organisé une session de formation intensive de 3 jours pour 50 agriculteurs de la région. Les participants ont appris les techniques d\'irrigation goutte-à-goutte, la rotation des cultures et l\'utilisation d\'engrais naturels.',
        image: MOCK_IMAGES.formationAgricole,
        category: 'Formation',
        date: '2024-12-10',
        author: 'Équipe PHM'
    },
    {
        id: 'pompe',
        title: 'Installation d\'une Nouvelle Pompe',
        excerpt: 'Une pompe solaire moderne installée pour améliorer l\'accès à l\'eau.',
        content: 'Grâce aux dons reçus, nous avons pu installer une pompe solaire de dernière génération qui permettra d\'alimenter 200 familles supplémentaires en eau potable.',
        image: MOCK_IMAGES.nouvellePompe,
        category: 'Infrastructure',
        date: '2024-12-05',
        author: 'Équipe PHM'
    }
];

// Mock team members
const MOCK_TEAM = [
    {
        id: 1,
        name: 'Dr. Amadou OUEDRAOGO',
        role: 'Président Fondateur',
        bio: 'Ingénieur civil avec 20 ans d\'expérience dans le développement rural.',
        image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop',
        expertise: ['Développement rural', 'Gestion de projets', 'Leadership']
    },
    {
        id: 2,
        name: 'Fatou KONE',
        role: 'Directrice des Opérations',
        bio: 'Spécialiste en gestion communautaire et développement social.',
        image: 'https://images.unsplash.com/photo-1494790108755-2616b612b5bc?w=400&h=400&fit=crop',
        expertise: ['Gestion communautaire', 'Développement social', 'Formation']
    },
    {
        id: 3,
        name: 'Ibrahim SAWADOGO',
        role: 'Coordinateur Technique',
        bio: 'Expert en agriculture durable et techniques d\'irrigation.',
        image: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop',
        expertise: ['Agriculture durable', 'Irrigation', 'Techniques modernes']
    }
];

// Mock testimonials
const MOCK_TESTIMONIALS = [
    {
        id: 1,
        name: 'Marie ZOUNGRANA',
        role: 'Bénéficiaire du programme logement',
        content: 'Grâce à la Fondation PHM, ma famille a maintenant un toit décent. Mes enfants peuvent étudier dans de bonnes conditions.',
        image: 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop',
        rating: 5
    },
    {
        id: 2,
        name: 'Jean-Baptiste COMPAORE',
        role: 'Agriculteur formé',
        content: 'Les formations en agriculture durable ont doublé mes récoltes. Je peux maintenant nourrir ma famille et vendre le surplus.',
        image: 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop',
        rating: 5
    },
    {
        id: 3,
        name: 'Awa TRAORE',
        role: 'Présidente du comité des femmes',
        content: 'L\'accès à l\'eau potable a transformé notre quotidien. Plus besoin de marcher des kilomètres pour puiser de l\'eau.',
        image: 'https://images.unsplash.com/photo-1582233479366-6d38bc390a08?w=400&h=400&fit=crop',
        rating: 5
    }
];

// Mock events
const MOCK_EVENTS = [
    {
        id: 1,
        title: 'Festival Allons à Louda 2024',
        date: '2024-12-15',
        time: '09:00',
        location: 'Centre culturel de Louda',
        description: 'Célébration annuelle de la culture et des traditions de Louda',
        category: 'Festival',
        image: MOCK_IMAGES.festivalLouda
    },
    {
        id: 2,
        title: 'Formation en maraîchage',
        date: '2024-12-20',
        time: '08:00',
        location: 'Coopérative agricole',
        description: 'Formation pratique aux techniques de maraîchage moderne',
        category: 'Formation',
        image: MOCK_IMAGES.formationAgricole
    }
];

// Mock statistics
const MOCK_STATS = {
    familiesAidees: 150,
    projetsActifs: 3,
    hectaresCultives: 50,
    logementsRehabilites: 45,
    barrageRehabilite: 1,
    personnesFormees: 200,
    deplacesSecourus: 500,
    fondsCollectes: '15M FCFA',
    beneficiairesTotaux: 1500,
    partenaires: 8,
    benevoles: 25
};

// Mock partners
const MOCK_PARTNERS = [
    {
        id: 1,
        name: 'UNICEF Burkina Faso',
        logo: 'https://via.placeholder.com/200x100/4A90E2/FFFFFF?text=UNICEF',
        type: 'Organisation internationale'
    },
    {
        id: 2,
        name: 'Gouvernement du Burkina Faso',
        logo: 'https://via.placeholder.com/200x100/2ECC71/FFFFFF?text=GOV-BF',
        type: 'Institution publique'
    },
    {
        id: 3,
        name: 'ONG Eau Vive',
        logo: 'https://via.placeholder.com/200x100/E67E22/FFFFFF?text=EAU-VIVE',
        type: 'ONG'
    }
];

// Mock contact info
const MOCK_CONTACT = {
    address: 'Secteur 15, Louda, Province du Zoundwéogo, Burkina Faso',
    phone: '+226 25 XX XX XX',
    email: 'contact@fondationphm.org',
    website: 'www.fondationphm.org',
    coordinates: {
        lat: 11.9048,
        lng: -1.5208
    },
    social: {
        facebook: 'https://facebook.com/fondationphm',
        twitter: 'https://twitter.com/fondationphm',
        instagram: 'https://instagram.com/fondationphm',
        linkedin: 'https://linkedin.com/company/fondationphm'
    }
};

// Mock payment methods for donations
const MOCK_PAYMENT_METHODS = [
    {
        id: 'orange-money',
        name: 'Orange Money',
        type: 'mobile',
        logo: 'https://via.placeholder.com/100x50/FF6B35/FFFFFF?text=Orange',
        code: '*144#',
        description: 'Paiement mobile sécurisé via Orange Money'
    },
    {
        id: 'moov-money',
        name: 'Moov Money',
        type: 'mobile',
        logo: 'https://via.placeholder.com/100x50/007AFF/FFFFFF?text=Moov',
        code: '*555#',
        description: 'Paiement mobile via Moov Money'
    },
    {
        id: 'telecel-money',
        name: 'Telecel Money',
        type: 'mobile',
        logo: 'https://via.placeholder.com/100x50/E30613/FFFFFF?text=Telecel',
        code: '*777#',
        description: 'Paiement mobile via Telecel Money'
    },
    {
        id: 'visa',
        name: 'Carte Visa',
        type: 'card',
        logo: 'https://via.placeholder.com/100x50/1A1F71/FFFFFF?text=VISA',
        description: 'Paiement sécurisé par carte bancaire'
    }
];

// Export all mock data
window.MOCK_DATA = {
    images: MOCK_IMAGES,
    projects: MOCK_PROJECTS,
    news: MOCK_NEWS,
    team: MOCK_TEAM,
    testimonials: MOCK_TESTIMONIALS,
    events: MOCK_EVENTS,
    stats: MOCK_STATS,
    partners: MOCK_PARTNERS,
    contact: MOCK_CONTACT,
    paymentMethods: MOCK_PAYMENT_METHODS
};

// Utility function to get mock data
function getMockData(type, id = null) {
    if (id) {
        return window.MOCK_DATA[type].find(item => item.id === id);
    }
    return window.MOCK_DATA[type];
}

// Export utility function
window.getMockData = getMockData;
