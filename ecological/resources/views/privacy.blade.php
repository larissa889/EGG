@extends('layouts.main')

@section('title', 'Politique de Confidentialité - EGG - Ecological Growth Guardian')

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
    
    .privacy-content {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
        padding: 40px;
    }
    
    .privacy-section {
        margin-bottom: 40px;
    }
    
    .privacy-section h2 {
        color: var(--bs-primary);
        margin-bottom: 20px;
        font-weight: 600;
    }
    
    .privacy-section h3 {
        color: #333;
        margin: 25px 0 15px;
        font-size: 1.4rem;
    }
    
    .privacy-section p, 
    .privacy-section ul {
        color: #555;
        line-height: 1.8;
        margin-bottom: 15px;
    }
    
    .privacy-section ul {
        padding-left: 25px;
    }
    
    .privacy-section li {
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
                <h1 class="display-4 text-white mb-3">Politique de Confidentialité</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Accueil</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Confidentialité</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Privacy Content -->
<section class="py-5">
    <div class="container">
        <div class="privacy-content">
            <div class="privacy-section">
                <p class="lead">Dernière mise à jour : 4 Décembre 2023</p>
                <p>Chez EGG - Ecological Growth Guardian, nous prenons la protection de vos données personnelles très au sérieux. Cette politique de confidentialité explique quelles informations nous collectons, comment nous les utilisons et comment nous les protégeons.</p>
            </div>
            
            <div class="privacy-section">
                <h2>1. Collecte des informations</h2>
                <p>Nous pouvons collecter les types d'informations suivants :</p>
                <ul>
                    <li>Informations d'identification personnelle (nom, prénom, adresse e-mail, numéro de téléphone)</li>
                    <li>Informations de paiement (uniquement pour les transactions, via des passerelles de paiement sécurisées)</li>
                    <li>Données de navigation et d'utilisation du site</li>
                    <li>Informations sur les préférences et centres d'intérêt</li>
                </ul>
            </div>
            
            <div class="privacy-section">
                <h2>2. Utilisation des informations</h2>
                <p>Nous utilisons vos informations pour :</p>
                <ul>
                    <li>Fournir, exploiter et maintenir notre site web</li>
                    <li>Améliorer, personnaliser et développer notre site web</li>
                    <li>Vous contacter pour le service client, les mises à jour et d'autres informations relatives au site web</li>
                    <li>Vous envoyer des e-mails promotionnels (uniquement avec votre consentement)</li>
                    <li>Prévenir et détecter la fraude</li>
                </ul>
            </div>
            
            <div class="privacy-section">
                <h2>3. Protection des données</h2>
                <p>Nous mettons en œuvre des mesures de sécurité appropriées pour protéger vos informations personnelles contre tout accès non autorisé, altération, divulgation ou destruction. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est sécurisée à 100%.</p>
            </div>
            
            <div class="privacy-section">
                <h2>4. Partage des informations</h2>
                <p>Nous ne vendons, n'échangeons ni ne louons vos informations personnelles à des tiers sans votre consentement, sauf dans les cas suivants :</p>
                <ul>
                    <li>Aux fournisseurs de services qui travaillent en notre nom</li>
                    <li>Pour se conformer à des obligations légales</li>
                    <li>Pour protéger et défendre nos droits et nos biens</li>
                    <li>Pour prévenir ou enquêter sur d'éventuels actes répréhensibles liés au service</li>
                </ul>
            </div>
            
            <div class="privacy-section">
                <h2>5. Vos droits</h2>
                <p>Conformément au Règlement Général sur la Protection des Données (RGPD), vous avez le droit de :</p>
                <ul>
                    <li>Accéder à vos données personnelles</li>
                    <li>Demander la rectification de vos données</li>
                    <li>Demander l'effacement de vos données</li>
                    <li>Vous opposer au traitement de vos données</li>
                    <li>Demander la limitation du traitement</li>
                    <li>Demander la portabilité de vos données</li>
                </ul>
                <p>Pour exercer ces droits, veuillez nous contacter à l'adresse : <a href="mailto:privacy@egg-eco.com">privacy@egg-eco.com</a></p>
            </div>
            
            <div class="privacy-section">
                <h2>6. Cookies</h2>
                <p>Notre site utilise des cookies pour améliorer votre expérience. Vous pouvez configurer votre navigateur pour refuser tous les cookies ou pour indiquer quand un cookie est envoyé.</p>
            </div>
            
            <div class="privacy-section">
                <h2>7. Modifications de la politique de confidentialité</h2>
                <p>Nous pouvons mettre à jour notre politique de confidentialité de temps à autre. Nous vous informerons de tout changement en publiant la nouvelle politique de confidentialité sur cette page.</p>
            </div>
            
            <div class="privacy-section">
                <h2>8. Nous contacter</h2>
                <p>Si vous avez des questions sur cette politique de confidentialité, vous pouvez nous contacter :</p>
                <ul>
                    <li>Par email : <a href="mailto:info@egg-bf.com">info@egg-bf.com</a></li>
                    <li>Par téléphone : +226 70720473</li>
                    <li>Par courrier : EGG - Ecological Growth Guardian, Ouagadougou, Secteur 25</li>
                </ul>
            </div>
            
            <p class="last-updated">Dernière mise à jour : 4 Décembre 2023</p>
        </div>
    </div>
</section>

@endsection