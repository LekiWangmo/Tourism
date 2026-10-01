<link rel="stylesheet" href="css/header.css">
<?php if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') !== 'index.php'): ?>
<link rel="stylesheet" href="css/paragraphs.css">
<?php endif; ?>

<header class="main-header" id="main-header">

    <div class="logo-wrapper">
        <a href="index.php" title="Tarema Tours Bhutan Home">
            <img src="images/logowhite.png" id="logo" alt="Tarema Tours Bhutan Tour Operator Logo">
        </a>
    </div>

    <div class="header-right">

        <a href="view_all_tours.php" class="btn-outline">
            <span>Find Bhutan Tour Packages</span>
        </a>

        <a href="contact_form.php" class="btn-outline">
            <span>Contact Bhutan Travel Experts</span>
        </a>

        <button class="hamburger" id="hamburger" aria-label="Open navigation menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>

    <!-- NAVIGATION MENU -->
    <nav id="nav-menu" aria-label="Main Navigation">

        <!-- CLOSE BUTTON (FIXED LOGIC) -->
        <div class="menu-close" id="menu-close" aria-label="Close menu">&times;</div>
        <a href="index.php">Home</a>
        <a href="about_bhutan.php">About Bhutan</a>
        <a href="about_us.php">About Us</a>
        <a href="view_all_tours.php">Tour Packages</a>   
        <a href="festival_calendar.php">Festival Calendar</a>
        <a href="hikking_trekking.php">Trekking & Hiking</a>
        <a href="faq.php">FAQ</a>
        <a href="news_updates.php">Latest Updates</a>
        <a href="contact_form.php">Contact</a>
        <a href="admin_login_page.php">Admin</a>
    </nav>

    <div id="menu-overlay"></div>

</header>

<script src="js/header.js"></script>
