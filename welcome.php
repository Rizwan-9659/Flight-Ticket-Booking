<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Airlines Ticket Booking</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: lightblue;
        }
        .container {
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            border-radius: 50%;
            overflow: hidden;
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }
        p {
            margin-top: 20px;
        }
        a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="flightlogo.jpg" alt="Airlines Logo">
        </div>
        <h1>Airlines Ticket Booking</h1>
        <p><a href="login.php">Click Here to Book Your Ticket</a></p>
    </div>
</body>
</html>
