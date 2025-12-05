
<html>
   <head>
      <link rel="stylesheet" href="style1.css">
  </head>
<div class="sign1">
<form action="sign2.php" method="post">
<center> <h1>Sign Up</h1></center>
<hr>
<center>  
  <br><label="Name"><b>UserName</b></label></br>
    <input type="text" placeholder="Enter UserName" name="name" required>
    <box-icon name='user'></box-icon>
   <br><label="Email"><b>Email</b></label></br>
    <input type="text" placeholder="Enter Email" name="email"  required>
    <div class="pass1">
    <br><label="Password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password"required>
    <box-icon name='lock' ></box-icon>
    <br><label="Repeat-Password"><b>Repeat Password</b></label></br>
    <input type="password"  placeholder="Repeat password" name="repassword" required>
    <box-icon name='lock' ></box-icon>
    </div>
<div class="clear1">
<br>
      <button type="submit"class="signupbutton" name="submit">SignUp</button></br>
<div class="login1">
<br>
<p><b>Already have an account? <a href="login.php">SignIn</a></b></p>  

    </div>
    </div>
</center>
</form>
</html>