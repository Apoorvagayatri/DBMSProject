<?php
// Start the session to access session variables
session_start();

// Check if passport number is stored in the session
if (isset($_SESSION["passport"])) {
    // Retrieve passport number from the session
    $passport_number = $_SESSION["passport"];

    // Check if flight number is passed as a URL parameter
    if (isset($_GET['flightID'])) {
        // Retrieve flight number from URL parameter
        $flight_ID = $_GET['flightID'];

        // Insert into booking table
        // Assuming you have a database connection established
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement for main insertion
        $sql_insert = "INSERT INTO booking (flight_ID, passenger_passport) VALUES (?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);

        // Bind parameters for main insertion
        $stmt_insert->bind_param("ss", $flight_ID, $passport_number);

        // Execute main insertion statement
        if ($stmt_insert->execute()) {
            // Close main insertion statement and connection
            $stmt_insert->close();
            $conn->close();

            // Redirect to booking_details.php with flight ID
            header("Location: booking_details.php?flightID=$flight_ID");
            exit;
        } else {
            echo "Error: " . $sql_insert . "<br>" . $conn->error;
        }
    } else {
        // Handle case where flight number is not provided
        echo "Flight number not provided.";
    }
} else {
    // Handle case where passport number is not stored in the session
    echo "Passport number not found in session.";
}
?>
