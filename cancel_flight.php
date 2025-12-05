<?php
session_start();

// Database connection details
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "flight"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['ticket_number'])) {
    $ticket_number = $_POST['ticket_number'];

    $stmt_travellers = $conn->prepare("DELETE FROM travellers WHERE flight_id = (SELECT id FROM flights WHERE ticket_number = ?)");
    $stmt_travellers->bind_param("s", $ticket_number);
    $stmt_travellers->execute();

    $stmt_flights = $conn->prepare("DELETE FROM flights WHERE ticket_number = ?");
    $stmt_flights->bind_param("s", $ticket_number);
    $stmt_flights->execute();

    if ($stmt_flights->affected_rows > 0) {
        echo "<script>alert('Ticket canceled successfully.'); window.location.href='search.php';</script>";
    } else {
        echo "<script>alert('Error canceling the ticket. Please try again.'); window.location.href='your_invoice_page.php';</script>";
    }

    $stmt_travellers->close();
    $stmt_flights->close();
} else {
    echo "<script>alert('Invalid request.'); window.location.href='search.php';</script>";
}

$conn->close();
?>
