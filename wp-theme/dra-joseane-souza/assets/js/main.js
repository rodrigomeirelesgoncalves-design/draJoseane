/**
 * Dra. Joseane Souza Theme JavaScript
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initHeader();
        initMobileMenu();
        initFAQ();
        initContactForm();
        initSmoothScroll();
        initAnimations();
    });

    /**
     * Header scroll effect
     */
    function initHeader() {
        const header = document.getElementById('site-header');
        if (!header) return;

        function handleScroll() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    /**
     * Mobile menu toggle
     */
    function initMobileMenu() {
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileNav = document.getElementById('mobile-nav');
        
        if (!menuBtn || !mobileNav) return;

        const menuIcon = menuBtn.querySelector('.menu-icon');
        const closeIcon = menuBtn.querySelector('.close-icon');

        menuBtn.addEventListener('click', function() {
            const isOpen = mobileNav.classList.toggle('active');
            
            menuIcon.style.display = isOpen ? 'none' : 'block';
            closeIcon.style.display = isOpen ? 'block' : 'none';
            
            menuBtn.setAttribute('aria-label', isOpen ? 'Fechar menu' : 'Abrir menu');
        });

        // Close menu when clicking on a link
        mobileNav.querySelectorAll('.nav-link').forEach(function(link) {
            link.addEventListener('click', function() {
                mobileNav.classList.remove('active');
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileNav.contains(e.target) && !menuBtn.contains(e.target)) {
                mobileNav.classList.remove('active');
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }
        });
    }

    /**
     * FAQ accordion
     */
    function initFAQ() {
        const faqItems = document.querySelectorAll('.faq-item');
        
        faqItems.forEach(function(item) {
            const question = item.querySelector('.faq-question');
            
            question.addEventListener('click', function() {
                const isActive = item.classList.contains('active');
                
                // Close all other items
                faqItems.forEach(function(otherItem) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
                });
                
                // Toggle current item
                if (!isActive) {
                    item.classList.add('active');
                    question.setAttribute('aria-expanded', 'true');
                }
            });
        });
    }

    /**
     * Contact form handling
     */
    function initContactForm() {
        const form = document.getElementById('contact-form');
        if (!form) return;

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(form);
            formData.append('action', 'dra_joseane_contact');
            formData.append('nonce', draJoseaneData.nonce);

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Enviando...';
            submitBtn.disabled = true;

            fetch(draJoseaneData.ajaxUrl, {
                method: 'POST',
                body: formData,
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    form.reset();
                    alert(data.data.message);
                } else {
                    alert(data.data.message || 'Erro ao enviar mensagem.');
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
                alert('Erro ao enviar mensagem. Por favor, tente novamente.');
            })
            .finally(function() {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerHeight = document.getElementById('site-header').offsetHeight;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    /**
     * Scroll animations
     */
    function initAnimations() {
        const animatedElements = document.querySelectorAll('.animate-fade-in, .animate-fade-in-left, .animate-fade-in-right');
        
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0) translateX(0)';
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            animatedElements.forEach(function(el) {
                el.style.opacity = '0';
                observer.observe(el);
            });
        }
    }

})();
