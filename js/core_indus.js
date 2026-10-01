// Get all orbit items
const items = document.querySelectorAll('.orbit-item');

// Define the radius (half the width of the orbit container)
const radius = document.querySelector('.orbit-container').offsetWidth / 2;

// Calculate positions for each item
items.forEach((item, index) => {
  // Calculate angle in radians (72° for each item)
  const angle = (72 * index) * (Math.PI / 180); // Convert degrees to radians

  // Calculate x and y positions using cosine and sine functions
  const x = radius + radius * Math.cos(angle);  // x = center + radius * cos(angle)
  const y = radius + radius * Math.sin(angle);  // y = center + radius * sin(angle)

  // Position each item using the calculated x and y
  item.style.left = `${x - item.offsetWidth / 2}px`;  // Centering the item horizontally
  item.style.top = `${y - item.offsetHeight / 2}px`;  // Centering the item vertically

  // Ensure each orbit item stays upright by counter-rotating it (rotate to the top of the page)
  item.style.transform = `rotate(${-(72 * index)}deg)`; // Rotate each item to stay upright
});

// Rotate the container and items to make them rotate while maintaining upright position
function rotateContainer() {
  const container = document.querySelector('.orbit-container');
  const orbitItems = document.querySelectorAll('.orbit-item');

  // Animate the container's rotation
  container.style.animation = 'rotateCircle 15s linear infinite'; // Rotate the container

  // Ensure the items maintain their upright position and rotate along with the container
  orbitItems.forEach((item, index) => {
    // Counter-rotate each item to keep its content facing the top of the page
    item.style.animation = `rotateItems 15s linear infinite`; // Rotate each item in place
  });
}

// Call the rotation function
rotateContainer();

// Show popup when clicking on an orbit item
document.querySelectorAll('.orbit-item').forEach(item => {
  item.addEventListener('click', () => {
    const text = item.getAttribute('data-text');
    document.getElementById('popup-text').textContent = text;
    document.getElementById('popup').style.display = "flex";
  });
});

// Close the popup
function closePopup() {
  document.getElementById('popup').style.display = "none";
}

// Click outside popup to close
window.addEventListener('click', function(e) {
  if (e.target.id === 'popup') {
    closePopup();
  }
});