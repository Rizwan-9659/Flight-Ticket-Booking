<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "flight"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$flightInfo = [
    'flight_number' => $_POST['flight_number'],
    'source' => $_POST['source'],
    'destination' => $_POST['destination'],
    'departure_time' => $_POST['departure_time'],
    'duration' => $_POST['duration'],
    'arrival_time' => $_POST['arrival_time'],
    'price' => $_POST['price'],
    'class' => $_POST['class'],
    'date' => $_POST['date'],
    'aterminal' => $_POST['aterminal'],
    'dterminal' => $_POST['dterminal'],
    'cabinBaggage' => $_POST['cabinBaggage'],
    'wifi' => $_POST['wifi'],
    'passenger' => $_POST['passenger'],
    'total_price' => $_POST['total_price']
];

$ticketNumber = 'TKT-' . strtoupper(bin2hex(random_bytes(4)));

$stmt = $conn->prepare("INSERT INTO flights (ticket_number, flight_number, source, destination, departure_time, duration, arrival_time, price, class, date, aterminal, dterminal, cabinBaggage, wifi, passenger, total_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssssssi", 
    $ticketNumber, 
    $flightInfo['flight_number'], 
    $flightInfo['source'], 
    $flightInfo['destination'], 
    $flightInfo['departure_time'], 
    $flightInfo['duration'], 
    $flightInfo['arrival_time'], 
    $flightInfo['price'], 
    $flightInfo['class'], 
    $flightInfo['date'], 
    $flightInfo['aterminal'], 
    $flightInfo['dterminal'], 
    $flightInfo['cabinBaggage'], 
    $flightInfo['wifi'], 
    $flightInfo['passenger'], 
    $flightInfo['total_price']
);

if ($stmt->execute()) {
    echo "<script>alert('Booked Successfully.');</script>";
} else {
    echo "<script>alert('Error inserting traveller details: " . $stmt->error . "');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Airliness Ticket</title>
    <style>
        /* Your existing CSS styles */
        .invoice-container {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .invoice-container h2 {
            text-align: center;
        }
        .flight-details, .traveller-details, .price-info {
            margin-bottom: 20px;
        }
        .flight-details p, .traveller-details p, .price-info p {
            margin: 5px 0;
        }
        .price-info {
            font-size: 18px;
            color: #5cb85c;
        }
    </style>
</head>
<body>
<div class="invoice-container">
        <h2>Airliness Ticket</h2>
        <div class="flight-details">
            <h3>Flight Details</h3>          
            <p><strong>Ticket Number:</strong> <?php echo htmlspecialchars($ticketNumber); ?></p>
            <p>Flight Number: <?php echo htmlspecialchars($flightInfo['flight_number']); ?></p>
            <p>Source: <?php echo htmlspecialchars($flightInfo['source']); ?></p>
            <p>Destination: <?php echo htmlspecialchars($flightInfo['destination']); ?></p>
            <p>Departure Time: <?php echo htmlspecialchars($flightInfo['departure_time']); ?></p>
            <p>Duration: <?php echo htmlspecialchars($flightInfo['duration']); ?></p>
            <p>Arrival Time: <?php echo htmlspecialchars($flightInfo['arrival_time']); ?></p>
            <p>Class: <?php echo htmlspecialchars($flightInfo['class']); ?></p>
            <p>Date: <?php echo htmlspecialchars($flightInfo['date']); ?></p>
            <p>Departure Terminal: <?php echo htmlspecialchars($flightInfo['dterminal']); ?></p>
            <p>Arrival Terminal: <?php echo htmlspecialchars($flightInfo['aterminal']); ?></p>
            <p>Cabin Baggage: <?php echo htmlspecialchars($flightInfo['cabinBaggage']); ?></p>
            <p>Wi-Fi: <?php echo htmlspecialchars($flightInfo['wifi']); ?></p>
        </div>
        <div class="traveller-details"></div>
        <div class="price-info">
            <p><strong>Passengers:</strong> <?php echo htmlspecialchars($flightInfo['passenger']); ?></p>
            <p><strong>Price per Passenger:</strong> ₹<?php echo htmlspecialchars($flightInfo['price']); ?></p>
            <h3>___________</h3>
            <strong>Total Price:</strong> ₹<?php echo htmlspecialchars($flightInfo['total_price']); ?>
            <h3>___________</h3>
        </div>
    </div>

    <form action="seatt2.php" method="POST">
        <input type="hidden" name="ticket_number" value="<?php echo htmlspecialchars($ticketNumber); ?>">
        <input type="hidden" name="flightInfo" value="<?php echo htmlspecialchars(json_encode($flightInfo)); ?>">
        <button type="submit" class="btn btn-primary">Download Ticket</button>
    </form>

    <form action="cancel_flight.php" method="POST" onsubmit="return confirm('Are you sure you want to cancel this ticket?');">
        <input type="hidden" name="ticket_number" value="<?php echo htmlspecialchars($ticketNumber); ?>">
        <button type="submit" class="btn btn-danger">Cancel Ticket</button>
    </form>
</body>
</html>
