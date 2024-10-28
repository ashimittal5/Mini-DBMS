<?php
include 'database.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to retrieve the user's hashed password
    $sql = "SELECT password FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the provided password with the hashed password from the database
        if (password_verify($password, $hashed_password)) {
            echo "<p>Login successful! Welcome, " . htmlspecialchars($username) . ".</p>";
        } else {
            echo "<p>Invalid password. Please try again.</p>";
        }
    } else {
        echo "<p>User not found. Please check your username.</p>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "<p>Invalid request method.</p>";
}
?>
