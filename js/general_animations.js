<script id="cube-js">
document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("#fullpage-container .section");
    let currentIndex = 0;
    let isAnimating = false;

    // Initialize first section
    sections[currentIndex].classList.add("active");

    function goToSection(index, direction) {
        if (isAnimating || index === currentIndex || index < 0 || index >= sections.length) return;
        isAnimating = true;

        const current = sections[currentIndex];
        const next = sections[index];

        // Remove classes
        sections.forEach(s => s.classList.remove("next", "prev"));

        // Set cube direction
        if (direction === "down") {
            next.classList.add("next");
            setTimeout(() => {
                current.classList.remove("active");
                next.classList.remove("next");
                next.classList.add("active");
                currentIndex = index;
                isAnimating = false;
            }, 50); // small timeout to trigger CSS transition
        } else if (direction === "up") {
            next.classList.add("prev");
            setTimeout(() => {
                current.classList.remove("active");
                next.classList.remove("prev");
                next.classList.add("active");
                currentIndex = index;
                isAnimating = false;
            }, 50);
        }
    }

    // Listen for wheel scroll
    window.addEventListener("wheel", function(e) {
        if (e.deltaY > 0) {
            goToSection(currentIndex + 1, "down");
        } else if (e.deltaY < 0) {
            goToSection(currentIndex - 1, "up");
        }
    });

    // Optional: Touch support for mobile swipe
    let startY = 0;
    window.addEventListener("touchstart", e => startY = e.touches[0].clientY);
    window.addEventListener("touchend", e => {
        const endY = e.changedTouches[0].clientY;
        if (endY < startY - 50) goToSection(currentIndex + 1, "down");
        if (endY > startY + 50) goToSection(currentIndex - 1, "up");
    });
});
</script>