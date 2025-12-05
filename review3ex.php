<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Information</title>
    <link rel="stylesheet" href="review.css">
    <style>
        .price-info-container {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            max-width: 300px;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .price-info {
            margin-bottom: 20px;
        }

        .price-info p {
            margin: 10px 0;
            font-size: 16px;
        }

        .price-info strong {
            color: #333;
        }

        .price-info p:nth-child(2) {
            font-size: 18px;
            color: #d9534f;
        }

        .price-info p:nth-child(3) {
            font-size: 18px;
            color: #5cb85c;
        }

        .center-button {
            display: flex;
            justify-content: center;
        }

        .center-button input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .center-button input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .toggle-button {
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            background: none;
            border: none;
            font-size: 18px;
            padding: 10px;
            text-align: left;
        }

        .toggle-icon {
            transition: transform 0.3s;
        }

        .toggle-icon.expanded {
            transform: rotate(180deg);
        }

        .traveller-details {
            display: none;
            background-color: #f9f9f9;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        .traveller-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .traveller-item img {
            border-radius: 50%;
            margin-right: 10px;
        }

        .modify-link {
            color: #007bff;
            text-decoration: none;
        }

        .modify-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flightInfo = [
            'flight_number' => $_POST['flight_number'],
            'source' => $_POST['source'] ?? 'N/A',
            'destination' => $_POST['destination'] ?? 'N/A',
            'departure_time' => $_POST['departure_time'] ?? 'N/A',
            'duration' => $_POST['duration'] ?? 'N/A',
            'arrival_time' => $_POST['arrival_time'] ?? 'N/A',
            'price' => isset($_POST['price']) ? floatval(str_replace('₹', '', $_POST['price'])) : 0,
            'class' => $_POST['class'] ?? 'N/A',
            'date' => $_POST['date'] ?? date('Y-m-d'),
            'aterminal' => '3',
            'dterminal' => '2',
            'cabinBaggage' => '7kg bag',
            'wifi' => 'free',
            'passenger' => isset($_POST['passenger']) ? (int)$_POST['passenger'] : 0
        ];
        $totalPrice = $flightInfo['price'] * $flightInfo['passenger'];
    ?>

    <div class="flight-info">
        <div class="header">
            <img src="flightlogo.jpg" alt="Flight Logo" style="width: 50px; height: auto;">
            <h1><?php echo htmlspecialchars($flightInfo['source']); ?> → <?php echo htmlspecialchars($flightInfo['destination']); ?></h1>
            <p>Non-stop · <?php echo htmlspecialchars($flightInfo['duration']); ?> · <?php echo htmlspecialchars($flightInfo['class']); ?></p>
        </div>

        <div class="flight-details">
            <div class="flight">
                <span><?php echo htmlspecialchars($flightInfo['flight_number']); ?></span>
            </div>
            <div class="flight-time">
                <div class="time">
                    <strong><?php echo htmlspecialchars($flightInfo['date']); ?></strong> 
                    <p><?php echo htmlspecialchars($flightInfo['departure_time']); ?></p>
                    <span><?php echo htmlspecialchars($flightInfo['source']); ?></span>
                    <span><?php echo htmlspecialchars($flightInfo['dterminal']); ?></span>     
                </div>
                <div class="duration">
                    <p><?php echo htmlspecialchars($flightInfo['duration']); ?></p>
                </div>
                <div class="time">
                    <strong><?php echo htmlspecialchars($flightInfo['date']); ?></strong>
                    <p><?php echo htmlspecialchars($flightInfo['arrival_time']); ?></p>
                    <span><?php echo htmlspecialchars($flightInfo['destination']); ?></span>
                    <span><?php echo htmlspecialchars($flightInfo['aterminal']); ?></span>
                </div>
            </div>
        </div>
        <div class="baggage">
            <p><strong>Cabin:</strong> <?php echo htmlspecialchars($flightInfo['cabinBaggage']); ?></p>
        </div>
        <div class="footer">
            <p>Wi-Fi: <?php echo htmlspecialchars($flightInfo['wifi']); ?></p>
        </div>
        
     

        <div class="price-info-container">
            <div class="price-info">
                <p><strong>Passengers:</strong> <?php echo htmlspecialchars($flightInfo['passenger']); ?></p>
                <p><strong>Price per Passenger:</strong> ₹<?php echo htmlspecialchars($flightInfo['price']); ?></p>
                <p><strong>Total Price:</strong> ₹<?php echo htmlspecialchars($totalPrice); ?></p>
            </div>
            <div class="center-button">
                <form action="seatt1.php" method="post">
                    <input type="hidden" name="flight_number" value="<?php echo htmlspecialchars($flightInfo['flight_number']); ?>">
                    <input type="hidden" name="source" value="<?php echo htmlspecialchars($flightInfo['source']); ?>">
                    <input type="hidden" name="destination" value="<?php echo htmlspecialchars($flightInfo['destination']); ?>">
                    <input type="hidden" name="departure_time" value="<?php echo htmlspecialchars($flightInfo['departure_time']); ?>">
                    <input type="hidden" name="duration" value="<?php echo htmlspecialchars($flightInfo['duration']); ?>">
                    <input type="hidden" name="arrival_time" value="<?php echo htmlspecialchars($flightInfo['arrival_time']); ?>">
                    <input type="hidden" name="price" value="<?php echo htmlspecialchars($flightInfo['price']); ?>">
                    <input type="hidden" name="class" value="<?php echo htmlspecialchars($flightInfo['class']); ?>">
                    <input type="hidden" name="date" value="<?php echo htmlspecialchars($flightInfo['date']); ?>">
                    <input type="hidden" name="aterminal" value="<?php echo htmlspecialchars($flightInfo['aterminal']); ?>">
                    <input type="hidden" name="dterminal" value="<?php echo htmlspecialchars($flightInfo['dterminal']); ?>">
                    <input type="hidden" name="cabinBaggage" value="<?php echo htmlspecialchars($flightInfo['cabinBaggage']); ?>">
                    <input type="hidden" name="wifi" value="<?php echo htmlspecialchars($flightInfo['wifi']); ?>">
                    <input type="hidden" name="passenger" value="<?php echo htmlspecialchars($flightInfo['passenger']); ?>">
                    <input type="hidden" name="total_price" value="<?php echo htmlspecialchars($totalPrice); ?>">
                    <input type="submit" value="PROCEED" name="submit">
                </form>
            </div>
        </div>
    </div>
    <?php
    } else {
        echo "<p>Error: No flight selected.</p>";
    }
    ?>
</body>
</html>
