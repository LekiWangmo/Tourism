<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?><?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader if you're using Composer
require 'vendor/autoload.php';

// Get form data
$to = $_POST['replyEmail']; // Recipient's email
$subject = "Reply to Your Message from Tarema Tours";
$message = $_POST['replyMessage']; // The message you want to send

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Set the SMTP server to use (e.g., Gmail)
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'your_email@gmail.com';              // SMTP username (your email)
    $mail->Password = 'your_email_password';                // SMTP password (your email password or app-specific password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption
    $mail->Port = 587;                                     // TCP port to connect to (587 for Gmail)

    // Recipients
    $mail->setFrom('your_email@gmail.com', 'Tarema Tours');
    $mail->addAddress($to);                                // Add recipient's email

    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;                             // The email body content

    // Send the email
    if ($mail->send()) {
        echo "Reply sent successfully!";
    } else {
        echo "Error in sending reply!";
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>