document.addEventListener('DOMContentLoaded', function () {
    // ------------------ SLIDER FUNCTIONALITY ------------------
    const slides = document.querySelectorAll('.slide');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    let currentSlide = 0;
    let slideInterval = setInterval(nextSlide, 3000);
    let transitionTimer;

    function showSlide(index) {
        const outgoingSlide = slides[currentSlide];
        const incomingSlide = slides[index];

        if (outgoingSlide === incomingSlide) {
            incomingSlide.classList.add('active');
            return;
        }

        clearTimeout(transitionTimer);
        outgoingSlide.classList.remove('active');
        outgoingSlide.classList.add('leaving');
        incomingSlide.classList.remove('leaving', 'entering');
        incomingSlide.classList.add('active');
        incomingSlide.classList.add('entering');

        transitionTimer = setTimeout(() => {
            outgoingSlide.classList.remove('leaving');
            incomingSlide.classList.remove('entering');
        }, 1200);

        currentSlide = index;
    }

    function nextSlide() {
        showSlide((currentSlide + 1) % slides.length);
    }

    function prevSlide() {
        showSlide((currentSlide - 1 + slides.length) % slides.length);
    }

    next.addEventListener('click', () => {
        nextSlide();
        resetInterval();
    });

    prev.addEventListener('click', () => {
        prevSlide();
        resetInterval();
    });

    function resetInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 7000);
    }

    // Initialize first slide
    showSlide(currentSlide);

    // ------------------ FADE-IN ANIMATION FOR SCROLL ------------------
    const elements = document.querySelectorAll('.fade-in-slide-top, .fade-in-slide-left, .fade-in-slide-right');
    const sections = document.querySelectorAll('.animated-section');

    const observerOptions = { threshold: 0.1, rootMargin: "0px 0px -50px 0px" };
    const fadeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    elements.forEach(el => fadeObserver.observe(el));

    const bgObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.style.background = "linear-gradient(135deg, #1c3d5a, #1c5a7a)";
            } else {
                entry.target.style.background = "linear-gradient(135deg, #1c3d5a, #0b2e4d)";
            }
        });
    }, { threshold: 0 });

    sections.forEach(sec => bgObserver.observe(sec));
});
