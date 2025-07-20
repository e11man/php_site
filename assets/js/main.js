// Modern Design Studio - Main JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Header scroll effect
    const header = document.querySelector('.header');
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.98)';
            header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.boxShadow = 'none';
        }
        
        lastScrollTop = scrollTop;
    });
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = header.offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Scroll Stack Animation
    function initScrollStack() {
        const scroller = document.querySelector('.scroll-stack-scroller');
        const cards = document.querySelectorAll('.scroll-stack-card');
        
        if (!scroller || !cards.length) return;
        
        function updateCards() {
            const scrollTop = scroller.scrollTop;
            const scrollHeight = scroller.scrollHeight - scroller.clientHeight;
            const scrollProgress = scrollTop / scrollHeight;
            
            cards.forEach((card, index) => {
                const cardProgress = Math.max(0, scrollProgress - (index * 0.15));
                const scale = Math.max(0.8, 1 - cardProgress * 0.2);
                const translateY = cardProgress * 50;
                const opacity = Math.max(0.3, 1 - cardProgress * 0.7);
                const blur = cardProgress * 3;
                
                card.style.transform = `translateY(${translateY}px) scale(${scale})`;
                card.style.opacity = opacity;
                card.style.filter = `blur(${blur}px)`;
            });
        }
        
        scroller.addEventListener('scroll', updateCards);
        updateCards(); // Initial call
    }
    
    // Initialize scroll stack
    initScrollStack();
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.card, .service-card, .hero-content').forEach(el => {
        observer.observe(el);
    });
    
    // Form submission handling
    const contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (!data.name || !data.email || !data.message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Show loading state
            const submitBtn = this.querySelector('a[type="submit"], button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.style.pointerEvents = 'none';
            
            // Simulate form submission (replace with actual endpoint)
            setTimeout(() => {
                alert('Thank you for your message! We\'ll get back to you soon.');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.style.pointerEvents = 'auto';
            }, 1500);
        });
    }
    
    // Add loading animation to buttons
    document.querySelectorAll('.btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            if (this.getAttribute('href') === '#' && this.getAttribute('type') !== 'submit') {
                e.preventDefault();
            }
            
            // Add ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
            `;
            
            this.style.position = 'relative';
            this.style.overflow = 'hidden';
            this.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });
    
    // Add CSS for ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        
        .scroll-stack-card .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }
        
        .scroll-stack-card .card-subtitle {
            font-size: 1rem;
            font-weight: 500;
            opacity: 0.8;
            margin-bottom: 1rem;
        }
        
        input::placeholder,
        textarea::placeholder {
            color: #9ca3af !important;
        }
        
        input:focus,
        textarea:focus {
            outline: none;
            border-color: var(--primary-color) !important;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1) !important;
        }
    `;
    document.head.appendChild(style);
    
    // Parallax effect for hero section
    const hero = document.querySelector('.hero');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            hero.style.transform = `translateY(${parallax}px)`;
        });
    }
    
    // Active navigation highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');
    
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (scrollY >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
    
    console.log('🚀 Modern Design Studio - Website loaded successfully!');
});