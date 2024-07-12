<?php
 session_start();
 ?>

<!DOCTYPE html>
<html>
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

<body>
<section class="banner" id="top">
    <div class="container">
        <div class="col-md-5 col-md-offset-1">
            <section id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="submit-form">
                        <h4>Check availability for <em>Flights</em>:</h4>
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="form-group">
                                    
                                        <label for="">From:</label>
                                        <select required name='from' class="form-control">
                                            <option value="">Select a location...</option>
                                            <option value="HYD">Hyderabad</option>
                                            <option value="BOM">Mumbai</option>
                                            <option value="DEL">Delhi</option>
                                            <option value="BLR">Bengaluru</option>
                                            <option value="MAA">Chennai</option>
                                            <option value="COK">Kochi</option>
                                            <option value="TIR">Tirupati</option>
                                            <option value="CCU">Kolkata</option>
                                            <option value="GOI">Goa</option>
                                        </select>
                                    
                                </div>
                                <div class="form-group">
                                    
                                        <label for="">To:</label>
                                        <select required name='to' class="form-control">
                                         <option value="">Select a location...</option>
                                         <option value="HYD">Hyderabad</option>
                                         <option value="BOM">Mumbai</option>
                                         <option value="DEL">Delhi</option>
                                         <option value="BLR">Bengaluru</option>
                                         <option value="MAA">Chennai</option>
                                         <option value="COK">Kochi</option>
                                         <option value="TIR">Tirupati</option>
                                         <option value="CCU">Kolkata</option>
                                         <option value="GOI">Goa</option>
                                    
                                        </select>
                                    
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Departure</label>
                                    <input
                                            type="date"
                                            class="form-control"
                                            id="departuredate"
                                            name="departuredate"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="number">Min Price</label>
                                    <input
                                            type="number"
                                            class="form-control"
                                            id="minprice"
                                            name="minprice"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="number">Max Price</label>
                                    <input
                                            type="number"
                                            class="form-control"
                                            id="maxprice"
                                            name="maxprice"
                                    />
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Find Flights</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
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

    <link rel="stylesheet" href="css/tooplate-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <style>
        /* Specify font for the entire document */
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Specify styling for the table */
        .flight-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Specify styling for table headers */
        .flight-table th {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            background-color: #f2f2f2;
            font-weight: bold;
        }

        /* Specify styling for table data */
        .flight-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
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
            echo '<h3>Search Results:</h3>';
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
                        <td><a href="booking.php?flightID='.$row['ID'].'">Book</a></td>

                      </tr>';
            }
            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<h3>Sorry, No Flights Available</h3>';
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>

