@extends('layouts.main')

@section('title', 'À Propos - EGG - Ecological Growth Guardian')

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

    .bg-breadcrumb h1 {
        color: white;
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .breadcrumb {
        background: transparent;
        padding: 0;
        margin: 0;
        justify-content: center;
    }

    .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb-item a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .breadcrumb-item.active {
        color: #fff;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.7);
        content: ">";
    }

    .about-experience {
        position: absolute;
        bottom: -40px;
        right: 30px;
        z-index: 1;
        max-width: 200px;
        background: var(--bs-primary);
        padding: 15px 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        text-align: center;
    }

    .team-card {
        transition: all 0.3s ease;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .team-card:hover {
        transform: translateY(-10px);
    }

    .team-social {
        position: absolute;
        bottom: -50px;
        left: 0;
        right: 0;
        background: rgba(30, 126, 52, 0.9);
        padding: 15px 0;
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .team-card:hover .team-social {
        bottom: 0;
    }

    .team-social a {
        color: white;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .team-social a:hover {
        background: white;
        color: var(--bs-primary);
        transform: translateY(-3px);
    }

    .icon-box {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(30, 126, 52, 0.1);
        border-radius: 10px;
        margin-right: 20px;
        flex-shrink: 0;
    }

    .icon-box i {
        font-size: 30px;
        color: var(--bs-primary);
    }

    .testimonial-card {
        height: 100%;
        transition: all 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .testimonial-img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    .text-warning {
        color: #ffc107 !important;
    }

    .btn-outline-light:hover {
        color: var(--bs-primary) !important;
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="container-fluid bg-breadcrumb py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white mb-3">À Propos de Nous</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">À Propos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- About Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="position-relative">
                    <img src="{{ asset('img/about-1.jpg') }}" alt="À propos d'EGG" class="img-fluid rounded-3 shadow">
                    <div class="about-experience bg-primary text-white p-4 rounded-3 shadow">
                        <h2 class="display-4 fw-bold mb-0">5+</h2>
                        <p class="mb-0">Années d'expérience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="text-uppercase text-primary fw-bold">Notre Histoire</span>
                <h2 class="display-5 fw-bold mb-4">Pionniers des emballages écologiques en Afrique de l'Ouest</h2>
                <p class="lead">Fondée en 2020, EGG (Ecological Growth Guardian) est née d'une vision simple mais ambitieuse : transformer les déchets agricoles en solutions d'emballages durables et écologiques.</p>
                <p>Face au défi croissant de la pollution plastique en Afrique, notre équipe de passionnés s'est engagée à développer des alternatives viables aux emballages traditionnels, en s'appuyant sur les ressources locales et l'innovation technologique.</p>
                
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <div class="icon-box bg-light-primary rounded-circle p-3">
                                    <i class="fas fa-bullseye text-primary fa-2x"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Notre Mission</h5>
                                <p class="text-muted mb-0">Offrir des solutions d'emballages durables qui préservent l'environnement tout en soutenant les communautés locales.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-3">
                                <div class="icon-box bg-light-primary rounded-circle p-3">
                                    <i class="fas fa-eye text-primary fa-2x"></i>
                                </div>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Notre Vision</h5>
                                <p class="text-muted mb-0">Devenir le leader africain des solutions d'emballages écologiques d'ici 2030.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Mission Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="{{ asset('img/mission.jpg') }}" alt="Notre Mission" class="img-fluid rounded-3 shadow">
            </div>
            <div class="col-lg-6 ps-lg-5">
                <span class="text-uppercase text-primary fw-bold">Notre Mission</span>
                <h2 class="display-5 fw-bold mb-4">Mission de l'entreprise</h2>
                <p class="lead">Transformer les déchets agricoles en solutions d'emballages durables pour un avenir plus vert.</p>
                <p>Notre engagement se traduit par :</p>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex">
                        <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                        <span>La valorisation des déchets agricoles locaux en matériaux d'emballage innovants</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                        <span>La réduction de l'impact environnemental des emballages</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                        <span>Le soutien aux agriculteurs locaux par l'achat de leurs déchets</span>
                    </li>
                    <li class="mb-3 d-flex">
                        <i class="fas fa-check-circle text-primary mt-1 me-2"></i>
                        <span>L'innovation continue pour des solutions toujours plus durables</span>
                    </li>
                </ul>
                <p>À travers nos actions, nous contribuons à la préservation de l'environnement tout en créant de la valeur économique locale.</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-uppercase text-primary fw-bold">Nos Valeurs</span>
            <h2 class="display-5 fw-bold mb-3">Ce qui nous guide</h2>
            <p class="lead text-muted">Nos valeurs fondamentales façonnent notre entreprise et nos relations avec nos clients et partenaires</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 text-center">
                    <div class="icon-box bg-primary text-white rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-4 mx-auto">
                        <i class="fas fa-leaf fa-2x"></i>
                    </div>
                    <h4 class="mb-3">Durabilité</h4>
                    <p class="text-muted mb-0">Nous nous engageons à minimiser notre empreinte environnementale à chaque étape de notre chaîne de valeur.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 text-center">
                    <div class="icon-box bg-primary text-white rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-4 mx-auto">
                        <i class="fas fa-lightbulb fa-2x"></i>
                    </div>
                    <h4 class="mb-3">Innovation</h4>
                    <p class="text-muted mb-0">Nous repoussons les limites de la technologie pour créer des solutions d'emballages toujours plus écologiques.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 text-center">
                    <div class="icon-box bg-primary text-white rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-4 mx-auto">
                        <i class="fas fa-hands-helping fa-2x"></i>
                    </div>
                    <h4 class="mb-3">Engagement Communautaire</h4>
                    <p class="text-muted mb-0">Nous croyons en la création de valeur partagée pour nos communautés et nos partenaires.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 text-center">
                    <div class="icon-box bg-primary text-white rounded-circle p-3 d-inline-flex align-items-center justify-content-center mb-4 mx-auto">
                        <i class="fas fa-award fa-2x"></i>
                    </div>
                    <h4 class="mb-3">Excellence</h4>
                    <p class="text-muted mb-0">Nous visons l'excellence dans tout ce que nous faisons, de la qualité de nos produits à notre service client.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-uppercase text-primary fw-bold">Notre Équipe</span>
            <h2 class="display-5 fw-bold mb-3">Rencontrez Notre Équipe</h2>
            <p class="lead text-muted">Une équipe passionnée et dévouée à la création d'un avenir plus durable</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="team-card text-center">
                    <div class="team-img position-relative overflow-hidden rounded-3 mb-4">
                        <img src="{{ asset('img/team-1.jpg') }}" alt="Membre de l'équipe" class="img-fluid w-100">
                        <div class="team-social">
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h4 class="mb-1">Amadou Diallo</h4>
                    <p class="text-primary mb-0">Fondateur & PDG</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="team-card text-center">
                    <div class="team-img position-relative overflow-hidden rounded-3 mb-4">
                        <img src="{{ asset('img/team-2.jpg') }}" alt="Membre de l'équipe" class="img-fluid w-100">
                        <div class="team-social">
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h4 class="mb-1">Aminata Bâ</h4>
                    <p class="text-primary mb-0">Directrice Technique</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="team-card text-center">
                    <div class="team-img position-relative overflow-hidden rounded-3 mb-4">
                        <img src="{{ asset('img/team-3.jpg') }}" alt="Membre de l'équipe" class="img-fluid w-100">
                        <div class="team-social">
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h4 class="mb-1">Ibrahim Ouédraogo</h4>
                    <p class="text-primary mb-0">Responsable Commercial</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="team-card text-center">
                    <div class="team-img position-relative overflow-hidden rounded-3 mb-4">
                        <img src="{{ asset('img/team-4.jpg') }}" alt="Membre de l'équipe" class="img-fluid w-100">
                        <div class="team-social">
                            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white me-2"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h4 class="mb-1">Fatoumata Kaboré</h4>
                    <p class="text-primary mb-0">Responsable R&D</p>
                </div>
            </div>
        </div>
    </div>
</section>
        
<!-- Testimonials Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-uppercase text-primary fw-bold">Témoignages</span>
            <h2 class="display-5 fw-bold mb-3">Ce que disent nos clients</h2>
            <p class="lead text-muted">Découvrez les retours de nos clients satisfaits par nos solutions d'emballages écologiques</p>
        </div>
    </div>
</section>


@endsection