<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$mysqli=new mysqli('localhost','root','','flight');
if ($password !== $repassword) {
    echo "<script>
            alert('Passwords do not match!');
            window.history.back();
          </script>";
    exit();
}
$duplicate = $mysqli->query("SELECT * FROM register WHERE name='$name' OR email='$email'");
if ($duplicate->num_rows > 0) {
    echo "<script>
            alert('Username or Email has already been taken!');
            window.history.back();
          </script>";
    exit();
}
if($mysqli->connect_error)
{
    die('connection failed:'.$mysqli->connect_error);
 }
else
{
    $stmt=$mysqli->prepare("insert into register(name,email,password)values(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    echo "<script> alert('Registration success')</script>";
    $stmt->close();
    $mysqli->close();
}

?>
