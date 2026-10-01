<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Team Members | Tarema Tours
        </title>
        <link rel="stylesheet" href="css/our_team.css">
        <link rel="stylesheet" href="css/team_member1.css">
        <link rel="stylesheet" href="css/slider1.css">
   </head>
<body>
<?php
	include 'header.php';
?>

<!-- Slider Section -->
<section class="slider" id="slider">
    <div class="slide active" style="background-image: url('images/about_us/IMG_64731.JPG');">
        <div class="slide-content">
            <h1>Our Team</h1>
        </div>
    </div>
</section>

<!-- Main Team Member Section -->
<section class="team-section">
    <div class="container-fixed">
        <div class="team-member">
            <div class="team-text">
                <h1>Kinley Tenzin</h1>
                <h2>Tour Leader</h2>
                <p>
                    Kinley, originally from the eastern district of Pemagatshel, is a dedicated member of our team and a true mountain enthusiast. He has a deep passion for trekking and enjoys sharing his knowledge and experiences with travelers. With strong skills and experience in leading treks, Kinley confidently guides expeditions into Bhutan’s high-altitude mountains. He is very familiar with the country’s mountain passes and remote landscapes, allowing him to safely lead adventurers through some of Bhutan’s most breathtaking trails. His love for exploration and commitment to his work make him a valuable member of our company and a trusted guide for travelers seeking authentic mountain experiences.
                </p>
				<a href="index.php#why-choose" class="read-more-btn">Back</a>
            </div>
            <div class="team-image">
                <img src="images/team/member3.png" alt="Team Member 2">
            </div>
			
        </div>
		
    </div>
</section>

<!-- Sub Team Section -->
<section class="team-section sub-team-section">
    <div class="container-fixed">
        <div class="team-container">
            <div class="team-container">
            <!-- Member 1 -->
            <div class="team-card">
                <img src="images/team/member5.png" alt="Phuntsho Wangmo">
                <div class="team-info">
                    <h3 class="member-name">Phuntsho Wangmo</h3>
                    <p class="member-role">Co-Founder & CEO</p>
                    <a href="team_member1.php" class="read-more-btn">Read More</a>
                </div>
            </div>
            <!-- Member 2 -->
            <div class="team-card">
                <img src="images/team/member2.png" alt="Yeshi Wangmo">
                <div class="team-info">
                    <h3 class="member-name">Yeshi Wangmo</h3>
                    <p class="member-role">Media and Marketing Officer</p>
                    <a href="team_member2.php" class="read-more-btn">Read More</a>
                </div>
            </div>

            <!-- Member 4 -->
            <div class="team-card">
                <img src="images/team/member4.png" alt="Sonam Dorji">
                <div class="team-info">
                    <h3 class="member-name">Sonam Dorji</h3>
                    <p class="member-role">Tour Leader</p>
                    <a href="team_member4.php" class="read-more-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
	include 'footer.php';
?>
</body>
</html>