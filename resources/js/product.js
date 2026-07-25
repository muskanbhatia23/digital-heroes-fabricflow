import AOS from "aos";
import "aos/dist/aos.css";
/**
 * FabricFlow — Services Page JS
 * Handles: Image Lightbox, Smooth Scroll, Label Animations
 */

document.addEventListener('DOMContentLoaded', function () {

    // ==========================================
    //  IMAGE LIGHTBOX
    // ==========================================
    const lightbox      = document.getElementById('imageLightbox');
    const lightboxImg   = document.getElementById('lightboxImage');
    const lightboxClose = document.querySelector('.lightbox-close');
    const triggers      = document.querySelectorAll('.lightbox-trigger');

    if (lightbox && lightboxImg) {

        // Open lightbox on image click
        triggers.forEach(function (img) {
            img.addEventListener('click', function () {
                lightboxImg.src = img.src;
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close on X button
        if (lightboxClose) {
            lightboxClose.addEventListener('click', function () {
                closeLightbox();
            });
        }

        // Close on overlay click
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                closeLightbox();
            }
        });

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
            // Clear src after animation
            setTimeout(function () {
                lightboxImg.src = '';
            }, 300);
        }
    }

    // ==========================================
    //  SMOOTH SCROLL FOR ANCHOR LINKS
    // ==========================================
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ==========================================
    //  INTERSECTION OBSERVER — Stagger Cards
    //  (Works alongside AOS, adds extra polish)
    // ==========================================
    var serviceCards = document.querySelectorAll('.service-card');

    if ('IntersectionObserver' in window) {
        var cardObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    cardObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        serviceCards.forEach(function (card) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            cardObserver.observe(card);
        });
    }

    // ==========================================
    //  HOVER PARALLAX ON SERVICE IMAGES
    //  (Subtle tilt effect on desktop)
    // ==========================================
    if (window.innerWidth > 991) {
        var serviceImages = document.querySelectorAll('.service-image');

        serviceImages.forEach(function (imageWrap) {
            imageWrap.addEventListener('mousemove', function (e) {
                var rect = imageWrap.getBoundingClientRect();
                var x = (e.clientX - rect.left) / rect.width - 0.5;
                var y = (e.clientY - rect.top) / rect.height - 0.5;

                imageWrap.style.transform =
                    'perspective(600px) rotateY(' + (x * 5) + 'deg) rotateX(' + (-y * 5) + 'deg)';
            });

            imageWrap.addEventListener('mouseleave', function () {
                imageWrap.style.transform = 'perspective(600px) rotateY(0deg) rotateX(0deg)';
                imageWrap.style.transition = 'transform 0.4s ease';
            });

            imageWrap.addEventListener('mouseenter', function () {
                imageWrap.style.transition = 'none';
            });
        });
    }

});
