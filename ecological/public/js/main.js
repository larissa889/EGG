/**
 * Template Name: EGG - Ecological Growth Guardian
 * Version: 1.1
 * Description: Optimized for better performance and reliability
 */

(function($) {
    'use strict';

    // Wait for the document to be fully loaded
    $(document).ready(function() {
        // Back to top button
        const backToTop = $('.back-to-top');
        
        // Show/hide back to top button on scroll
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300) {
                backToTop.fadeIn('slow');
            } else {
                backToTop.fadeOut('slow');
            }
        });

        // Smooth scroll to top
        backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 800, 'easeInOutExpo');
            return false;
        });

        // Navbar on scroll
        const navbar = $('.navbar');
        $(window).on('scroll', function() {
            const scroll = $(window).scrollTop();
            if (scroll >= 50) {
                navbar.addClass('sticky-top shadow-sm')
                      .css('background', 'rgba(255, 255, 255, 0.95)');
            } else {
                navbar.removeClass('sticky-top shadow-sm')
                      .css('background', 'transparent');
            }
        });

        // Initialize Testimonials Carousel if element exists
        if ($(".testimonial-carousel").length) {
            $(".testimonial-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1000,
                center: true,
                dots: true,
                loop: true,
                margin: 25,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });
        }

        // Initialize Portfolio Isotope if element exists
        const $portfolioContainer = $('.portfolio-container');
        if ($portfolioContainer.length) {
            const portfolioIsotope = $portfolioContainer.isotope({
                itemSelector: '.portfolio-item',
                layoutMode: 'fitRows'
            });

            $('#portfolio-flters li').on('click', function() {
                $("#portfolio-flters li").removeClass('active');
                $(this).addClass('active');
                portfolioIsotope.isotope({
                    filter: $(this).data('filter')
                });
            });
        }

        // Initialize Counter Up if element exists
        if ($('[data-toggle="counter-up"]').length) {
            $('[data-toggle="counter-up"]').counterUp({
                delay: 10,
                time: 2000
            });
        }

        // Smooth scrolling for anchor links
        $('a[href*="#"]').on('click', function(e) {
            if (this.hash !== '') {
                e.preventDefault();
                const hash = this.hash;
                const target = $(hash);
                
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 70
                    }, 800, 'easeInOutExpo', function() {
                        window.location.hash = hash;
                    });
                }
            }
        });

        // Initialize any other carousels
        $('.owl-carousel').not('.testimonial-carousel').each(function() {
            $(this).owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                smartSpeed: 1000
            });
        });
    });

    // Fallback for spinner in case DOM ready takes too long
    setTimeout(function() {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.add('fade-out');
            setTimeout(() => {
                spinner.style.display = 'none';
            }, 500);
        }
    }, 5000); // 5 seconds timeout as a safety net

})(jQuery);