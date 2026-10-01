<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Testimonial Slider</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&family=Great+Vibes&display=swap" rel="stylesheet">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #dee5df;
  font-family: 'Poppins', sans-serif;
}

/* ================= CARD WRAPPER ================= */
.testimonial-wrapper {
  position: relative;
  width: 1000px;
  max-width: 90%;
}

/* ================= CARD ================= */
.testimonial-card {
  display: none;
  flex-direction: row;
  min-height: 500px; 
  background: #e9ddd6;
  border-radius: 16px;
  padding: 40px;
  position: relative;
  overflow: visible;
  animation: fadeSlide 0.8s ease;
}

.testimonial-card.active {
  display: flex;
}

@keyframes fadeSlide {
  from { opacity: 0; transform: translateY(20px);}
  to { opacity: 1; transform: translateY(0);}
}

/* ================= LEFT IMAGE ================= */
.left {
  width: 50%;
  position: relative;
  z-index: 2;
}

.image-wrap {
  position: relative;
  height: 100%;
}

.image-wrap img {
  width: 110%;
  height: 120%;
  object-fit: cover;
  position: absolute;
  top: -70px;   
  left: -80px;  
  border-radius: 0 30px 0 30px; /* top-left, top-right, bottom-right, bottom-left */
  box-shadow: 0 25px 50px rgba(0,0,0,0.25);
  z-index: 10;
}

/* Decorative shape */
.image-wrap::before {
  content: "";
  position: absolute;
  top: -60px;
  left: -60px;
  width: 220px;
  height: 220px;
  background: rgba(207,192,173,0.5);
  border-radius: 0 0 100% 0;
  z-index: 1;
}

/* ================= RIGHT CONTENT ================= */
.right {
  width: 50%;
  padding-left: 0; /* start from edge to overlap image */
  display: flex;
  flex-direction: column;
  justify-content: center;
  z-index: 5;
  position: relative;
}

.title {
  font-family: 'Playfair Display', serif;
  font-size: 3rem;
  color: #6b4c3b;
  margin-bottom: 20px;
}

.stars {
  display: inline-flex;
  gap: 6px;
  background: #fff;
  padding: 12px 18px;
  border-radius: 30px;
  margin-bottom: 25px;
  width: fit-content;
}

.stars span {
  color: #f6b800;
  font-size: 1.3rem;
}

/* ================= MESSAGE BOX ================= */
.message-box {
  position: relative;
  background: #f5f3f2;
  border-radius: 15px;
  padding: 30px;
  color: #7d6a60;
  line-height: 1.8;
  margin-bottom: 25px;
  max-width: 580px;
  margin-left: -50px;
  z-index: 15;
  overflow: visible;
}

/* Smooth callout using rotated square */
.message-box::before {
  content: "";
  position: absolute;
  width: 20px;
  height: 20px;
  background: #f5f3f2;
  top: 50%;
  left: -10px;
  transform: translateY(-50%) rotate(45deg); /* rotate square to make triangle */
  box-shadow: -2px 2px 2px rgba(0,0,0,0.05); /* subtle shadow for realism */
  z-index: 16;
  border-radius: 2px; /* soften the corner a bit */
}
.name {
  font-family: 'Great Vibes', cursive;
  font-size: 3rem;
  color: #2d2d2d;
}

.profession {
  color: #5f524b;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 768px) {
  .testimonial-card {
    flex-direction: column;
    padding: 25px;
    min-height: auto;
  }

  .left, .right {
    width: 100%;
  }

  .image-wrap img {
    position: relative;
    width: 100%;
    height: 320px;
    top: 0;
    left: 0;
    border-radius: 0 30px 0 30px; /* maintain rounded corners on mobile */
  }

  .right {
    padding-left: 0;
    text-align: center;
  }

  .stars {
    margin: 0 auto 20px;
  }

  .message-box {
    margin-left: 0; /* remove overlap on mobile */
  }

  .message-box::before {
    left: 50%;
    top: -16px;
    transform: translateX(-50%);
    border-bottom: 18px solid #f5f3f2;
    border-right: 14px solid transparent;
    border-left: 14px solid transparent;
  }
}

</style>
</head>

<body>
<div class="testimonial-wrapper">

  <!-- CARD 1 -->
  <div class="testimonial-card active">
    <div class="left">
      <div class="image-wrap">
        <img src="images/charo.jpg" alt="Client">
      </div>
    </div>

    <div class="right">
      <h2 class="title">Client Testimonials</h2>

      <div class="stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>

      <div class="message-box">
        "Excellent service and smooth travel experience. Highly recommended!"Excellent service and smooth travel experience. Highly recommended!"Excellent service and smooth travel experience. Highly recommended!"
      </div>

      <div class="name">Pema Losel Wangdi</div>
      <div class="profession">Makeup Artist</div>
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="testimonial-card">
    <div class="left">
      <div class="image-wrap">
        <img src="images/cuturr.jpg" alt="Client">
      </div>
    </div>

    <div class="right">
      <h2 class="title">Client<br>Testimonials</h2>

      <div class="stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>

      <div class="message-box">
        "Amazing service from start to finish. Truly professional team!"
      </div>

      <div class="name">John Wangdi</div>
      <div class="profession">Traveler</div>
    </div>
  </div>

</div>

<script>
let index = 0;
const cards = document.querySelectorAll(".testimonial-card");

setInterval(() => {
  cards[index].classList.remove("active");
  index = (index + 1) % cards.length;
  cards[index].classList.add("active");
}, 4000);
</script>

</body>
</html>