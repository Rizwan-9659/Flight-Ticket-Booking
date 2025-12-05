<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Adult</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .form-container, .traveller-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
        }

        .note {
            background-color: #fff3cd;
            color: #856404;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff6f00;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e65c00;
        }

        .traveller-details {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            width: 320px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .traveller-item {
            display: flex;
            align-items: center;
        }

        .traveller-item img {
            margin-right: 10px;
        }

        .modify-link {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }

        .modify-link:hover {
            text-decoration: underline;
        }
    </style>
    
    <div class="form-container">
        <h2>Add Traveller</h2>
        <form action="process1.php" method="post">
            <label>
                <input type="radio" name="title" value="Mr" checked> Male
            </label>
            <label>
                <input type="radio" name="title" value="Ms"> Female
            </label>
            <label>
                <input type="radio" name="title" value="Mrs"> Others
            </label>

            <input type="text" name="first_middle_name" placeholder="First & Middle Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>

            <label for="nationality">Nationality</label>
            <select name="nationality" id="nationality">
                <option value="India" selected>India</option>
                <option value="Others">Others</option>
                <!-- Add more options as needed -->
            </select>

            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>

            <label for="passport_number">Passport Number:</label>
            <input type="text" id="passport_number" name="passport_number" required>

            <label for="email_address">Email Address:</label>
            <input type="email" id="email_address" name="email_address" required>

            <button type="submit">Add Traveller</button>
        </form>
        <a href="display.php" class="modify-link">View All Travellers</a>
    </div>
</body>
</html>