<?php
$email = $_POST['email'];
$password = $_POST['password'];
$mysqli = new mysqli("localhost", "root", "", "flight");
if ($mysqli->connect_error) {
    die("failed to connect: " . mysqli->connect_error);
} else {
    $stmt = $mysqli->prepare("SELECT * FROM register WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            session_start();
            $_SESSION['email'] = $data['email']; 
                        header("Location: search.php");
            exit;
        } else {
            echo "<script>alert('Invalid email or password')</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password')</script>";
    }
}
?>
