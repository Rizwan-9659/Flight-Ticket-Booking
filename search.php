<html>
    <head>
        <title>Ariliness ticket Booking</title>
        <link rel="stylesheet" href="style5.css">
                <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css"href="style44.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>sidebar Navigation With Toggle Icon</title>
                <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    </head>
    <body>
    <h1 id="title">
        <center>RS Airlines</center>
    </h1>
    <label>
            <input type="checkbox">
            <div class="toggle">
                <span class="top_line common"></span>
                <span class="middle_line common"></span>
                <span class="bottom_line common"></span>
            </div>
            <div class="slide">
                <h1>MENU</h1>
                <u1>
                    <li><a href="search.php"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="contact.html"><i class="fas fa-phone"></i>Contacts</a></li>
                    <li><a href="login.php"><i class="fas fa-sign-out"></i>logout</a></li>
                </u1>
            </div>
        </label>    
        <center>
        <form action="show3ex.php" method="post">
            <div class="Booking-Form">
                <tr>
                    <label><b>Source</b></label>
                    <input list="text1" name="source" class="form-control" placeholder="From" required>
                    <datalist id="text1">
                        <option value="bangalore">
                        <option value="trichy">
                        <option value="pondicherry">
                    </datalist>
                    <label><b>Destination</b></label>
                    <input list="text" name="destination" class="form-control" placeholder="To" required>
                    <datalist id="text">
                        <option value="mumbai">
                        <option value="mysore">
                        <option value="kochi">
                        <option value="chennai">
                        <option value="hyderabad">
                    </datalist>
                </tr>
                <div class="input-grp">
                    <label><b>Departure Date</b></label>
                    <input type="date"  name="date" class="form-control select-date" required>
                </div>
                <div class="input-grp">
                    <label><b>Passengers</b></label>
                    <input type="number" name="passenger" class="form-control" placeholder="e.g., 2" required>
                </div>
                <div class="input-grp">
                    <label><b>Class</b></label>
                    <input list="text2" name="class" class="form-control" placeholder="Class" required>
                    <datalist id="text2">
                        <option value="economy">
                        <option value="business">
                    </datalist>
                </div>
                <div class="input-grp">
                    <input type="submit" value="Search for Available Flights" class="btn btn-primary flight" name="search">
                </div>
            </div>
        </form>
</center>
    </body>
</html>


