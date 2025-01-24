<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'sale_login');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Prepare a statement to fetch the matching record
        $stmt = $conn->prepare("SELECT * FROM login_sales WHERE Username = ? AND Pass_word = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the username and password exist in the database
        if ($result->num_rows > 0) {
            // Login successful
            header("Location: sales.php");
            exit();
        } else {
            // Login failed
            echo "<script>alert('Invalid username or password! Please try again.');</script>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
