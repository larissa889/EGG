@extends('layouts.main')

@section('title', 'Accueil - EGG - Ecological Growth Guardian')

@section('content')
<!-- Hero Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" style="margin-top: -1px;">
        <div class="carousel-inner" style="width: 100%;">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img class="w-100 d-block" src="{{ asset('img/carousel-1.jpg') }}" alt="Image 1" style="object-position: center center;">
                <div class="carousel-caption d-flex flex-column justify-content-center p-0" style="top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.5);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h1 class="display-3 text-white mb-4 animated slideInDown">EGG – Ecological Growth Guardian</h1>
                                <p class="fs-4 text-white mb-4 animated slideInDown">
                                    Nous accompagnons les projets écologiques et soutenons les solutions respectueuses de la planète pour un futur plus vert et responsable.
                                </p>
                                <div class="d-flex justify-content-center gap-3">
                                    <a href="{{ route('about') }}" class="btn btn-primary py-3 px-4">En Savoir Plus</a>
                                    <a href="{{ route('contact') }}" class="btn btn-outline-light py-3 px-4">Nous Contacter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img class="w-100 d-block" src="{{ asset('img/carousel-2.jpg') }}" alt="Image 2" style="object-position: center center;">
                <div class="carousel-caption d-flex flex-column justify-content-center p-0" style="top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.5);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Solutions d'emballage écologiques</h1>
                                <p class="fs-4 text-white mb-4 animated slideInDown">
                                    Découvrez nos solutions innovantes pour remplacer le plastique par des alternatives durables et respectueuses de l'environnement.
                                </p>
                                <a href="{{ route('services') }}" class="btn btn-primary py-3 px-4">Nos Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img class="w-100 d-block" src="{{ asset('img/carousel-3.jpg') }}" alt="Image 3">
                <div class="carousel-caption d-flex flex-column justify-content-center p-0" style="top: 0; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.5);">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Rejoignez notre mission</h1>
                                <p class="fs-4 text-white mb-4 animated slideInDown">
                                    Ensemble, construisons un avenir plus vert et plus durable pour les générations futures.
                                </p>
                                <a href="{{ route('contact') }}" class="btn btn-primary py-3 px-4">Devenir Partenaire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contrôles du carrousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
        
        <!-- Indicateurs -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    </div>
</div>
<!-- Hero Carousel End -->

@push('scripts')
<script>
    $(document).ready(function() {
        // Initialisation du carrousel
        $('#header-carousel').carousel({
            interval: 5000,
            pause: 'hover',
            wrap: true
        });
        
        // Animation des éléments au chargement
        $('.carousel-item').first().addClass('active');
        $('.carousel-caption').addClass('animated fadeInDown');
        
        // Démarrer l'animation AOS après le chargement complet
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
        
        // Cacher le spinner si ce n'est pas déjà fait
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.style.display = 'none';
        }
    });
</script>
@endpush

<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-img">
                    <img src="{{ asset('img/about-2.jpg') }}" class="img-fluid w-100 rounded-bottom" alt="À propos d'EGG">
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                <h4 class="text-primary">À propos de nous</h4>
                <h1 class="display-5 mb-4">Présentation de l'entreprise</h1>
                <p class="ps-4 mb-4">EGG est une entreprise burkinabé pionnière dans le domaine des solutions d'emballage écologiques. Nous transformons les défis environnementaux en opportunités durables en proposant des alternatives biodégradables aux emballages plastiques traditionnels.</p>
                <div class="row g-4 justify-content-between mb-5">
                    <div class="col-6">
                        <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Innovation locale</p>
                        <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Conformité écologique</p>
                    </div>
                    <div class="col-6">
                        <p class="text-dark"><i class="fas fa-check-circle text-primary me-1"></i> Impact socio-économique</p>
                        <p class="text-dark mb-0"><i class="fas fa-check-circle text-primary me-1"></i> Partenariats stratégiques</p>
                    </div>
                </div>
                <a href="{{ route('about') }}" class="btn btn-primary rounded-pill py-3 px-5">En Savoir Plus</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Nos Services</h4>
            <h1 class="display-4">Des solutions d'emballage écologiques et un accompagnement vers la durabilité</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100">
                    <div class="service-img">
                        <img src="{{ asset('img/service-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="Production">
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <h4 class="mb-3">Production</h4>
                            <p class="mb-4">Fabrication d'emballages biodégradables de haute qualité (gamme VITA PACK)</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill py-2 px-4">Nous Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100">
                    <div class="service-img">
                        <img src="{{ asset('img/service-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="Valorisation agricole">
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <h4 class="mb-3">Valorisation agricole</h4>
                            <p class="mb-4">Transformation des déchets et sous-produits agricoles en matériaux d'emballage précieux</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill py-2 px-4">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-light rounded h-100">
                    <div class="service-img">
                        <img src="{{ asset('img/service-3.jpg') }}" class="img-fluid w-100 rounded-top" alt="Sensibilisation">
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <h4 class="mb-3">Sensibilisation</h4>
                            <p class="mb-4">Promotion des pratiques écologiques et éducation environnementale</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill py-2 px-4">Nous Contacter</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item bg-light rounded h-100">
                    <div class="service-img">
                        <img src="{{ asset('img/service-4.jpg') }}" class="img-fluid w-100 rounded-top" alt="Conseil ESG">
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <h4 class="mb-3">Conseil ESG</h4>
                            <p class="mb-4">Accompagnement dans la mise en place de stratégies environnementales, sociales et de gouvernance</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill py-2 px-4">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- CTA Start -->
<div class="container-fluid bg-primary py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-3">Prêt à passer aux emballages écologiques ?</h2>
                <p class="text-white mb-0">Contactez-nous dès aujourd'hui pour découvrir comment nous pouvons vous aider à réduire votre empreinte environnementale.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact') }}" class="btn btn-light rounded-pill py-3 px-5">Nous Contacter</a>
            </div>
        </div>
    </div>
</div>
<!-- CTA End -->

<!-- Stats Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <i class="fas fa-leaf fa-3x text-primary mb-3"></i>
                <h1 class="display-4" data-toggle="counter-up">1000</h1>
                <p class="fs-5 text-primary mb-0">Emballages vendus</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <i class="fas fa-users fa-3x text-primary mb-3"></i>
                <h1 class="display-4" data-toggle="counter-up">500</h1>
                <p class="fs-5 text-primary mb-0">Clients satisfaits</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <i class="fas fa-check-circle fa-3x text-primary mb-3"></i>
                <h1 class="display-4" data-toggle="counter-up">50</h1>
                <p class="fs-5 text-primary mb-0">Projets réalisés</p>
            </div>
            <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <i class="fas fa-award fa-3x text-primary mb-3"></i>
                <h1 class="display-4" data-toggle="counter-up">10</h1>
                <p class="fs-5 text-primary mb-0">Prix remportés</p>
            </div>
        </div>
    </div>
</div>
<!-- Stats End -->

@endsection