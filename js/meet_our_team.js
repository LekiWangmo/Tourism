// ================== Team Members Slider JS ==================

document.addEventListener("DOMContentLoaded", function() {
    const sliderWrapper = document.querySelector('.team-slider-wrapper');
    const slides = document.querySelectorAll('.team-slide');
    const prevBtn = document.querySelector('.team-slider-nav.prev');
    const nextBtn = document.querySelector('.team-slider-nav.next');

    let slideIndex = 0;
    const totalSlides = slides.length;
    const slidesPerView = 3; // Number of slides to show at a time

    function updateSlider() {
        const slideWidth = slides[0].offsetWidth;
        const moveX = slideWidth * slideIndex;
        sliderWrapper.style.transform = `translateX(-${moveX}px)`;
    }

    nextBtn.addEventListener('click', () => {
        if (slideIndex < totalSlides - slidesPerView) {
            slideIndex++;
        } else {
            slideIndex = 0; // loop to start
        }
        updateSlider();
    });

    prevBtn.addEventListener('click', () => {
        if (slideIndex > 0) {
            slideIndex--;
        } else {
            slideIndex = totalSlides - slidesPerView; // loop to end
        }
        updateSlider();
    });

    // Optional: Click on overlay name to go to profile page
    const overlays = document.querySelectorAll('.team-overlay');
    overlays.forEach((overlay, index) => {
        overlay.addEventListener('click', () => {
            window.location.href = `#ipp.php?member=${index+1}`;
        });
    });
});