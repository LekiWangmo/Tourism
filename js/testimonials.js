// Select elements
const track = document.querySelector('.testimonial-track');
const slides = Array.from(document.querySelectorAll('.testimonial-card'));
const dotsContainer = document.querySelector('.testimonial-dots');
const visibleCards = 4; // Display 5 cards at a time
const totalCards = slides.length;

// Clone the first 5 cards and append them at the end for smooth looping
const clonedSlides = slides.slice(0, visibleCards).map(slide => slide.cloneNode(true));
clonedSlides.forEach(slide => track.appendChild(slide));  // Append cloned slides

let currentIndex = 0;  // Current index for the sliding animation

// Create navigation dots dynamically
dotsContainer.innerHTML = '';
slides.forEach((_, idx) => {
  const dot = document.createElement('span');
  if (idx === 0) dot.classList.add('active');
  dot.addEventListener('click', () => {
    currentIndex = idx;
    updateSlider();
  });
  dotsContainer.appendChild(dot);
});

const dots = Array.from(dotsContainer.children);

// Function to update the slider
function updateSlider() {
  // Circular index (looping behavior)
  if (currentIndex >= totalCards) {
    currentIndex = 0;
    track.style.transition = "none";  // Disable transition for instant reset
    track.style.transform = `translateX(0)`; // Reset to first card
    setTimeout(() => {
      track.style.transition = "transform 0.5s ease-in-out";  // Re-enable transition after reset
    }, 50);
  } else if (currentIndex < 0) {
    currentIndex = totalCards - 1;
  }

  const cardWidth = slides[0].offsetWidth; // Card width
  const offset = currentIndex * cardWidth;
  track.style.transform = `translateX(-${offset}px)`; // Move track
  
  // Highlight the active/focused card
  slides.forEach((slide, idx) => slide.classList.remove('active'));
  const focusIndex = (currentIndex + Math.floor(visibleCards / 2)) % totalCards;
  slides[focusIndex].classList.add('active');

  // Update navigation dots
  dots.forEach(dot => dot.classList.remove('active'));
  dots[focusIndex].classList.add('active');
}

// Auto-slide every 3 seconds (looping)
setInterval(() => {
  currentIndex++;
  updateSlider();
}, 3000);

// Initialize the slider
updateSlider();