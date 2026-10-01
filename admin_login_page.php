<?php
// Start the session
session_start();

// Database Connection
$servername = "mysql.bhutantarematours.com"; // Your database server
$dbname = "bhutantarematours_db"; // Your database username
$username= "tarema_admin"; // The database name
$password = getenv('DB_PASSWORD') ?: (is_file(__DIR__ . '/local-secrets.php') ? (require __DIR__ . '/local-secrets.php')['admin_login_page'] : ''); // Your database password (if any)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $admin_username = $_POST['username'];
    $admin_password = $_POST['password'];

    // Use a prepared statement to avoid SQL injection
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->bind_param("s", $admin_username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Admin user found, fetch the data
        $row = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($admin_password, $row['password'])) {
            // Password is correct, start the session and regenerate session ID for security
            session_regenerate_id(true);
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $admin_username;
            header("Location: message_view.php"); // Redirect to the admin dashboard
            exit();
        } else {
            // Invalid password
            $message = "Invalid username or password!";
        }
    } else {
        // Username not found
        $message = "Invalid username or password!";
    }
    $stmt->close();
}

$conn->close();
?>
<link rel="stylesheet" href="css/admin_login.css"> 
<!-- Include Header -->
<?php include 'header.php'; ?>

<!-- Admin Login Form Section -->
<section class="admin-login-section">
    <div class="login-container">
        <h2>Admin Login</h2>
        
        <!-- Display Error Message if any -->
        <?php if ($message != ""): ?>
            <p class="error-message"><?php echo $message; ?></p>
        <?php endif; ?>

        <form action="admin_login_page.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</section>

<!-- Include Footer -->
<?php include 'footer.php'; ?>