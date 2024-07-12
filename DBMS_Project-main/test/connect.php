<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $passport = $_POST['passport']; // Changed variable name from $password to $passport
    $number = $_POST['number'];
    $nationality = $_POST['nationality'];
    $age = $_POST['age'];

    // Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, passport, number, nationality, age) values(?, ?, ?, ?, ?, ?, ?, ?)"); // Changed "password" to "passport"
        $stmt->bind_param("sssssssi", $firstName, $lastName, $gender, $email, $passport, $number, $nationality, $age); // Changed "password" to "passport"
        $execval = $stmt->execute();
        if ($execval) {
            echo "Registration successful...";
            // Close prepared statement
            $stmt->close();
            // Close database connection
            $conn->close();
            // Add a button to redirect to a different page
            echo '<form action="login.html" method="post">';
            echo '<input type="submit" value="Log in and Book Flight Tickets">';
            echo '</form>';
            echo '<form action="redirect_page2.php" method="post">';
            echo '<input type="submit" value=" Browse all flights">';
            echo '</form>';
        } else {
            echo "Error: " . $stmt->error;
        }
    }
?>
