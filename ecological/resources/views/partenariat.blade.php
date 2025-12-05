@extends('layouts.main')

@section('title', 'Partenariat - EGG - Ecological Growth Guardian')

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

    .partner-card {
        transition: all 0.3s ease;
        margin-bottom: 30px;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        height: 100%;
    }

    .partner-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .partner-logo {
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: #f8f9fa;
    }

    .partner-logo img {
        max-height: 80px;
        max-width: 100%;
        width: auto;
    }

    .benefit-item {
        display: flex;
        margin-bottom: 20px;
    }

    .benefit-icon {
        width: 50px;
        height: 50px;
        background: rgba(30, 126, 52, 0.1);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .benefit-icon i {
        font-size: 24px;
        color: var(--bs-primary);
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="container-fluid bg-breadcrumb py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white mb-3">Devenez Partenaire</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Partenariat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Partners Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-uppercase text-primary fw-bold">Nos Partenaires</span>
            <h2 class="display-5 fw-bold mb-3">Ils nous font confiance</h2>
            <p class="lead text-muted">Des collaborations fortes pour un impact durable</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="partner-card">
                    <div class="partner-logo">
                        <img src="{{ asset('img/partner1.png') }}" alt="Partenaire 1" class="img-fluid">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">Entreprise Verte</h4>
                        <p class="text-muted">Partenaire stratégique pour la collecte des déchets agricoles</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="partner-card">
                    <div class="partner-logo">
                        <img src="{{ asset('img/partner2.png') }}" alt="Partenaire 2" class="img-fluid">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">EcoPack Solutions</h4>
                        <p class="text-muted">Expert en solutions d'emballages durables</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="partner-card">
                    <div class="partner-logo">
                        <img src="{{ asset('img/partner3.png') }}" alt="Partenaire 3" class="img-fluid">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">AgriPlus</h4>
                        <p class="text-muted">Réseau d'agriculteurs engagés pour une agriculture durable</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="partner-card">
                    <div class="partner-logo">
                        <img src="{{ asset('img/partner4.png') }}" alt="Partenaire 4" class="img-fluid">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-2">GreenTech Africa</h4>
                        <p class="text-muted">Innovation technologique au service de l'environnement</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <span class="text-uppercase text-primary fw-bold">Avantages</span>
                <h2 class="display-5 fw-bold mb-4">Pourquoi devenir partenaire ?</h2>
                <p class="lead text-muted mb-5">Rejoignez notre réseau de partenaires engagés pour un impact environnemental positif.</p>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div>
                        <h5 class="mb-2">Visibilité Accrue</h5>
                        <p class="text-muted mb-0">Mettez en avant votre engagement environnemental auprès de vos clients et partenaires.</p>
                    </div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h5 class="mb-2">Développement Commercial</h5>
                        <p class="text-muted mb-0">Accédez à de nouvelles opportunités d'affaires avec des entreprises partageant les mêmes valeurs.</p>
                    </div>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <div>
                        <h5 class="mb-2">Innovation Partagée</h5>
                        <p class="text-muted mb-0">Bénéficiez de notre expertise et de nos innovations en matière d'emballages écologiques.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="bg-white p-4 p-lg-5 rounded-3 shadow-sm">
                    <h3 class="mb-4">Devenez Partenaire</h3>
                    <p class="text-muted mb-4">Remplissez le formulaire ci-dessous et notre équipe vous recontactera sous 48h.</p>
                    
                    <form>
                        <div class="mb-3">
                            <label for="company" class="form-label">Nom de l'entreprise *</label>
                            <input type="text" class="form-control" id="company" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Votre nom complet *</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="phone">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="privacy" required>
                            <label class="form-check-label small" for="privacy">
                                J'accepte la <a href="{{ route('privacy') }}" class="text-primary">politique de confidentialité</a> *
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Envoyer la demande</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection