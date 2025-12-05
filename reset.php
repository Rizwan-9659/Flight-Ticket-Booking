<?php
session_start();
unset($_SESSION['travellers']);
header("Location: modify.php");
exit();
?>
