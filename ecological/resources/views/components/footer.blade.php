<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('img/logo.png') }}" alt="EGG Logo" class="mb-3" height="50">

                <p class="text-white">Solutions d'emballages écologiques innovantes pour un avenir durable. Nous transformons les déchets agricoles en emballages respectueux de l'environnement.</p>
                <div class="social-links mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-4">Liens Rapides</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="{{ route('home') }}" class="text-white text-decoration-none">Accueil</a></li>
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-white text-decoration-none">À Propos</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}" class="text-white text-decoration-none">Services</a></li>
                    <li class="mb-2"><a href="{{ route('partenariat') }}" class="text-white text-decoration-none">Partenariat</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Nos Services</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Emballages alimentaires</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Solutions éco-responsables</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Conseil en durabilité</li>
                    <li><i class="fas fa-check-circle text-primary me-2"></i> Innovation verte</li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Contactez-nous</h5>
                <ul class="list-unstyled text-white">
                    <li class="mb-3">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        Ouagadougou, Secteur 25
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-phone-alt text-primary me-2"></i>
                        <a href="tel:+22670720473" class="text-white text-decoration-none">+226 70 72 04 73</a>
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        <a href="mailto:info@egg-bf.com" class="text-white text-decoration-none">info@egg-bf.com</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
        
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0 text-white">&copy; {{ date('Y') }} EGG - Tous droits réservés</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="{{ route('privacy') }}" class="text-white text-decoration-none me-3">Politique de confidentialité</a>
                <a href="{{ route('terms') }}" class="text-white text-decoration-none">Conditions d'utilisation</a>
            </div>
        </div>
    </div>
</footer>