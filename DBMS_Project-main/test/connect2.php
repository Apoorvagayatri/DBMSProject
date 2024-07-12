<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve values from the form
    $from = $_GET['from'];
    $to = $_GET['to'];
    $departureDate = $_GET['departuredate'];
    $minPrice = $_GET['minprice'];
    $maxPrice = $_GET['maxprice'];

    // Establish connection to MySQL database
    $conn = new mysqli('localhost', 'root', '', 'test');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL query
    $sql = "CALL GetFlightsByPriceRange(?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $minPrice, $maxPrice, $departureDate, $from, $to);

    // Execute query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
echo '
    
         <thead>
                <tr>
                    <td><h1>Flight Number</h1></td>
                    <td></span>Airline</td>

                    <td>Departure Date</td>
                    <td>Departure Time</td>
                    <td>From</td>
                    <td>To</td>
                    <td>Price</td>
                </tr>
                </thead>
                <br>
             
              ';
            
        
        
            
            
        
        
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '
        
         <tbody>
         <tr>
                    <td>'.$row['flightNumber'].'</td>
                    <td>'.$row['airline'].'</td>
                    <td>'.$row['departureDate'].'</td>
                    <td>'.$row['departureTime'].'</td>
                    <td>'.$row['originAirportCode'].'</td>
                    <td>'.$row['destinationAirportCode'].'</td>
                    <td>'.$row['price'].'</td>
                  </tr>
                  </tbody>
                  
                  ';
        }
    } else {
        echo '<h2>Sorry, No Flights Available</h2>';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

