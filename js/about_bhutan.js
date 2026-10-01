document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
document.addEventListener('DOMContentLoaded', function () {
    const dynamicTexts = document.querySelectorAll('.dynamic-text');
    const aboutSection = document.querySelector('.about-bhutan');

    const updateFocus = () => {
        const viewportHeight = window.innerHeight;
        const viewportWidth = window.innerWidth;

        dynamicTexts.forEach(el => {
            const rect = el.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const viewportCenter = viewportHeight / 2;

            const distance = Math.abs(viewportCenter - elementCenter);

            // Adjust max scale based on screen width
            let maxScale = 1.2; // default for large screens
            if (viewportWidth <= 480) maxScale = 1.05; // small mobile
            else if (viewportWidth <= 768) maxScale = 1.1; // tablet

            const minScale = 1;

            // Scale formula: closer to center = bigger
            const scale = maxScale - (distance / viewportHeight) * (maxScale - minScale);

            // Opacity effect (optional)
            const opacity = 0.5 + ((scale - minScale) / (maxScale - minScale)) * 0.5;

            el.style.transform = `scale(${scale})`;
            el.style.opacity = opacity;
        });
    };

    const updateGradient = () => {
        const scrollY = window.scrollY;
        const angle = 135 + (scrollY % 360) / 5; 
        aboutSection.style.background = `linear-gradient(${angle}deg, #1c3d5a, #0b2e4d)`;
    };

    window.addEventListener('scroll', () => {
        updateFocus();
        updateGradient();
    });

    window.addEventListener('resize', updateFocus);

    // Initial trigger
    updateFocus();
    updateGradient();
});
