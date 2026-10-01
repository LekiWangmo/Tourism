const cards = document.querySelectorAll('.testimonial-card');
const wrapper = document.querySelector('.testimonial-wrapper');
let currentCardIndex = 0;
let slideInterval;

// Function to move to the next slide
function showNextTestimonial() {
  cards[currentCardIndex].classList.remove('active');
  currentCardIndex = (currentCardIndex + 1) % cards.length;
  cards[currentCardIndex].classList.add('active');
}

// Function to start the 5-second automatic timer
function startSlider() {
  slideInterval = setInterval(showNextTestimonial, 5000);
}

// Function to stop the timer
function stopSlider() {
  clearInterval(slideInterval);
}

// Event listeners to handle mouse hover interactions
wrapper.addEventListener('mouseenter', stopSlider);
wrapper.addEventListener('mouseleave', startSlider);

// Initialize slider on page load
startSlider();
