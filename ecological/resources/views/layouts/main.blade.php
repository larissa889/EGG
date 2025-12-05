<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'EGG - Ecological Growth Guardian')</title>
    
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
    <style>
        /* Reset et styles de base */
        body {
            background-color: #fff;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Styles pour le contenu principal */
        main {
            flex: 1;
            padding-top: 0;
            margin-top: 0;
            position: relative;
            z-index: 1;
            background-color: #fff;
        }
        
        /* Ajustement pour les écrans mobiles */
        @media (max-width: 991.98px) {
            main {
                padding-top: 0;
            }
        }
        
        /* Style pour le spinner de chargement */
        #spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.3s ease-out;
        }
        
        #spinner.fade-out {
            opacity: 0;
            pointer-events: none;
        }
        
        /* Style pour le bouton retour en haut */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none;
            z-index: 99;
            width: 50px;
            height: 50px;
            align-items: center;
            justify-content: center;
        }
        
        /* Styles pour le carrousel */
        .carousel {
            position: relative;
            margin-top: 0;
        }
        
        .carousel-item {
            height: 100vh;
            min-height: 500px;
            background: no-repeat center center;
            background-size: cover;
        }
        
        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .carousel-caption {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 100px 15px;
            text-align: center;
        }
        
        /* Ajustements pour les écrans mobiles */
        @media (max-width: 767.98px) {
            .carousel-item {
                height: 100%;
                min-height: 300px;
            }
            
            .carousel-caption h1 {
                font-size: 2rem !important;
            }
            
            .carousel-caption p {
                font-size: 1rem !important;
            }
        }
    </style>
    
    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Spinner -->
    <div id="spinner" class="show bg-white position-fixed w-100 vh-100 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Chargement...</span>
        </div>
    </div>

    <!-- Header -->
    <header class="sticky-top">
        @include('components.header')
    </header>

    <!-- Main Content -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-auto">
        @include('components.footer')
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <script>
        // Fonction pour cacher le spinner
        function hideSpinner() {
            const spinner = document.getElementById('spinner');
            if (spinner) {
                // Ajouter une classe pour déclencher l'animation de fondu
                spinner.classList.add('fade-out');
                
                // Supprimer le spinner du DOM après l'animation
                setTimeout(() => {
                    spinner.style.display = 'none';
                }, 500); // Correspond à la durée de la transition CSS
            }
        }

        // Initialisation AOS et autres scripts
        document.addEventListener('DOMContentLoaded', function() {
            // Initialiser AOS si disponible
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 1000,
                    once: true
                });
            }
            
            // Gestion du bouton retour en haut
            const backToTop = document.querySelector('.back-to-top');
            if (backToTop) {
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > 300) {
                        backToTop.style.display = 'flex';
                    } else {
                        backToTop.style.display = 'none';
                    }
                });
                
                // Clic sur le bouton retour en haut
                backToTop.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }
            
            // Cacher le spinner après le chargement complet de la page
            if (document.readyState === 'complete') {
                hideSpinner();
            } else {
                window.addEventListener('load', hideSpinner);
                
                // En cas d'échec du chargement, cacher le spinner après un délai
                setTimeout(hideSpinner, 3000);
            }
        });
        
        // S'assurer que le spinner se cache même si l'événement load ne se déclenche pas
        document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                hideSpinner();
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>