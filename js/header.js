
/* =========================
ELEMENTS
========================= */
const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-menu");
const overlay = document.getElementById("menu-overlay");
const closeBtn = document.getElementById("menu-close");
const header = document.getElementById("main-header");
const logo = document.getElementById("logo");

/* =========================
SAFETY CHECK (PREVENT ERRORS)
========================= */
if (hamburger && navMenu && overlay && closeBtn && header && logo) {

    /* =========================
    MENU OPEN
    ========================= */
    function openMenu() {
        navMenu.classList.add("active");
        overlay.classList.add("active");
        hamburger.classList.add("active");

        hamburger.setAttribute("aria-expanded", "true");

        // lock scroll
        document.documentElement.style.overflow = "hidden";
        document.body.style.overflow = "hidden";
    }

    /* =========================
    MENU CLOSE
    ========================= */
    function closeMenu() {
        navMenu.classList.remove("active");
        overlay.classList.remove("active");
        hamburger.classList.remove("active");

        hamburger.setAttribute("aria-expanded", "false");

        // restore scroll
        document.documentElement.style.overflow = "";
        document.body.style.overflow = "";
    }

    /* =========================
    EVENTS
    ========================= */
    hamburger.addEventListener("click", openMenu);
    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    // close menu when clicking links
    navMenu.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", closeMenu);
    });

    // ESC key closes menu
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            closeMenu();
        }
    });

    /* =========================
    HEADER + LOGO SCROLL LOGIC
    ========================= */

    function updateHeader() {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");

            // switch logo to green
            // logo.src = "images/logo_green.png";
                        logo.src = "images/logo_green.png";


        } else {
            header.classList.remove("scrolled");

            // switch back to white logo
            logo.src = "images/logowhite.png";
        }
    }

    /* IMPORTANT: run once on load */
    updateHeader();

    /* on scroll */
    window.addEventListener("scroll", updateHeader);

    /* =========================
    MOBILE RESIZE SAFETY
    ========================= */
    window.addEventListener("resize", function () {
        if (window.innerWidth > 768) {
            closeMenu();
        }
    });

}