<?php
// Start the session
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    // Redirect to login page if not logged in
    header("Location: admin_login_page.php");
    exit();
}

// Database Connection
$servername = "mysql.bhutantarematours.com"; // Your database server
$dbname = "bhutantarematours_db"; // Your database username
$username= "tarema_admin"; // The database name
$password = getenv('DB_PASSWORD') ?: (is_file(__DIR__ . '/local-secrets.php') ? (require __DIR__ . '/local-secrets.php')['message_view'] : ''); // Your database password (if any)


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize the SQL query
$sql = "SELECT id, full_name, email, country, phone, message, created_at FROM contact_form WHERE 1";

// Filter by name if provided
if (isset($_GET['name']) && $_GET['name'] != '') {
    $name = $conn->real_escape_string($_GET['name']);
    $sql .= " AND full_name LIKE '%$name%'";
}

// Filter by country if selected
if (isset($_GET['country']) && $_GET['country'] != '') {
    $country = $conn->real_escape_string($_GET['country']);
    $sql .= " AND country LIKE '%$country%'";
}

// Filter by email if provided
if (isset($_GET['email']) && $_GET['email'] != '') {
    $email = $conn->real_escape_string($_GET['email']);
    $sql .= " AND email LIKE '%$email%'";
}

// Filter by phone if provided
if (isset($_GET['phone']) && $_GET['phone'] != '') {
    $phone = $conn->real_escape_string($_GET['phone']);
    $sql .= " AND phone LIKE '%$phone%'";
}

// Filter by created date if provided
if (isset($_GET['created_date']) && $_GET['created_date'] != '') {
    $created_date = $conn->real_escape_string($_GET['created_date']);
    $sql .= " AND DATE(created_at) = '$created_date'";
}

// Pagination: Set records per page
$records_per_page = 10; // Adjust as needed
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($page - 1) * $records_per_page;
$sql .= " LIMIT $start_from, $records_per_page";

// Query the database with the filters
$result = $conn->query($sql);

// Get total records for pagination
$total_sql = "SELECT COUNT(*) FROM contact_form";
$total_result = $conn->query($total_sql);
$total_records = $total_result->fetch_row()[0];
$total_pages = ceil($total_records / $records_per_page);

// Include the header
include "header.php";
?>

<link rel="stylesheet" href="css/message_view.css">
<link rel="stylesheet" href="css/slider1.css">

<!-- Slider Section -->
<section class="slider" id="slider">
    <div class="slide active" style="background-image: url('images/dragon.png');">
        <div class="slide-content">
            <h1>Admin Panel</h1>
            <p>Records in Database</p>
            <!-- Logout Button -->
            <a href="admin_login_page.php" class="logout-btn">Logout</a>
        </div>
    </div>
</section>

<!-- Main content section for message view -->
<section class="message-view-section">
    <div class="container">
        <h1 class="page-title">Contact Form Messages</h1>

        <!-- Filter Form -->
        <form method="get" action="message_view.php" class="filter-form">
            <div class="filter-inputs">
                <input type="text" id="name" name="name" value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>" placeholder="Enter Name">
                <input type="text" id="country" name="country" value="<?php echo isset($_GET['country']) ? $_GET['country'] : ''; ?>" placeholder="Enter Country">
                <input type="email" id="email" name="email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>" placeholder="Enter Email">
                <input type="text" id="phone" name="phone" value="<?php echo isset($_GET['phone']) ? $_GET['phone'] : ''; ?>" placeholder="Enter Phone">
                <input type="date" id="created_date" name="created_date" value="<?php echo isset($_GET['created_date']) ? $_GET['created_date'] : ''; ?>" class="date-picker">
                <button type="submit" class="filter-btn">Apply Filters</button>
            </div>
        </form>

        <?php if ($result->num_rows > 0): ?>
            <table class="message-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Created At</th>
                        <th>Action</th> <!-- Added column for Reply Button -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["full_name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["country"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["message"] . "</td>";
                        echo "<td>" . $row["created_at"] . "</td>";
                        echo "<td><button class='reply-btn' onclick='openReplyModal(\"" . $row["email"] . "\")'>Reply</button></td>"; // Reply button
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination">
                <?php
                // Display pagination links
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo "<a href='message_view.php?page=" . $i . "' class='pagination-link'>" . $i . "</a>";
                }
                ?>
            </div>

        <?php else: ?>
            <p class="no-messages">No messages found.</p>
        <?php endif; ?>

    </div>
</section>

<!-- Reply Modal -->
<div id="replyModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeReplyModal()">×</span>
        <h2>Reply to Message</h2>
        <form action="send_reply.php" method="post">
            <label for="replyEmail">To:</label>
            <input type="email" id="replyEmail" name="replyEmail" readonly>
            <br><br>
            <label for="replyMessage">Your Reply:</label>
            <textarea id="replyMessage" name="replyMessage" rows="6" required></textarea>
            <br><br>
            <button type="submit">Send Reply</button>
        </form>
    </div>
</div>

<?php
// Close the database connection
$conn->close();

// Include the footer
include "footer.php";
?>

<script>
// Open the Reply Modal and set the email
function openReplyModal(email) {
    document.getElementById('replyEmail').value = email;
    document.getElementById('replyModal').style.display = 'block';
}

// Close the Reply Modal
function closeReplyModal() {
    document.getElementById('replyModal').style.display = 'none';
}

// Close the modal if the user clicks outside the modal content
window.onclick = function(event) {
    if (event.target == document.getElementById('replyModal')) {
        closeReplyModal();
    }
}
</script>