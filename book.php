
<!-- Booking Section -->
<section id="book" class="booking-section">
    <div class="booking-container">
        <h2>Book Your Journey</h2>

        <!-- Success Message -->
        <?php if(isset($_GET['success'])): ?>
            <p class="success-msg">✅ Thank you! Your booking request has been submitted successfully.</p>
        <?php endif; ?>

        <form method="POST" action="book.php" class="booking-form">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="date" name="tour_date" required>
            <input type="text" name="duration" placeholder="Duration" required>
            <input type="text" name="nationality" placeholder="Nationality" required>
            <input type="text" name="phone" placeholder="Contact Number" required>

            <button type="submit">Submit Booking</button>
        </form>
    </div>
</section>