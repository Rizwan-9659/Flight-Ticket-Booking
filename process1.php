<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $traveller_number = isset($_SESSION['traveller_count']) ? $_SESSION['traveller_count'] + 1 : 1;
    $_SESSION['traveller_count'] = $traveller_number;

    $traveller = [
        'number' => $traveller_number,
        'title' => htmlspecialchars($_POST['title']),
        'first_middle_name' => htmlspecialchars($_POST['first_middle_name']),
        'last_name' => htmlspecialchars($_POST['last_name']),
        'nationality' => htmlspecialchars($_POST['nationality']),
        'date_of_birth' => htmlspecialchars($_POST['date_of_birth']),
        'passport_number' => htmlspecialchars($_POST['passport_number']),
        'email_address' => htmlspecialchars($_POST['email_address']),
    ];

    if (!isset($_SESSION['travellers'])) {
        $_SESSION['travellers'] = [];
    }

    $_SESSION['travellers'][$traveller_number] = $traveller;

    header("Location: display.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>
