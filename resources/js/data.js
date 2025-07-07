// Données de démonstration pour le site Fondation PHM
export const siteData = {
  // Configuration du site
  site: {
    name: "Fondation PHM",
    tagline: "Construire l'avenir du Burkina Faso",
    logo: "assets/img/logo.png"
  },

  // Section Hero
  hero: {
    title: "Ensemble pour un Burkina Faso prospère",
    subtitle: "La Fondation PHM œuvre pour la réhabilitation d'infrastructures, l'agriculture durable et le soutien aux communautés.",
    cta: "Découvrir nos projets",
    backgroundImage: "https://images.unsplash.com/photo-1725083802424-e4bf1144ad4e",
    stats: [
      { value: "50+", label: "Projets réalisés" },
      { value: "5000+", label: "Bénéficiaires" },
      { value: "15", label: "Années d'expérience" },
      { value: "3", label: "Régions couvertes" }
    ]
  },

  // Slides pour le hero
  slides: [
    {
      image: "https://images.unsplash.com/photo-1725083802424-e4bf1144ad4e",
      title: "Réhabilitons ensemble le barrage de Louda",
      subtitle: "Un projet vital pour l'irrigation et l'accès à l'eau potable",
      cta: "Découvrir le projet"
    },
    {
      image: "https://images.unsplash.com/photo-1566853166891-3936c0191f60",
      title: "Construisons des logements décents",
      subtitle: "Pour que chaque famille ait un toit sûr et durable",
      cta: "Voir nos réalisations"
    },
    {
      image: "https://images.pexels.com/photos/4314674/pexels-photo-4314674.jpeg",
      title: "Soutenons les déplacés internes",
      subtitle: "Accompagnement et réinsertion des familles vulnérables",
      cta: "Nous aider"
    }
  ],

  // Projets
  projects: [
    {
      id: 1,
      title: "Réhabilitation du barrage de Louda",
      description: "Reconstruction et modernisation du barrage pour améliorer l'irrigation et l'accès à l'eau potable",
      image: "https://images.unsplash.com/photo-1725083802424-e4bf1144ad4e",
      category: "Infrastructure",
      status: "En cours",
      budget: 2500000,
      completion: 75,
      beneficiaries: 1200,
      location: "Louda, Burkina Faso",
      details: [
        "Réparation des fissures du barrage",
        "Installation de nouvelles vannes",
        "Aménagement des canaux d'irrigation",
        "Formation des comités de gestion"
      ],
      timeline: "12 mois",
      startDate: "2024-01-15",
      endDate: "2024-12-31"
    },
    {
      id: 2,
      title: "Programme de logements sociaux",
      description: "Construction de logements décents pour les familles vulnérables",
      image: "https://images.unsplash.com/photo-1566853166891-3936c0191f60",
      category: "Logement",
      status: "Planifié",
      budget: 1800000,
      completion: 25,
      beneficiaries: 500,
      location: "Ouagadougou, Burkina Faso",
      details: [
        "Construction de 50 logements",
        "Accès à l'eau potable et électricité",
        "Espaces communautaires",
        "Accompagnement social"
      ],
      timeline: "18 mois",
      startDate: "2024-03-01",
      endDate: "2025-08-31"
    },
    {
      id: 3,
      title: "Soutien aux déplacés internes",
      description: "Assistance humanitaire, éducation et réinsertion socio-économique",
      image: "https://images.pexels.com/photos/4314674/pexels-photo-4314674.jpeg",
      category: "Humanitaire",
      status: "En cours",
      budget: 950000,
      completion: 60,
      beneficiaries: 2500,
      location: "Région du Nord",
      details: [
        "Distribution de vivres et non-vivres",
        "Abris temporaires",
        "Activités génératrices de revenus",
        "Accompagnement psychosocial"
      ],
      timeline: "24 mois",
      startDate: "2023-06-01",
      endDate: "2025-05-31"
    },
    {
      id: 4,
      title: "Agriculture durable",
      description: "Promotion de techniques agricoles modernes et durables",
      image: "https://images.unsplash.com/photo-1635548003172-b9b44acfdcff",
      category: "Agriculture",
      status: "En cours",
      budget: 1200000,
      completion: 45,
      beneficiaries: 800,
      location: "Région du Centre-Ouest",
      details: [
        "Formation aux techniques agricoles",
        "Distribution de semences améliorées",
        "Installation de systèmes d'irrigation",
        "Crédit agricole pour les producteurs"
      ],
      timeline: "36 mois",
      startDate: "2023-09-01",
      endDate: "2026-08-31"
    }
  ],

  // Actualités
  news: [
    {
      id: 1,
      title: "Lancement du Festival 'Allons à Louda' 2024",
      excerpt: "Un événement culturel et solidaire pour célébrer la résilience de la communauté",
      content: "Le Festival 'Allons à Louda' revient pour sa 5e édition avec un programme riche en activités culturelles...",
      image: "https://images.pexels.com/photos/32826199/pexels-photo-32826199.jpeg",
      category: "Événement",
      date: "2024-02-15",
      author: "Équipe PHM",
      tags: ["festival", "culture", "communauté"]
    },
    {
      id: 2,
      title: "Inauguration des nouveaux logements sociaux",
      excerpt: "25 familles ont reçu les clés de leurs nouveaux logements",
      content: "Dans le cadre de notre programme de logements sociaux, nous avons eu l'honneur d'inaugurer...",
      image: "https://images.unsplash.com/photo-1566853166891-3936c0191f60",
      category: "Projet",
      date: "2024-01-28",
      author: "Direction PHM",
      tags: ["logement", "inauguration", "social"]
    },
    {
      id: 3,
      title: "Formation des jeunes en agriculture moderne",
      excerpt: "50 jeunes formés aux techniques agricoles innovantes",
      content: "La formation s'est déroulée sur 5 jours avec des experts en agriculture durable...",
      image: "https://images.unsplash.com/photo-1635548003172-b9b44acfdcff",
      category: "Formation",
      date: "2024-01-10",
      author: "Département Agriculture",
      tags: ["formation", "agriculture", "jeunes"]
    }
  ],

  // Équipe
  team: [
    {
      id: 1,
      name: "Dr. Amadou Traoré",
      position: "Directeur Général",
      image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d",
      bio: "Expert en développement communautaire avec 20 ans d'expérience",
      email: "a.traore@fondationphm.org"
    },
    {
      id: 2,
      name: "Mme Fatou Ouédraogo",
      position: "Responsable Projets",
      image: "https://images.unsplash.com/photo-1494790108755-2616b612b786",
      bio: "Ingénieure en génie civil spécialisée dans les infrastructures rurales",
      email: "f.ouedraogo@fondationphm.org"
    },
    {
      id: 3,
      name: "M. Ibrahim Sawadogo",
      position: "Coordinateur Terrain",
      image: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e",
      bio: "Spécialiste en mobilisation communautaire et développement local",
      email: "i.sawadogo@fondationphm.org"
    }
  ],

  // Transparence financière
  finances: {
    totalBudget: 8500000,
    totalSpent: 5200000,
    breakdown: [
      { category: "Infrastructure", amount: 2500000, percentage: 48 },
      { category: "Logement", amount: 1800000, percentage: 35 },
      { category: "Humanitaire", amount: 950000, percentage: 18 },
      { category: "Agriculture", amount: 1200000, percentage: 23 },
      { category: "Fonctionnement", amount: 850000, percentage: 16 }
    ]
  },

  // Packages de donation
  donationPackages: [
    {
      id: "basic",
      name: "Soutien de base",
      amount: 5000,
      description: "Contribuer aux frais de fonctionnement",
      impact: "Aide au fonctionnement quotidien"
    },
    {
      id: "project",
      name: "Soutien projet",
      amount: 25000,
      description: "Financer une partie d'un projet",
      impact: "Participation directe à un projet"
    },
    {
      id: "sponsor",
      name: "Parrainage",
      amount: 50000,
      description: "Parrainer une famille ou un projet",
      impact: "Impact direct sur une famille"
    }
  ],

  // Informations de contact
  contact: {
    address: "Avenue de la Liberté, Secteur 15, Ouagadougou, Burkina Faso",
    phone: "+226 25 30 45 67",
    email: "contact@fondationphm.org",
    coordinates: {
      lat: 12.3714,
      lng: -1.5197
    },
    socialMedia: {
      facebook: "https://facebook.com/fondationphm",
      twitter: "https://twitter.com/fondationphm",
      instagram: "https://instagram.com/fondationphm",
      linkedin: "https://linkedin.com/company/fondationphm"
    }
  },

  // Opportunités de bénévolat
  volunteerOpportunities: [
    {
      id: 1,
      title: "Assistant projet terrain",
      description: "Accompagner les équipes sur le terrain",
      requirements: ["Disponibilité 3 mois minimum", "Français parlé", "Permis de conduire"],
      location: "Louda",
      type: "Terrain"
    },
    {
      id: 2,
      title: "Formateur en agriculture",
      description: "Former les producteurs aux techniques modernes",
      requirements: ["Diplôme en agriculture", "Expérience pédagogique", "Mooré apprécié"],
      location: "Région Centre-Ouest",
      type: "Formation"
    },
    {
      id: 3,
      title: "Assistant communication",
      description: "Gérer les réseaux sociaux et communication",
      requirements: ["Maîtrise réseaux sociaux", "Français/Anglais", "Créativité"],
      location: "Ouagadougou",
      type: "Communication"
    }
  ]
};

// Fonctions utilitaires
export const formatCurrency = (amount) => {
  return new Intl.NumberFormat('fr-FR', {
    style: 'currency',
    currency: 'XOF',
    minimumFractionDigits: 0
  }).format(amount);
};

export const formatDate = (dateString) => {
  return new Date(dateString).toLocaleDateString('fr-FR', {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
};

export const getProjectsByCategory = (category) => {
  return siteData.projects.filter(project => project.category === category);
};

export const getRecentNews = (limit = 3) => {
  return siteData.news
    .sort((a, b) => new Date(b.date) - new Date(a.date))
    .slice(0, limit);
};