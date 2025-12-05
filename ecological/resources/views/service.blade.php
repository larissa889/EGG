@extends('layouts.main')

@section('title', 'Nos Services - EGG - Ecological Growth Guardian')

@push('styles')
<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/carousel-1.jpg') }}') center/cover no-repeat !important;
        min-height: 400px;
        display: flex;
        align-items: center;
        color: white;
        margin-bottom: 50px;
    }

    .service-card {
        transition: all 0.3s ease;
        margin-bottom: 30px;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(30, 126, 52, 0.1);
        border-radius: 10px;
        margin: 0 auto 20px;
    }

    .service-icon i {
        font-size: 30px;
        color: var(--bs-primary);
    }

    .process-step {
        position: relative;
        padding-left: 80px;
        margin-bottom: 40px;
    }

    .process-step-number {
        position: absolute;
        left: 0;
        top: 0;
        width: 60px;
        height: 60px;
        background: var(--bs-primary);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: 700;
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="container-fluid bg-breadcrumb py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white mb-3">Nos Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-uppercase text-primary fw-bold">Nos Solutions</span>
            <h2 class="display-5 fw-bold mb-3">Services sur mesure pour un avenir durable</h2>
            <p class="lead text-muted">Découvrez nos solutions innovantes pour réduire votre empreinte environnementale</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 text-center">
                    <div class="service-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h4 class="mb-3">Emballages Écologiques</h4>
                    <p class="text-muted">Des solutions d'emballage biodégradables et compostables fabriquées à partir de matières premières renouvelables et locales.</p>
                    <ul class="list-unstyled text-start">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Sacs en papier recyclé</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Emballages alimentaires compostables</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Solutions sur mesure</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 text-center">
                    <div class="service-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="mb-3">Conseil en Développement Durable</h4>
                    <p class="text-muted">Accompagnement personnalisé pour intégrer des pratiques éco-responsables dans votre entreprise.</p>
                    <ul class="list-unstyled text-start">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Audit environnemental</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Stratégie RSE</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Formation des équipes</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="card h-100 p-4 text-center">
                    <div class="service-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h4 class="mb-3">Valorisation des Déchets Agricoles</h4>
                    <p class="text-muted">Transformation des résidus agricoles en produits à valeur ajoutée pour une économie circulaire.</p>
                    <ul class="list-unstyled text-start">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Collecte des déchets</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Transformation locale</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Création d'emplois verts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-uppercase text-primary fw-bold">Notre Processus</span>
            <h2 class="display-5 fw-bold mb-3">Comment nous travaillons</h2>
            <p class="lead text-muted">Une approche méthodique pour des résultats optimaux</p>
        </div>

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="process-step">
                    <div class="process-step-number">1</div>
                    <h4>Évaluation Initiale</h4>
                    <p class="text-muted mb-0">Nous analysons vos besoins spécifiques et évaluons votre situation actuelle en matière d'emballages et de gestion des déchets.</p>
                </div>

                <div class="process-step">
                    <div class="process-step-number">2</div>
                    <h4>Proposition sur Mesure</h4>
                    <p class="text-muted mb-0">Nous élaborons une solution personnalisée qui répond à vos besoins tout en respectant vos contraintes budgétaires.</p>
                </div>

                <div class="process-step">
                    <div class="process-step-number">3</div>
                    <h4>Mise en Œuvre</h4>
                    <p class="text-muted mb-0">Notre équipe assure une mise en place fluide et efficace de la solution choisie.</p>
                </div>

                <div class="process-step">
                    <div class="process-step-number">4</div>
                    <h4>Suivi & Amélioration Continue</h4>
                    <p class="text-muted mb-0">Nous assurons un suivi régulier et proposons des améliorations continues pour optimiser les résultats.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-3">Prêt à transformer votre approche des emballages ?</h2>
                <p class="lead mb-0">Contactez-nous dès aujourd'hui pour discuter de vos besoins spécifiques.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2">Nous contacter</a>
            </div>
        </div>
    </div>
</section>
@endsection