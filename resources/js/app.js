/**
 * Haute Couture Luxury Animation & Scroll Reveal Engine
 * Designed for SM Embellishment (Atelier ស្រីម៉ៅ​ មង្គល សម្អាងការ)
 */

document.addEventListener('DOMContentLoaded', () => {
    initSilkPageTransitions();
    initScrollReveal();
    initHeroAnimations();
    initInteractiveMicroPhysics();
    initSmoothAnchors();
    initLuxuryCursor();
});

/**
 * 1. Global Scroll Reveal with Auto-Staggering
 */
function initScrollReveal() {
    // Auto-detect high-impact elements on any page to gracefully animate them on scroll (main content only)
    const autoTargets = [
        'main section h2',
        'main section h3',
        '.kbach-divider',
        'main section .grid > div',
        '.gallery-masonry > div',
        'article',
        '.testimonial-card',
        'main form',
        '.pillar-card'
    ];

    autoTargets.forEach(selector => {
        document.querySelectorAll(selector).forEach((el) => {
            // Avoid disturbing hero, navbar, or footer
            if (!el.closest('#navbar') && !el.closest('footer') && !el.closest('section:first-of-type') && !el.classList.contains('no-reveal')) {
                if (!el.classList.contains('reveal') &&
                    !el.classList.contains('reveal-up') &&
                    !el.classList.contains('reveal-scale') &&
                    !el.classList.contains('reveal-left') &&
                    !el.classList.contains('reveal-right')) {
                    el.classList.add('reveal-up');
                }
            }
        });
    });

    // Auto-assign stagger delays to direct children of section grids only (never footer or navbar)
    document.querySelectorAll('main section .grid').forEach(grid => {
        if (!grid.closest('footer') && !grid.closest('#navbar')) {
            const children = Array.from(grid.children);
            children.forEach((child, i) => {
                const staggerNum = (i % 6) + 1;
                child.classList.add(`stagger-${staggerNum}`);
            });
        }
    });

    // IntersectionObserver to trigger '.revealed'
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.08
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                // Optional: Stop observing once revealed for butter-smooth performance
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all reveal elements
    const elementsToObserve = document.querySelectorAll(
        '.reveal, .reveal-up, .reveal-fade, .reveal-scale, .reveal-left, .reveal-right'
    );

    elementsToObserve.forEach(el => revealObserver.observe(el));
}

/**
 * 2. Hero Section Entrance Choreography
 */
function initHeroAnimations() {
    const heroH1 = document.querySelector('section h1');
    const heroP = document.querySelector('section h1 + p, section p.leading-relaxed');
    const heroBtn = document.querySelector('section a[href*="contact"]');
    const heroBg = document.querySelector('section img[alt*="Atelier"], section img[alt*="SM"]');

    if (heroBg) {
        heroBg.classList.add('animate-ken-burns');
    }

    if (heroH1) {
        heroH1.style.opacity = '0';
        heroH1.style.transform = 'translateY(24px)';
        heroH1.style.transition = 'opacity 1s cubic-bezier(0.16, 1, 0.3, 1), transform 1s cubic-bezier(0.16, 1, 0.3, 1)';

        setTimeout(() => {
            heroH1.style.opacity = '1';
            heroH1.style.transform = 'translateY(0)';
        }, 120);
    }

    if (heroP) {
        heroP.style.opacity = '0';
        heroP.style.transform = 'translateY(20px)';
        heroP.style.transition = 'opacity 1s cubic-bezier(0.16, 1, 0.3, 1) 0.25s, transform 1s cubic-bezier(0.16, 1, 0.3, 1) 0.25s';

        setTimeout(() => {
            heroP.style.opacity = '1';
            heroP.style.transform = 'translateY(0)';
        }, 300);
    }

    if (heroBtn) {
        heroBtn.classList.add('btn-shimmer');
        heroBtn.style.opacity = '0';
        heroBtn.style.transform = 'translateY(16px)';
        heroBtn.style.transition = 'opacity 0.9s cubic-bezier(0.16, 1, 0.3, 1) 0.45s, transform 0.9s cubic-bezier(0.16, 1, 0.3, 1) 0.45s';

        setTimeout(() => {
            heroBtn.style.opacity = '1';
            heroBtn.style.transform = 'translateY(0)';
        }, 480);
    }
}

/**
 * 3. Interactive Micro-Physics & Button Shimmers
 */
function initInteractiveMicroPhysics() {
    // Add gold sheen effect to all primary CTA buttons across all pages
    document.querySelectorAll('a, button').forEach(el => {
        const bg = window.getComputedStyle(el).backgroundColor;
        // If golden or primary colored
        if (el.classList.contains('bg-[#b38728]') || el.classList.contains('bg-brand-500') || el.classList.contains('bg-gold-500')) {
            el.classList.add('btn-shimmer');
        }
    });

    // Add image zoom physics to image containers
    document.querySelectorAll('.gallery-masonry > div, .aspect-w-16, .aspect-h-9, [class*="aspect-"]').forEach(container => {
        if (!container.classList.contains('img-luxury-zoom')) {
            container.classList.add('img-luxury-zoom');
        }
    });
}

/**
 * 4. Smooth Anchor Link Scrolling
 */
function initSmoothAnchors() {
    document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

/**
 * 5. Champagne Golden Cursor Aura (Luxury Interactive Physics)
 */
function initLuxuryCursor() {
    // Only activate on pointer-fine devices (desktop/laptop with mouse)
    if (!window.matchMedia('(pointer: fine)').matches) return;

    // Avoid duplicate creation
    if (document.getElementById('luxury-cursor-dot')) return;

    const dot = document.createElement('div');
    dot.id = 'luxury-cursor-dot';
    const aura = document.createElement('div');
    aura.id = 'luxury-cursor-aura';

    document.body.appendChild(dot);
    document.body.appendChild(aura);

    let mouseX = -100;
    let mouseY = -100;
    let auraX = -100;
    let auraY = -100;
    let isVisible = false;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;

        if (!isVisible) {
            isVisible = true;
            dot.style.opacity = '1';
            aura.style.opacity = '1';
            auraX = mouseX;
            auraY = mouseY;
        }

        dot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0) translate(-50%, -50%)`;
    }, { passive: true });

    // Smooth Lerp Trailing for the Aura ring
    function render() {
        if (isVisible) {
            auraX += (mouseX - auraX) * 0.18;
            auraY += (mouseY - auraY) * 0.18;
            aura.style.transform = `translate3d(${auraX}px, ${auraY}px, 0) translate(-50%, -50%)`;
        }
        requestAnimationFrame(render);
    }
    requestAnimationFrame(render);

    // Expand on interactive elements
    const hoverSelectors = 'a, button, [role="button"], input, select, textarea, .group, .cursor-pointer, .gallery-card, .portfolio-item';
    
    document.addEventListener('mouseover', (e) => {
        if (e.target.closest(hoverSelectors)) {
            aura.classList.add('cursor-hover');
            dot.classList.add('cursor-hover');
        }
    });

    document.addEventListener('mouseout', (e) => {
        if (e.target.closest(hoverSelectors)) {
            aura.classList.remove('cursor-hover');
            dot.classList.remove('cursor-hover');
        }
    });

    // Click micro-physics (press down)
    document.addEventListener('mousedown', () => {
        aura.classList.add('cursor-active');
    });

    document.addEventListener('mouseup', () => {
        aura.classList.remove('cursor-active');
    });

    // Fade out when leaving the document
    document.addEventListener('mouseleave', () => {
        isVisible = false;
        dot.style.opacity = '0';
        aura.style.opacity = '0';
    });

    document.addEventListener('mouseenter', () => {
        isVisible = true;
        dot.style.opacity = '1';
        aura.style.opacity = '1';
    });
}

/**
 * 6. Haute Couture Silk Page Transition Engine
 */
function initSilkPageTransitions() {
    const curtain = document.getElementById('silk-page-curtain');
    if (!curtain) return;

    // 1. Initial Page Load: Gracefully slide the silk curtain up out of view
    function revealPage() {
        requestAnimationFrame(() => {
            setTimeout(() => {
                curtain.classList.add('curtain-reveal');
                setTimeout(() => {
                    curtain.classList.remove('curtain-reveal');
                    curtain.classList.add('curtain-ready-bottom');
                }, 750);
            }, 80);
        });
    }

    revealPage();

    // 2. Listen to browser Back/Forward (bfcache) navigation
    window.addEventListener('pageshow', (event) => {
        curtain.classList.add('curtain-reveal');
        setTimeout(() => {
            curtain.classList.remove('curtain-reveal');
            curtain.classList.add('curtain-ready-bottom');
        }, 750);
    });

    // 3. Intercept internal navigation clicks for smooth silk transitions
    document.addEventListener('click', (e) => {
        const link = e.target.closest('a');
        if (!link) return;

        // Skip modified clicks (Ctrl, Cmd, Shift, Alt)
        if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey || e.defaultPrevented) return;

        // Skip external tabs or downloads
        if (link.target === '_blank' || link.hasAttribute('download')) return;

        const href = link.getAttribute('href');
        if (!href || href.startsWith('#') || href.startsWith('javascript:') || href.startsWith('mailto:') || href.startsWith('tel:')) return;

        let targetUrl;
        try {
            targetUrl = new URL(link.href, window.location.origin);
        } catch (err) {
            return;
        }

        // Only transition within our own website
        if (targetUrl.origin !== window.location.origin) return;

        // Don't transition if navigating to current exact page
        if (targetUrl.pathname === window.location.pathname && targetUrl.search === window.location.search) return;

        // Don't intercept Filament admin routes or links marked data-no-transition
        if (targetUrl.pathname.startsWith('/admin') || link.hasAttribute('data-no-transition')) return;

        // Trigger the elegant silk cover
        e.preventDefault();
        curtain.classList.remove('curtain-ready-bottom', 'curtain-reveal');
        
        // Force reflow
        void curtain.offsetHeight;
        curtain.classList.add('curtain-cover');

        // Navigate when curtain fully covers the screen
        setTimeout(() => {
            window.location.href = targetUrl.href;
        }, 440);
    });

    // 4. Ultimate safety fallback (ensure curtain never stays stuck)
    setTimeout(() => {
        if (!curtain.classList.contains('curtain-ready-bottom')) {
            curtain.classList.add('curtain-reveal');
            setTimeout(() => {
                curtain.classList.remove('curtain-reveal');
                curtain.classList.add('curtain-ready-bottom');
            }, 750);
        }
    }, 1500);
}


