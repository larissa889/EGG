@extends('layouts.main')

@section('title', 'Actualités - EGG - Ecological Growth Guardian')

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

    .news-card {
        transition: all 0.3s ease;
        margin-bottom: 30px;
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        height: 100%;
    }

    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .news-img {
        height: 200px;
        overflow: hidden;
    }

    .news-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .news-card:hover .news-img img {
        transform: scale(1.05);
    }

    .news-date {
        position: absolute;
        top: 15px;
        right: 15px;
        background: var(--bs-primary);
        color: white;
        padding: 5px 15px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
    }

    .news-category {
        display: inline-block;
        padding: 3px 12px;
        background: rgba(30, 126, 52, 0.1);
        color: var(--bs-primary);
        border-radius: 30px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 10px;
    }

    .news-tag {
        display: inline-block;
        padding: 2px 10px;
        background: #f8f9fa;
        color: #6c757d;
        border-radius: 3px;
        font-size: 12px;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .news-tag:hover {
        background: var(--bs-primary);
        color: white;
        text-decoration: none;
    }

    .news-sidebar {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 30px;
        margin-bottom: 30px;
    }

    .search-form .form-control {
        border-radius: 30px;
        padding: 12px 20px;
    }

    .search-form .btn {
        border-radius: 0 30px 30px 0;
        padding: 12px 20px;
    }

    .category-list {
        list-style: none;
        padding: 0;
    }

    .category-list li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
    }

    .category-list li:last-child {
        border-bottom: none;
    }

    .category-list a {
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .category-list a:hover {
        color: var(--bs-primary);
        padding-left: 5px;
    }

    .recent-post {
        display: flex;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }

    .recent-post:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .recent-post-img {
        width: 80px;
        height: 60px;
        border-radius: 5px;
        overflow: hidden;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .recent-post-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .recent-post-content h6 {
        margin-bottom: 5px;
    }

    .recent-post-content a {
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .recent-post-content a:hover {
        color: var(--bs-primary);
    }

    .recent-post-content span {
        font-size: 12px;
        color: #6c757d;
    }

    .news-pagination .page-link {
        color: var(--bs-primary);
        border: 1px solid #dee2e6;
        margin: 0 5px;
        border-radius: 5px !important;
    }

    .news-pagination .page-item.active .page-link {
        background-color: var(--bs-primary);
        border-color: var(--bs-primary);
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="container-fluid bg-breadcrumb py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white mb-3">Actualités</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Actualités</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- News Section -->
<section class="py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <!-- News Item 1 -->
                    <div class="col-md-6 mb-4">
                        <div class="news-card">
                            <div class="position-relative">
                                <div class="news-img">
                                    <img src="{{ asset('img/news-1.jpg') }}" alt="Nouvelle gamme d'emballages" class="img-fluid">
                                </div>
                                <div class="news-date">15 Juin 2023</div>
                            </div>
                            <div class="p-4">
                                <span class="news-category">Innovation</span>
                                <h4 class="mb-3"><a href="#" class="text-dark text-decoration-none">Lancement de notre nouvelle gamme d'emballages 100% biodégradables</a></h4>
                                <p class="text-muted mb-3">Découvrez notre nouvelle collection d'emballages éco-responsables fabriqués à partir de matières premières renouvelables.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-primary text-decoration-none">Lire la suite <i class="fas fa-arrow-right ms-2"></i></a>
                                    <div>
                                        <span class="me-2"><i class="far fa-eye me-1"></i> 245</span>
                                        <span><i class="far fa-comment me-1"></i> 12</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 2 -->
                    <div class="col-md-6 mb-4">
                        <div class="news-card">
                            <div class="position-relative">
                                <div class="news-img">
                                    <img src="{{ asset('img/news-2.jpg') }}" alt="Partenariat stratégique" class="img-fluid">
                                </div>
                                <div class="news-date">2 Juin 2023</div>
                            </div>
                            <div class="p-4">
                                <span class="news-category">Partenariat</span>
                                <h4 class="mb-3"><a href="#" class="text-dark text-decoration-none">Partenariat stratégique avec GreenTech Africa pour l'innovation durable</a></h4>
                                <p class="text-muted mb-3">Nous sommes fiers d'annoncer notre nouveau partenariat avec GreenTech Africa pour développer des solutions innovantes de gestion des déchets.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-primary text-decoration-none">Lire la suite <i class="fas fa-arrow-right ms-2"></i></a>
                                    <div>
                                        <span class="me-2"><i class="far fa-eye me-1"></i> 189</span>
                                        <span><i class="far fa-comment me-1"></i> 8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 3 -->
                    <div class="col-md-6 mb-4">
                        <div class="news-card">
                            <div class="position-relative">
                                <div class="news-img">
                                    <img src="{{ asset('img/news-3.jpg') }}" alt="Atelier de formation" class="img-fluid">
                                </div>
                                <div class="news-date">20 Mai 2023</div>
                            </div>
                            <div class="p-4">
                                <span class="news-category">Événement</span>
                                <h4 class="mb-3"><a href="#" class="text-dark text-decoration-none">Atelier sur les emballages durables : retour sur l'événement</a></h4>
                                <p class="text-muted mb-3">Retour en images sur notre atelier dédié aux alternatives durables aux emballages plastiques qui a rassemblé plus de 50 participants.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-primary text-decoration-none">Lire la suite <i class="fas fa-arrow-right ms-2"></i></a>
                                    <div>
                                        <span class="me-2"><i class="far fa-eye me-1"></i> 312</span>
                                        <span><i class="far fa-comment me-1"></i> 24</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Item 4 -->
                    <div class="col-md-6 mb-4">
                        <div class="news-card">
                            <div class="position-relative">
                                <div class="news-img">
                                    <img src="{{ asset('img/news-4.jpg') }}" alt="Prix de l'innovation" class="img-fluid">
                                </div>
                                <div class="news-date">5 Mai 2023</div>
                            </div>
                            <div class="p-4">
                                <span class="news-category">Récompense</span>
                                <h4 class="mb-3"><a href="#" class="text-dark text-decoration-none">EGG reçoit le prix de l'innovation durable 2023</a></h4>
                                <p class="text-muted mb-3">Notre engagement pour un avenir plus vert a été récompensé par le prestigieux prix de l'innovation durable décerné par Green Business Awards.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-primary text-decoration-none">Lire la suite <i class="fas fa-arrow-right ms-2"></i></a>
                                    <div>
                                        <span class="me-2"><i class="far fa-eye me-1"></i> 421</span>
                                        <span><i class="far fa-comment me-1"></i> 35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-5">
                    <ul class="pagination justify-content-center news-pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search -->
                <div class="news-sidebar mb-5">
                    <h5 class="mb-4">Rechercher</h5>
                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher...">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Categories -->
                <div class="news-sidebar mb-5">
                    <h5 class="mb-4">Catégories</h5>
                    <ul class="category-list">
                        <li><a href="#">Innovation <span class="float-end">(12)</span></a></li>
                        <li><a href="#">Événements <span class="float-end">(8)</span></a></li>
                        <li><a href="#">Partenariats <span class="float-end">(5)</span></a></li>
                        <li><a href="#">Développement Durable <span class="float-end">(15)</span></a></li>
                        <li><a href="#">Actualités de l'entreprise <span class="float-end">(7)</span></a></li>
                    </ul>
                </div>

                <!-- Recent Posts -->
                <div class="news-sidebar mb-5">
                    <h5 class="mb-4">Articles Récents</h5>
                    <div class="recent-post">
                        <div class="recent-post-img">
                            <img src="{{ asset('img/news-thumb-1.jpg') }}" alt="Post Thumbnail">
                        </div>
                        <div class="recent-post-content">
                            <h6><a href="#">Nouvelle gamme d'emballages 100% biodégradables</a></h6>
                            <span>15 Juin 2023</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-img">
                            <img src="{{ asset('img/news-thumb-2.jpg') }}" alt="Post Thumbnail">
                        </div>
                        <div class="recent-post-content">
                            <h6><a href="#">Partenariat avec GreenTech Africa</a></h6>
                            <span>2 Juin 2023</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-img">
                            <img src="{{ asset('img/news-thumb-3.jpg') }}" alt="Post Thumbnail">
                        </div>
                        <div class="recent-post-content">
                            <h6><a href="#">Atelier sur les emballages durables</a></h6>
                            <span>20 Mai 2023</span>
                        </div>
                    </div>
                </div>

                <!-- Tags -->
                <div class="news-sidebar">
                    <h5 class="mb-4">Mots-clés</h5>
                    <div>
                        <a href="#" class="news-tag">#écologie</a>
                        <a href="#" class="news-tag">#développement durable</a>
                        <a href="#" class="news-tag">#innovation</a>
                        <a href="#" class="news-tag">#emballages</a>
                        <a href="#" class="news-tag">#biodégradable</a>
                        <a href="#" class="news-tag">#économie circulaire</a>
                        <a href="#" class="news-tag">#RSE</a>
                        <a href="#" class="news-tag">#environnement</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="fw-bold mb-4">Restez informé de nos actualités</h2>
                <p class="lead text-muted mb-5">Abonnez-vous à notre newsletter pour recevoir les dernières actualités et offres spéciales directement dans votre boîte de réception.</p>
                
                <form class="row g-3 justify-content-center">
                    <div class="col-md-8">
                        <input type="email" class="form-control form-control-lg" placeholder="Votre adresse email">
                    </div>
                    <div class="col-md-auto">
                        <button type="submit" class="btn btn-primary btn-lg">S'abonner</button>
                    </div>
                    <div class="col-12">
                        <div class="form-check d-inline-block">
                            <input class="form-check-input" type="checkbox" id="newsletter-privacy" required>
                            <label class="form-check-label small" for="newsletter-privacy">
                                J'accepte la <a href="{{ route('privacy') }}" class="text-primary">politique de confidentialité</a> *
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection