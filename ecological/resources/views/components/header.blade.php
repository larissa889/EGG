<!-- En-tête fixe -->
<header class="sticky-top m-0 p-0" style="z-index: 1030; top: 0 !important;">
    <!-- Topbar -->
    <div id="topbar" class="bg-white py-2 d-none d-lg-block w-100" style="border-bottom: 1px solid #e0e0e0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex flex-wrap">
                        <div class="me-4">
                            <i class="fas fa-map-marker-alt me-2"></i>Ouagadougou, Secteur 25
                        </div>
                        <div class="me-4">
                            <i class="fas fa-phone-alt me-2"></i>+226 70720473
                        </div>
                        <div>
                            <i class="fas fa-envelope me-2"></i>info@egg-bf.com
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <div class="d-inline-flex">
                        <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation principale -->
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="EGG – Ecological Growth Guardian" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">À Propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('partenariat') ? 'active' : '' }}" href="{{ route('partenariat') }}">Partenariat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('actualites') ? 'active' : '' }}" href="{{ route('actualites') }}">Actualités</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <div class="ms-lg-4 d-none d-lg-block">
                    <a href="{{ route('contact') }}" class="btn btn-light rounded-pill px-4">Contactez-nous</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<style>
    /* Réinitialisation des marges */
    body, html {
        margin: 0;
        padding: 0;
    }
    
    /* Style pour la barre de navigation */
    .navbar {
        padding: 0.5rem 0;
        background-color: var(--bs-dark) !important;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    
    /* Style pour la navigation réduite */
    .navbar.shrink {
        padding: 0.5rem 0;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-brand img {
        transition: all 0.3s ease;
        filter: none; /* Rétablir la couleur d'origine du logo */
    }
    
    .navbar-brand:hover img {
        transform: scale(1.05);
    }
    
    .nav-link {
        font-weight: 500;
        color: #fff !important;
        padding: 0.5rem 1rem;
        position: relative;
        transition: all 0.3s ease;
    }
    
    .nav-link:hover,
    .nav-link.active {
        color: #c8e6c9 !important;
    }
    
    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background-color: #c8e6c9;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }
    
    .nav-link:hover::after,
    .nav-link.active::after {
        width: 70%;
    }
    
    /* Ajustement de la marge du body pour compenser la hauteur du header fixe */
    body {
        padding-top: 0; /* Réinitialisation du padding */
    }
    
    /* Ajustement pour les petits écrans */
    @media (max-width: 991.98px) {
        body {
            padding-top: 0; /* Réinitialisation du padding */
        }
    }
    
    /* Style du bouton de contact */
    .btn-contact {
        background-color: #e31837;
        color: white !important;
        border-radius: 4px;
        padding: 8px 20px !important;
        margin-left: 10px;
        transition: all 0.3s ease;
    }
    
    .btn-contact:hover {
        background-color: #c41230;
        transform: translateY(-2px);
    }
    
    /* Style pour la navigation fixe */
    .navbar-fixed {
        position: fixed !important;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const topbar = document.getElementById('topbar');
    const navbar = document.getElementById('mainNav');
    const header = document.querySelector('header');
    let lastScroll = 0;
    
    // Fonction pour définir le padding initial
    function setInitialPadding() {
        // Pas de padding initial pour éviter l'espace blanc
        document.body.style.paddingTop = '0';
    }
    
    // Fonction pour gérer le défilement
    function handleScroll() {
        const currentScroll = window.pageYOffset;
        const scrollUp = currentScroll < lastScroll;
        
        // Si on est en haut de la page
        if (currentScroll <= 0) {
            topbar.style.transform = 'translateY(0)';
            navbar.style.position = 'sticky';
            navbar.style.top = '0';
            navbar.style.background = 'transparent';
            setInitialPadding();
            return;
        }
        
        // Si on défile vers le bas et qu'on a dépassé 50px
        if (!scrollUp && currentScroll > 50) {
            topbar.style.transform = 'translateY(-100%)';
            navbar.style.position = 'fixed';
            navbar.style.top = '0';
            navbar.style.width = '100%';
            navbar.style.background = '#212529';
            document.body.style.paddingTop = navbar.offsetHeight + 'px';
        } 
        // Si on défile vers le haut
        else if (scrollUp) {
            topbar.style.transform = 'translateY(0)';
            navbar.style.position = 'sticky';
            navbar.style.top = '0';
            navbar.style.background = 'transparent';
            setInitialPadding();
        }
        
        lastScroll = currentScroll;
    }
    
    // Gestionnaire d'événement de défilement
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Gestionnaire de redimensionnement
    window.addEventListener('resize', function() {
        if (window.pageYOffset <= 0) {
            setInitialPadding();
        } else {
            document.body.style.paddingTop = navbar.offsetHeight + 'px';
        }
    });
    
    // Initialisation
    setInitialPadding();
    
    // Forcer un recalcul après le chargement complet
    window.addEventListener('load', function() {
        setInitialPadding();
        // Appliquer un léger délai pour s'assurer que tout est chargé
        setTimeout(function() {
            setInitialPadding();
            // S'assurer que le header est bien en haut de la page
            window.scrollTo(0, 0);
        }, 100);
    });
});
</script>