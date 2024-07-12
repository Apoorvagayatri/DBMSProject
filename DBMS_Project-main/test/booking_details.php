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

        // Prepare and bind parameters for the stored procedure call
        $stmt = $conn->prepare("CALL GetBookingDetails(?, ?)");
        $stmt->bind_param("ss",$passport_number, $flight_ID );
        // Execute the stored procedure
        $stmt->execute();

        // Get the result set
        $result = $stmt->get_result();

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output the results as a receipt in a matrix form
            echo "<!DOCTYPE html>";
            echo "<html>";
            echo "<head>";
            echo "<title>Booking Receipt</title>";
            echo "<style>";
            echo "table { border-collapse: collapse; width: 100%; }";
            echo "th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }";
            echo "th { background-color: #f2f2f2; }";
            echo "</style>";
            echo "</head>";
            echo "<body>";
            echo "<h1>Booking Receipt</h1>";
            echo "<table>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>Flight Number:</td><td>" . $row["flightNumber"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Origin Airport:</td><td>" . $row["originAirport"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Destination Airport:</td><td>" . $row["destinationAirport"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Price:</td><td>" . $row["price"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Passenger First Name:</td><td>" . $row["firstName"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Passenger Last Name:</td><td>" . $row["lastName"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Gender:</td><td>" . $row["gender"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Passport:</td><td>" . $row["passport"] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Age:</td><td>" . $row["age"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</body>";
            echo "</html>";
        } else {
            echo "No booking found for this flight and passport.";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    } else {
        // Handle case where flight number is not provided
        echo "Flight number not provided.";
    }
} else {
    // Handle case where passport number is not stored in the session
    echo "Passport number not found in session.";
}
?>
