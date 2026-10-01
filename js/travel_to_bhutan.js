// ----------------- FLY-IN EFFECT ON SCROLL -----------------
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section');

    let lastScrollTop = 0;

    function flyInSections() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const windowBottom = scrollTop + window.innerHeight;

            if (windowBottom > sectionTop + sectionHeight * 0.2 && scrollTop < sectionTop + sectionHeight) {
                // Determine scroll direction
                if (scrollTop > lastScrollTop) {
                    // Scrolling down: fly from bottom
                    section.style.transform = 'translateY(0)';
                    section.style.opacity = '1';
                } else {
                    // Scrolling up: fly from top
                    section.style.transform = 'translateY(0)';
                    section.style.opacity = '1';
                }
            } else {
                // Reset sections if out of viewport
                if (scrollTop > lastScrollTop) {
                    // Scrolling down: hide below
                    section.style.transform = 'translateY(50px)';
                    section.style.opacity = '0';
                } else {
                    // Scrolling up: hide above
                    section.style.transform = 'translateY(-50px)';
                    section.style.opacity = '0';
                }
            }
        });

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scroll
    }

    window.addEventListener('scroll', flyInSections);
    window.addEventListener('load', flyInSections);
});