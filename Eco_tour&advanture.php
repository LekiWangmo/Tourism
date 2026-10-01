<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/slider1.css">
<link rel="stylesheet" href="css/culture.css">

<?php 
    include "header.php";
?>

<section class="slider" id="slider">
    <div class="slide active" style="background-image: url('images/kurta.jpg');">
        <div class="slide-content">
            <h1>Eco_Tour & Advanture</h1>
            <p>Experience authentic Bhutan with Tarema Tours</p>
        </div>
    </div>
</section>

<!-- ================= EXPERIENCE BHUTAN ================= -->

<section class="premium-layout">
    <!-- Experience Header centered at the top of the section -->
    <div class="experience-header">
        <span class="get-in-touch">GET IN TOUCH</span>
        <h2 class="experience-planning">Plan Your Next Adventure</h2>
        <p class="experience-description">Discover our selection of tailor-made adventure trip packages to Bhutan, designed to match your individual interests and travel style. With our experience, expertise, and extensive local resources, we are well equipped to deliver truly personalized services, ensuring an exceptional and memorable journey for every guest visiting Bhutan.</p>
    </div>

    <div class="content-section">
        <div class="content-cards">
            <div class="content-card">
                <img src="images/member1.png" alt="Card 1">
                <h3>BHUTAN BIRD WATCHING</h3>
                <p>13 Days/12 Nights</p>
                <button><a href="Bhutanbirdwatching.php">Details</a></button>
            </div>
            <div class="content-card">
                <img src="images/member2.jpg" alt="Card 2">
                <h3>BHUTAN RIVER RAFTING</h3>
                <p>8 Days/7 Nights</p>
                <button><a href="Bhutanriverrafting.php">Details</a></button>
            </div>
            <div class="content-card">
                <img src="images/member3.jpeg" alt="Card 3">
                <h3>MOTOR BIKE ADVENTURE TRIP</h3>
                <p>11 Days/10 Nights</p>
                <button><a href="Motorbikeadventuretrip.php">Details</a></button>
            </div>
            <div class="content-card">
                <img src="images/member4.jpg" alt="Card 4">
                <h3>BHUTAN CYCLING TRIP</h3>
                <p>7 Days/6 Nights</p>
                <button><a href="Bhutancyclingtrip.php">Details</a></button>
            </div>
        </div>
    </div>
</section>

<?php 
    include "footer.php";
?>

<script src="js/header.js"></script>
<script src="js/slider.js"></script>