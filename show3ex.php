<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Flight Listings</title>
    <link rel="stylesheet" type="text/css" href="sorucestyle.css">

</head>
<body>
<style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
body{
    background-color: #f2f2f2;
}
.slide
{
    height:100%;
    width: 180px;
    position: absolute;
    background-color: #faf8f8;
    transition: 0.5s ease;
    transform: translateX(5px);
}
h1{
    color:#8000ff;
    font-weight: 800;
    text-align: right;
    padding: 8px 0;
    
    padding-right: 7px;
    pointer-events: none;

}
u1 li{
    list-style: none;

}
u1 li a{
    color: #011a41;
    font-weight: 500;
    padding: 5px 0;
    display: block;
    text-transform: capitalize;
    text-decoration: none;
    transition: 0.2s ease-out;
}
u1 li:hover a{
    color:#fff;
    background-color: #8000ff;
    }
    
    u1 li a i{
        width:40px;
        text-align: center;
    
    }
    input 
    {
        display:none;
    }
    .toggle
    {
        position: absolute;
        height: 30px;
        width: 30px;
        left: 15px;
        z-index:1;
        cursor:pointer;
        border-radius: 2px;
        background-color: #fff;
        box-shadow: 0 0  10px rgba(0,0,0,0.3);
    
    }
        </style>
        <label>
            <div class="slide">
                <h1>MENU</h1>
                <u1>
                    <li><a href="search.php"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="contact.html"><i class="fas fa-phone"></i>Contacts</a></li>
                    <li><a href="login.php"><i class="fas fa-sign-out"></i>logout</a></li>
                </u1>
             </div>
        </label>
</head>
<div class="flight-listing">
<form action="review3ex.php" method="post">
<?php
$flights = array(
    array(
        'flight_number' => 'RS•FA 1909',
        'source' => 'bangalore',
        'destination' => 'mumbai',
        'departure_time' => '19:55',
        'duration' => '2h 5m',
        'arrival_time' => '21:05',
        'price' => '₹4654',
        'class' => 'economy',

    ),
    array(
        'flight_number' => 'RS•FA 1909',
        'source' => 'bangalore',
        'destination' => 'mumbai',
        'departure_time' => '19:55',
        'duration' => '2h 5m',
        'arrival_time' => '21:05',
        'price' => '₹8675',
        'class' => 'business'
    ),
    array(
        'flight_number' => 'RS•SG 8709',
        'source' => 'bangalore',
        'destination' => 'mysore',
        'departure_time' => '21:00',
        'duration' => '3h 20m',
        'arrival_time' => '00:20',
        'price' => '₹5487',
        'class' => 'economy'
    ),
    array(
        'flight_number' => 'RS•SG 8709',
        'source' => 'bangalore',
        'destination' => 'mysore',
        'departure_time' => '21:00',
        'duration' => '3h 20m',
        'arrival_time' => '00:20',
        'price' => '₹10800',
        'class' => 'business'
    ),
    array(
        'flight_number' => 'RS•FR 8789',
        'source' => 'bangalore',
        'destination' => 'kochi',
        'departure_time' => '14:15',
        'duration' => '2h 50m',
        'arrival_time' => '17:05',
        'price' => '₹7687',
        'class' => 'economy'

    ),
    array(
        'flight_number' => 'RS•FR 8789',
        'source' => 'bangalore',
        'destination' => 'kochi',
        'departure_time' => '14:15',
        'duration' => '2h 50m',
        'arrival_time' => '17:05',
        'price' => '₹13500',
        'class' => 'business'

    ),
    array(
        'flight_number' => 'RS•SPJ 4578',
        'source' => 'bangalore',
        'destination' => 'chennai',
        'departure_time' => '2:35',
        'duration' => '1h 32m',
        'arrival_time' => '4:07',
        'price' => '₹7648',
        'class' => 'economy'

    ),
    array(
        'flight_number' => 'RS•SPJ 4578',
        'source' => 'bangalore',
        'destination' => 'chennai',
        'departure_time' => '2:35',
        'duration' => '1h 32m',
        'arrival_time' => '4:07',
        'price' => '₹15600',
        'class' => 'business'

    ),
    array(
        'flight_number' => 'RS•YT 8380',
        'source' => 'bangalore',
        'destination' => 'hyderabad',
        'departure_time' => '2:35',
        'duration' => '2h 30m',
        'arrival_time' => '5:05',
        'price' => '₹8758',
        'class' => 'economy'
    ),
    array(
        'flight_number' => 'RS•YT 8380',
        'source' => 'bangalore',
        'destination' => 'hyderabad',
        'departure_time' => '2:35',
        'duration' => '2h 30m',
        'arrival_time' => '5:05',
        'price' => '₹16500',
        'class' => 'business'
    ),
    array(
        'flight_number' => 'RS•HG 9678',
        'source' => 'trichy',
        'destination' => 'mumbai',
        'departure_time' => '12:35',
        'duration' => '2h 40m',
        'arrival_time' => '2:05',
        'price' => '₹4500',
        'class' => 'economy'
    ),   array(
        'flight_number' => 'RS•HG 9678',
        'source' => 'trichy',
        'destination' => 'mumbai',
        'departure_time' => '12:35',
        'duration' => '2h 40m',
        'arrival_time' => '2:05',
        'price' => '₹9000',
        'class' => 'business'
    ),  array(
        'flight_number' => 'RS•FR 380',
        'source' => 'trichy',
        'destination' => 'mysore',
        'departure_time' => '2:05',
        'duration' => '3h 30m',
        'arrival_time' => '5:35',
        'price' => '₹4900',
        'class' => 'economy'
    ),   array(
        'flight_number' => 'RS•FR 380',
        'source' => 'trichy',
        'destination' => 'mysore',
        'departure_time' => '2:05',
        'duration' => '3h 30m',
        'arrival_time' => '5:35',
        'price' => '₹10000',
        'class' => 'business'
    ),
    array(
        'flight_number' => 'RS•LT 380',
        'source' => 'trichy',
        'destination' => 'kochi',
        'departure_time' => '7:05',
        'duration' => '2h 30m',
        'arrival_time' => '9:35',
        'price' => '₹3670',
        'class' => 'economy'
    ),  array(
        'flight_number' => 'RS•LT 380',
        'source' => 'trichy',
        'destination' => 'kochi',
        'departure_time' => '7:05',
        'duration' => '2h 30m',
        'arrival_time' => '9:35',
        'price' => '₹7000',
        'class' => 'business'
    ),   array(
        'flight_number' => 'RS•JN 80',
        'source' => 'trichy',
        'destination' => 'chennai',
        'departure_time' => '21:00',
        'duration' => '3h 00m',
        'arrival_time' => '24:00',
        'price' => '₹7500',
        'class' => 'economy'
    ),   array(
        'flight_number' => 'RS•JN 80',
        'source' => 'trichy',
        'destination' => 'chennai',
        'departure_time' => '21:00',
        'duration' => '3h 00m',
        'arrival_time' => '24:00',
        'price' => '₹15000',
        'class' => 'business'
    ),array(
        'flight_number' => 'RS•YT 8380',
        'source' => 'trichy',
        'destination' => 'hyderabad',
        'departure_time' => '23:05',
        'duration' => '2h 00m',
        'arrival_time' => '1:05',
        'price' => '₹4000',
        'class' => 'economy'
    ), array(
        'flight_number' => 'RS•YT 8380',
        'source' => 'trichy',
        'destination' => 'hyderabad',
        'departure_time' => '23:05',
        'duration' => '2h 00m',
        'arrival_time' => '1:05',
        'price' => '₹8000',
        'class' => 'business'
    ),
    array(
        'flight_number' => 'RS•DF 967',
        'source' => 'pondicherry',
        'destination' => 'mumbai',
        'departure_time' => '8:50',
        'duration' => '2h 00m',
        'arrival_time' => '10:50',
        'price' => '₹7000',
        'class' => 'economy'
    ),  array(
        'flight_number' => 'RS•DF 967',
        'source' => 'pondicherry',
        'destination' => 'mumbai',
        'departure_time' => '8:50',
        'duration' => '2h 00m',
        'arrival_time' => '10:50',
        'price' => '₹14000',
        'class' => 'business'
    ),  array(
        'flight_number' => 'RS•RL 30',
        'source' => 'pondicherry',
        'destination' => 'mysore',
        'departure_time' => '22:00',
        'duration' => '2h 30m',
        'arrival_time' => '00:30',
        'price' => '₹5600',
        'class' => 'economy',
        'date'=>'date'
    ),  array(
        'flight_number' => 'RS•RL 30',
        'source' => 'pondicherry',
        'destination' => 'mysore',
        'departure_time' => '22:00',
        'duration' => '2h 30m',
        'arrival_time' => '00:30',
        'price' => '₹11000',
        'class' => 'business'
    ),
    array(
        'flight_number' => 'RS•KM 3890',
        'source' => 'pondicherry',
        'destination' => 'kochi',
        'departure_time' => '17:55',
        'duration' => '2h 40m',
        'arrival_time' => '20:35',
        'price' => '₹3870',
        'class' => 'economy'
    ),  array(
        'flight_number' => 'RS•KM 3890',
        'source' => 'pondicherry',
        'destination' => 'kochi',
        'departure_time' => '17:55',
        'duration' => '2h 40m',
        'arrival_time' => '20:35',
        'price' => '₹7540',
        'class' => 'business'
    ),   array(
        'flight_number' => 'RS•JL 50',
        'source' => 'pondicherry',
        'destination' => 'chennai',
        'departure_time' => '23:00',
        'duration' => '1h 50m',
        'arrival_time' => '00:50',
        'price' => '₹6700',
        'class' => 'economy'
    ),    array(
        'flight_number' => 'RS•JL 50',
        'source' => 'pondicherry',
        'destination' => 'chennai',
        'departure_time' => '23:00',
        'duration' => '1h 50m',
        'arrival_time' => '00:50',
        'price' => '₹13600',
        'class' => 'business'
    ),array(
        'flight_number' => 'RS•YFGT 50',
        'source' => 'pondicherry',
        'destination' => 'hyderabad',
        'departure_time' => '4:20',
        'duration' => '2h 30m',
        'arrival_time' => '6:50',
        'price' => '₹5400',
        'class' => 'economy'
    ), array(
        'flight_number' => 'RS•YFGT 50',
        'source' => 'pondicherry',
        'destination' => 'hyderabad',
        'departure_time' => '4:20',
        'duration' => '2h 30m',
        'arrival_time' => '6:50',
        'price' => '₹25000',
        'class' => 'business'
    ),
);

function findFlights($flights, $source, $destination, $class = null) {
    $foundFlights = array();
    foreach ($flights as $flight) {
        if (strcasecmp($flight['source'], $source) == 0 && strcasecmp($flight['destination'], $destination) == 0) {
            if ($class === null || strcasecmp($flight['class'], $class) == 0) {
                $foundFlights[] = $flight;
                
            }
        }
    }
    return $foundFlights;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['source']) && isset($_POST['destination']) && isset($_POST['class']) && isset($_POST['date']) && isset($_POST['passenger'])) {
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $passenger = $_POST['passenger'];

    $foundFlights = findFlights($flights, $source, $destination, $class);

    if (!empty($foundFlights)) {
        echo "<h4>Flights from $source to $destination on $date :</h4>";

        foreach ($foundFlights as $flight) {
            echo "<form action='review3ex.php' method='post'>";
            echo "<input type='hidden' name='flight_number' value='" . $flight['flight_number'] . "'>";
            echo "<input type='hidden' name='source' value='" . $flight['source'] . "'>";
            echo "<input type='hidden' name='destination' value='" . $flight['destination'] . "'>";
            echo "<input type='hidden' name='departure_time' value='" . $flight['departure_time'] . "'>";
            echo "<input type='hidden' name='duration' value='" . $flight['duration'] . "'>";
            echo "<input type='hidden' name='arrival_time' value='" . $flight['arrival_time'] . "'>";
            echo "<input type='hidden' name='price' value='" . $flight['price'] . "'>";
            echo "<input type='hidden' name='class' value='" . $flight['class'] . "'>";
            echo "<input type='hidden' name='date' value='" . $date . "'>";
            echo "<input type='hidden' name='passenger' value='" . $passenger . "'>";
            echo "<div class='flight' onclick='this.parentNode.submit();' style='cursor: pointer;'>";
            echo "<div class='flight-info'>";
            echo "<div class='flight-number'>" . $flight['flight_number'] . "</div>";
            echo "<div class='times'>";
            echo "<span class='source'>" . ucfirst($flight['source']) . "</span>";
            echo "<span class='time'>" . $flight['departure_time'] . "</span>";
            echo "<span class='duration'>" . $flight['duration'] . "</span><br>";
            echo "<span class='time'>" . $flight['arrival_time'] . "</span>";
            echo "<span class='destination'>" . ucfirst($flight['destination']) . "</span><br>";
            echo "</div>";
            echo "<div class='price'>" . $flight['price'] . "</div>";
            echo "</div>";
            echo "</div>";
            echo "</form>";
        }
    } else {
        echo "<p>No flights found from $source to $destination with class $class on $date for $passenger passenger(s).</p>";
    }
} else {
    echo "<p>Error: Form not submitted properly.</p>";
}
?>
