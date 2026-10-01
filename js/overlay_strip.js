document.addEventListener("DOMContentLoaded", function () {

    const overlayItems = document.querySelectorAll(".overlay-item");

    // Animate overlay cards on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add("show");
                }, index * 150);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    overlayItems.forEach(item => observer.observe(item));

});
