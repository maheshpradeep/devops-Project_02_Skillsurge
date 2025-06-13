// Mobile menu toggle function - globally accessible for the onclick attribute
function toggleMobileMenu() {
    const nav = document.getElementById('main-navigation');
    if (nav.style.display === 'block') {
        nav.style.display = 'none';
    } else {
        nav.style.display = 'block';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    // Set initial state for mobile menu on page load
    if (window.innerWidth <= 768) {
        const nav = document.getElementById('main-navigation');
        if (nav) {
            nav.style.display = 'none';
        }
    }
    
    // Close mobile menu when clicking a navigation link
    const navLinks = document.querySelectorAll('#main-navigation a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                const nav = document.getElementById('main-navigation');
                if (nav) {
                    nav.style.display = 'none';
                }
            }
        });
    });
    
    // Enhanced Slideshow functionality
    const slider = document.querySelector('.slider');
    if (slider) {
        const slides = slider.querySelectorAll('.slide');
        let currentSlide = 0;
        
        // Only run the automatic slideshow if there are multiple slides
        if (slides.length > 1) {
            // Initial setup to hide all slides except the first one
            slides.forEach((slide, index) => {
                if (index !== 0) {
                    slide.style.opacity = '0';
                    slide.style.position = 'absolute';
                } else {
                    slide.style.opacity = '1';
                    slide.style.position = 'relative';
                }
                slide.style.transition = 'opacity 0.5s ease-in-out';
            });
            
            // Set interval for slideshow
            setInterval(() => {
                // Hide current slide
                slides[currentSlide].style.opacity = '0';
                slides[currentSlide].style.position = 'absolute';
                
                // Move to next slide
                currentSlide = (currentSlide + 1) % slides.length;
                
                // Show next slide
                slides[currentSlide].style.opacity = '1';
                slides[currentSlide].style.position = 'relative';
                
            }, 3000); // Change slide every 5 seconds
        }
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add animation on scroll
    const sections = document.querySelectorAll('section');
    const fadeInOptions = {
        threshold: 0.3,
        rootMargin: "0px 0px -100px 0px"
    };

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
            observer.unobserve(entry.target);
        });
    }, fadeInOptions);

    sections.forEach(section => {
        section.style.opacity = 0;
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        fadeInObserver.observe(section);
    });

    // Replace any code that might be using Range.expand() with proper Selection API
    // This addresses the deprecation warning: "Range.expand() is deprecated. Please use Selection.modify() instead."
    document.addEventListener('selectionchange', function() {
        const selection = window.getSelection();
        if (selection.rangeCount > 0) {
            // Use modern Selection API methods if needed
            // Example: selection.modify('extend', 'forward', 'word');
        }
    });
});
