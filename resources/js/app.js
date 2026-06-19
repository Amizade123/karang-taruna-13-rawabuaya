import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Intersection Observer for reveal animations
const revealOnScroll = () => {
    const observerOptions = {
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const elements = document.querySelectorAll('.reveal-on-scroll, .logo-reveal');
    elements.forEach(el => observer.observe(el));
};

document.addEventListener('DOMContentLoaded', revealOnScroll);

Alpine.start();
