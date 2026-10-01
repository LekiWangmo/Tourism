document.addEventListener("DOMContentLoaded", () => {
  const container = document.querySelector(".tours-container");
  const wrapper = document.querySelector(".tours-wrapper");
  const prevBtn = document.querySelector(".arrow-prev");
  const nextBtn = document.querySelector(".arrow-next");

  if (!wrapper || !wrapper.querySelector(".tour-slide")) return;

  const originalSlides = Array.from(wrapper.querySelectorAll(".tour-slide"));
  originalSlides.forEach((slide) => wrapper.appendChild(slide.cloneNode(true)));
  const slides = wrapper.querySelectorAll(".tour-slide");
  const originalSlideCount = originalSlides.length;

  let currentIndex = 0;
  let autoSlideTimer = null;
  const slideDelay = 5000; // Timer interval duration set to 5 seconds

  // Core movement engine calculation
  function moveSlider(shouldReset = true) {
    // Read the width of a single card + the layout structural gap
    const cardWidth = slides[0].getBoundingClientRect().width;
    const gap = parseFloat(window.getComputedStyle(wrapper).gap) || 0;

    // Shift the flex strip frame horizontally
    const amountToMove = currentIndex * (cardWidth + gap);
    wrapper.style.transform = `translateX(-${amountToMove}px)`;

    if (shouldReset && currentIndex === originalSlideCount) {
      wrapper.addEventListener("transitionend", resetLoopPosition, { once: true });
    }
  }

  function resetLoopPosition() {
    currentIndex = 0;
    wrapper.style.transition = "none";
    moveSlider();
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        wrapper.style.transition = "";
      });
    });
  }

  // Next Slide Action
  function nextSlide() {
    currentIndex++;
    moveSlider();
  }

  // Previous Slide Action
  function prevSlide() {
    if (currentIndex === 0) {
      wrapper.style.transition = "none";
      currentIndex = originalSlideCount;
      moveSlider(false);
      requestAnimationFrame(() => {
        wrapper.style.transition = "";
        currentIndex--;
        moveSlider();
      });
      return;
    }

    currentIndex--;
    moveSlider();
  }

  // Timer Control Engines
  function startAutoSlide() {
    stopAutoSlide(); // Safety reset to avoid stacking duplicate running timers
    autoSlideTimer = setInterval(nextSlide, slideDelay);
  }

  function stopAutoSlide() {
    if (autoSlideTimer) {
      clearInterval(autoSlideTimer);
    }
  }

  // Manual Click Event Listeners
  nextBtn.addEventListener("click", () => {
    nextSlide();
    startAutoSlide(); // Reset timer cadence on manual click
  });

  prevBtn.addEventListener("click", () => {
    prevSlide();
    startAutoSlide(); // Reset timer cadence on manual click
  });

  // Interactive Hover Listeners to Pause/Play
  container.addEventListener("mouseenter", stopAutoSlide);
  container.addEventListener("mouseleave", startAutoSlide);

  // Handle window resizing events safely without layout breaks
  window.addEventListener("resize", () => {
    currentIndex = 0;
    wrapper.style.transition = "none";
    wrapper.style.transform = "translateX(0px)";
    requestAnimationFrame(() => {
      wrapper.style.transition = "";
    });
    startAutoSlide();
  });

  // Kickstart slider functionality on page load
  startAutoSlide();
});
