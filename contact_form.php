<?php

// Database Connection
$servername = "mysql.bhutantarematours.com";
$dbname = "bhutantarematours_db";
$username = "tarema_admin";
$password = getenv('DB_PASSWORD') ?: (is_file(__DIR__ . '/local-secrets.php') ? (require __DIR__ . '/local-secrets.php')['contact_form'] : '');

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$message_sent = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $full_name = mysqli_real_escape_string($conn, $_POST['full-name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);



    // ============================
    // SAVE INTO DATABASE
    // ============================

    $sql = "INSERT INTO contact_form 
    (full_name, email, country, phone, message) 
    VALUES 
    ('$full_name', '$email', '$country', '$phone', '$message')";


    if ($conn->query($sql) === TRUE) {


        // ============================
        // SEND EMAIL TO TAREMA TOURS
        // ============================


        $to = "info@bhutantarematours.com";

        $subject = "New Tour Enquiry - Tarema Tours Website";


        $email_content = "

        New Customer Enquiry Received


        Customer Name:
        $full_name


        Email:
        $email


        Country:
        $country


        Phone:
        $phone


        Message:
        $message


        -----------------------------
        Sent from Tarema Tours Website
        ";



        $headers = "From: Tarema Tours Website <info@tarematours.com>\r\n";

        $headers .= "Reply-To: $email\r\n";

        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";



        mail($to, $subject, $email_content, $headers);



        $message_sent = true;


    }



    $conn->close();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <!-- YOUR EXISTING CSS (UNCHANGED) -->
    <link rel="stylesheet" href="css/slider1.css">
    <link rel="stylesheet" href="css/contact_form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ONLY ADDED POPUP CSS -->
    <style>
        .popup-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup-box {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            text-align: center;
            width: 320px;
            animation: pop 0.3s ease;
        }

        .popup-box h2 {
            color: green;
            margin-bottom: 10px;
        }

        .popup-box button {
            margin-top: 15px;
            padding: 8px 15px;
            border: none;
            background: green;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        @keyframes pop {
            from { transform: scale(0.7); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
    </style>
</head>

<body>

    <?php include 'header.php'; ?>

    <!-- YOUR ENTIRE EXISTING CONTENT (UNCHANGED) -->
    <section class="slider" id="slider">
        <div class="slide active" style="background-image: url('images/experiences/dhar1.jpg');">
            <div class="slide-content">
                <div class="contact-header">   
                    <h2 class="start-planning">Contact Us</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT INFO SECTION (UNCHANGED) -->
    <section class="contact_info">
        <div class="info-container">
            <div class="info-box">
                <div class="icon-circle"><i class="bi bi-geo-alt"></i></div>
                <h3>Visit Us</h3>
                <p>Norzin Lam, Thimphu, Bhutan</p>
            </div>

            <div class="info-box">
                <div class="icon-circle"><i class="bi bi-telephone"></i></div>
                <h3>Call Us</h3>
                <p>+975 77734683</p>
            </div>

            <div class="info-box">
                <div class="icon-circle"><i class="bi bi-envelope"></i></div>
                <h3>Email Us</h3>
                <p>info@bhutantarematours.com</p>
            </div>

            <div class="info-box">
                <div class="icon-circle"><i class="bi bi-clock"></i></div>
                <h3>Office Hours</h3>
                <p>Mon - Fri: 9:00 AM - 5:00 PM</p>
            </div>
        </div>
    </section>

    <!-- FORM SECTION (UNCHANGED) -->
    <section class="contact-section">
        <div class="contact-wrapper">

            <div class="contact-form-section">
                <div class="form-container">
                    <form action="contact_form.php" method="POST">

                        <div class="form-row">
                            <div class="input-group">
                                <label>Full Name</label>
                                <input type="text" name="full-name" required>
                            </div>

                            <div class="input-group">
                                <label>Email</label>
                                <input type="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="input-group">
                                <label>Country</label>
                                <input type="text" name="country" required>
                            </div>

                            <div class="input-group">
                                <label>Phone</label>
                                <input type="text" name="phone">
                            </div>
                        </div>

                        <label>Message</label>
                        <textarea name="message" required></textarea>

                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="map-container">
                <iframe src="https://www.google.com/maps?q=Bhutan&output=embed"></iframe>
            </div>

        </div>
    </section>

    <!-- ✅ ONLY ADDED POPUP -->
    <?php if ($message_sent): ?>
    <div class="popup-modal" id="popup">
        <div class="popup-box">
            <h2>Success!</h2>
            <p>Your message has been sent successfully.</p>
            <button onclick="closePopup()">OK</button>
        </div>
    </div>
    <?php endif; ?>

    <script>
        function closePopup() {
            document.getElementById("popup").style.display = "none";
            window.location.href = "contact_form.php";
        }
    </script>

    <!-- YOUR FOOTER (UNCHANGED) -->
    <?php include 'footer.php'; ?>

</body>
</html>