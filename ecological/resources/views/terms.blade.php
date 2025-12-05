@extends('layouts.main')

@section('title', 'Conditions Générales d\'Utilisation - EGG - Ecological Growth Guardian')

@push('styles')
<style>
    .bg-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/carousel-1.jpg') }}') center/cover no-repeat !important;
        min-height: 300px;
        display: flex;
        align-items: center;
        color: white;
        margin-bottom: 50px;
    }
    
    .terms-content {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
        padding: 40px;
    }
    
    .terms-section {
        margin-bottom: 40px;
    }
    
    .terms-section h2 {
        color: var(--bs-primary);
        margin-bottom: 20px;
        font-weight: 600;
    }
    
    .terms-section h3 {
        color: #333;
        margin: 25px 0 15px;
        font-size: 1.4rem;
    }
    
    .terms-section p, 
    .terms-section ul, 
    .terms-section ol {
        color: #555;
        line-height: 1.8;
        margin-bottom: 15px;
    }
    
    .terms-section ul,
    .terms-section ol {
        padding-left: 25px;
    }
    
    .terms-section li {
        margin-bottom: 8px;
    }
    
    .last-updated {
        font-style: italic;
        color: #777;
        border-top: 1px solid #eee;
        padding-top: 20px;
        margin-top: 30px;
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<div class="container-fluid bg-breadcrumb py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white mb-3">Conditions Générales d'Utilisation</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">CGU</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Terms Content -->
<section class="py-5">
    <div class="container">
        <div class="terms-content">
            <div class="terms-section">
                <p class="lead">Dernière mise à jour : 4 Décembre 2023</p>
                <p>Les présentes conditions générales d'utilisation (ci-après les « CGU ») ont pour objet l'encadrement juridique de l'utilisation du site egg-eco.com (ci-après le « Site ») et de ses services.</p>
                <p>En accédant à ce site, vous acceptez sans réserve les présentes conditions générales d'utilisation. Celles-ci pourront être modifiées ou complétées à tout moment par EGG - Ecological Growth Guardian.</p>
            </div>
            
            <div class="terms-section">
                <h2>1. Mentions légales</h2>
                <p><strong>Éditeur du site :</strong><br>
                EGG - Ecological Growth Guardian<br>

                Siège social : Ouagadougou, Secture 25<br>
                
                Téléphone : +226 70 72 04 73 <br>
                Email : info@egg-bf.com</p>
                
                
                
                
            </div>
            
            <div class="terms-section">
                <h2>2. Accès au site</h2>
                <p>L'accès au site et son utilisation sont réservés à un usage strictement personnel. Vous vous engagez à ne pas utiliser ce site et les informations ou données qui y figurent à des fins commerciales, politiques, publicitaires ou pour toute forme de sollicitation commerciale.</p>
            </div>
            
            <div class="terms-section">
                <h2>3. Propriété intellectuelle</h2>
                <p>L'ensemble des éléments constituant le site (textes, images, vidéos, logos, etc.) sont la propriété exclusive d'EGG - Ecological Growth Guardian ou de ses partenaires. Toute reproduction, représentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie des éléments du site sans l'accord préalable et écrit d'EGG est strictement interdite et constituerait un acte de contrefaçon sanctionné par les articles L.335-2 et suivants du Code de la propriété intellectuelle.</p>
            </div>
            
            <div class="terms-section">
                <h2>4. Liens hypertextes</h2>
                <p>Le site peut contenir des liens hypertextes vers d'autres sites. EGG - Ecological Growth Guardian n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu et aux pratiques en matière de protection des données personnelles.</p>
            </div>
            
            <div class="terms-section">
                <h2>5. Responsabilité</h2>
                <p>Les informations et/ou documents figurant sur le site sont susceptibles de contenir des inexactitudes techniques ou des erreurs typographiques. EGG - Ecological Growth Guardian se réserve le droit de les corriger, dès que ces erreurs sont portées à sa connaissance.</p>
                <p>EGG - Ecological Growth Guardian décline toute responsabilité en cas de difficulté d'accès à son site ou d'interruptions dans la connexion.</p>
            </div>
            
            <div class="terms-section">
                <h2>6. Données personnelles</h2>
                <p>Les informations concernant la collecte et le traitement des données personnelles sont détaillées dans notre <a href="{{ route('privacy') }}">Politique de Confidentialité</a>.</p>
            </div>
            
            <div class="terms-section">
                <h2>7. Droit applicable et juridiction compétente</h2>
                <p>Les présentes conditions générales sont soumises au droit français. En cas de litige, les tribunaux français seront seuls compétents.</p>
            </div>
            
            <div class="terms-section">
                <h2>8. Modification des conditions d'utilisation</h2>
                <p>EGG - Ecological Growth Guardian se réserve le droit de modifier, à tout moment et sans préavis, les présentes conditions d'utilisation afin de les adapter aux évolutions du site et/ou de son exploitation.</p>
            </div>
            
            <p class="last-updated">Dernière mise à jour : 4 Décembre 2023</p>
        </div>
    </div>
</section>

@endsection