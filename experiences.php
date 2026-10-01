<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/slider1.css">
<link rel="stylesheet" href="css/experiences.css">

<?php 
    include "header.php";
?>

<section class="slider" id="slider">
    <div class="slide active" style="background-image: url('images/sakten.jpg');">
        <div class="slide-content">
            <h1>Your Dream Destination</h1>
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
        <p class="experience-description">There’s something for everyone—whether it’s trekking, cultural experiences, festivals, adventure, nature walks, hiking, or water activities. Browse our trips and start planning your next unforgettable adventure.</p>
    </div>

    <!-- Image Container placed below the experience header -->
    <div class="image-container">
        <!-- Small Image 1 placed at the far left behind Image2 -->
        <div class="image-wrapper image1">
            <img src="images/find_trip_tours/cultur.jpg" alt="Culture Tour">
            <a href="culture.php"><div class="image-text">Culture Tour</div></a>
        </div>
        
        <!-- Medium Image 2 placed to the left behind Image3 -->
        <div class="image-wrapper image2">
            <img src="images/find_trip_tours/festival2.jpg" alt="Festival Tour">
            <a href="tour2.php"><div class="image-text">Festival Tour</div></a>
        </div>

        <!-- Largest Image3 placed at the forefront in the center -->
        <div class="image-wrapper image3">
            <img src="images/find_trip_tours/trek-1-.jpg" alt="Trekking & Adventures">
            <a href="tour3.php"><div class="image-text">Trekking & Adventure</div></a>
        </div>

        <!-- Medium Image 4 placed to the right behind Image3 -->
        <div class="image-wrapper image4">
            <img src="images/find_trip_tours/ba.jpg" alt="Eco_Tour & Advanture">
            <a href="Eco_tour&advanture.php"><div class="image-text">Eco Tour & Adventure</div></a>
        </div>

        <!-- Small Image 5 placed at the far right behind Image4 -->
        <div class="image-wrapper image5">
            <img src="images/find_trip_tours/hike-2.jpg" alt="HIKKING & WALKKING">
            <a href="hikkking_walkking.php"><div class="image-text">Hiking & Walking</div></a>
        </div>
    </div>
</section>

<?php 
    include "footer.php";
?>

<script src="js/header.js"></script>
<script src="js/slider.js"></script>