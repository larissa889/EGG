@extends('layouts.main')

@section('title', 'Contact - EGG - Ecological Growth Guardian')

@section('content')
<!-- Page Header -->
<div class="container-fluid bg-breadcrumb">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-3">Nous contacter</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="container py-5">
    <div class="row g-5">
        <!-- Contact Info -->
        <div class="col-lg-5 contact-info">
            <h4>Contactez-nous</h4>
            <h2>Comment nous trouver</h2>
            
            <div class="d-flex mb-4">
                <div class="me-3">
                    <i class="fas fa-map-marker-alt text-primary fa-2x"></i>
                </div>
                <div>
                    <h5>Adresse</h5>
                    <p>Secteur 25, Ouagadougou<br>Burkina Faso</p>
                </div>
            </div>
            
            <div class="d-flex mb-4">
                <div class="me-3">
                    <i class="fas fa-phone-alt text-primary fa-2x"></i>
                </div>
                <div>
                    <h5>Téléphone</h5>
                    <p><a href="tel:+22670720473">+226 70 72 04 73</a></p>
                </div>
            </div>
            
            <div class="d-flex mb-4">
                <div class="me-3">
                    <i class="fas fa-envelope text-primary fa-2x"></i>
                </div>
                <div>
                    <h5>Email</h5>
                    <p><a href="mailto:info@egg-bf.com">info@egg-bf.com</a></p>
                </div>
            </div>
            
            <div class="d-flex">
                <div class="me-3">
                    <i class="far fa-clock text-primary fa-2x"></i>
                </div>
                <div>
                    <h5>Heures d'ouverture</h5>
                    <p>Lun - Ven: 08:00 - 17:00</p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-7">
            <div class="contact-form">
                <h4>Envoyez-nous un message</h4>
                <form id="contactForm" class="mt-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
                                <label for="name">Votre nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Votre email" required>
                                <label for="email">Votre email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Sujet" required>
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Votre message" id="message" style="height: 150px" required></textarea>
                                <label for="message">Votre message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-4" type="submit">Envoyer le message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Map Section -->
<div class="container-fluid p-0">
    <div class="map" style="height: 400px;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.9236355000003!2d-1.5190854!3d12.3714277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2faa9c4f1d8b4d5%3A0x8f0e6d1c4e5f6a7b8!2sSecteur%2025%2C%20Ouagadougou!5e0!3m2!1sfr!2sbf!4v1620000000000!5m2!1sfr!2sbf" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

<style>
    /* Styles spécifiques pour la page de contact */
    .contact-form .form-control {
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
    }
    
    .contact-form .form-control:focus {
        border-color: var(--bs-primary);
        box-shadow: 0 0 0 0.2rem rgba(107, 142, 78, 0.25);
    }
    
    .contact-info i {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--bs-primary);
    }
    
    @media (max-width: 991.98px) {
        .contact-info {
            margin-bottom: 3rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                // Ajoutez ici le code pour envoyer le formulaire
                alert('Votre message a été envoyé avec succès !');
                this.reset();
            });
        }
    });
</script>
@endsection