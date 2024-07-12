<head>
     <title>Flight - Travel and Tour</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/tooplate-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <style>
        .flight-table {
            width: 100%;
            border-collapse: collapse;
        }

        .flight-table th, .flight-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .flight-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--

    Template 2093 Flight

    http://www.tooplate.com/view/2093-flight

    -->
    <title>Flight - Travel and Tour</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/tooplate-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<?php

    // Establish connection to MySQL database
    $conn = new mysqli('localhost', 'root', '', 'test');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL query
    $sql = "CALL getAllFlights";
    $stmt = $conn->prepare($sql);

    // Execute query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        echo '<table class="flight-table">';
        echo '<thead>
                <tr>
                    <th>Flight Number</th>
                    <th>Airline</th>
                    <th>Departure Date</th>
                    <th>Departure Time</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Price</th>
                </tr>
              </thead>
              <tbody>';
    
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>'.$row['flightNumber'].'</td>
                    <td>'.$row['airline'].'</td>
                    <td>'.$row['departureDate'].'</td>
                    <td>'.$row['departureTime'].'</td>
                    <td>'.$row['originAirportCode'].'</td>
                    <td>'.$row['destinationAirportCode'].'</td>
                    <td>'.$row['price'].'</td>
                  </tr>';
        }
        echo '</tbody>';
        echo '</table>';
    } else {
        echo '<h2>Sorry, No Flights Available</h2>';
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
?>
