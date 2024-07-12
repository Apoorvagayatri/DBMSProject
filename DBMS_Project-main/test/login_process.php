<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve login credentials from the form
    $passport = $_POST['passport'];
    $password = $_POST['password'];
    $_SESSION["passport"]=$passport;
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Query to retrieve user based on passport number
    $stmt = $conn->prepare("SELECT * FROM registration WHERE passport = ?");
    if ($stmt === false) {
        error_log("Error in preparing statement: " . $conn->error);
        die("An error occurred. Please try again later.");
    }

    $stmt->bind_param("s", $passport);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, fetch user data
        $row = $result->fetch_assoc();
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        
        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session variable
            $_SESSION['logged_in'] = true;
            echo "Login successful!";

            // Display buttons for finding flights and browsing all flights
            echo '<form action="redirect_page.php" method="post">';
            echo '<input type="submit" value="Find Flight Tickets">';
            echo '</form>';
            echo '<form action="redirect_page2.php" method="post">';
            echo '<input type="submit" value="Browse all flights">';
            echo '</form>';
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "Passport number not found.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>