<?php
session_start();

// Assuming passengers' details are stored in a session variable named 'passengers'
$passengers = isset($_SESSION['passengers']) ? $_SESSION['passengers'] : [];

// Handle Reset functionality
if (isset($_POST['reset'])) {
    unset($_SESSION['passengers']);
    header('Location: display.php');
    exit;
}

// Handle Modify functionality (This would typically redirect to a modify page with the passenger data pre-filled)
// For simplicity, this example will handle the modify logic in the same form as add traveler (index.php).
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveller Details</title>
    <style>
        /* Your existing styles */
        .button-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .reset-btn {
            background-color: #dc3545;
            color: white;
        }

        .reset-btn:hover {
            background-color: #c82333;
        }

        .modify-btn {
            background-color: #007bff;
            color: white;
        }

        .modify-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div id="travellerDetails" class="traveller-details">
    <?php if (empty($passengers)): ?>
        <p>No passengers added yet.</p>
    <?php else: ?>
        <?php foreach ($passengers as $index => $passenger): ?>
            <div class="traveller-item">
                <div>
                    <strong><?php echo htmlspecialchars($passenger['title']); ?></strong>
                   <p> <?php echo htmlspecialchars($passenger['first_middle_name']) . ' ' . htmlspecialchars($passenger['last_name']); ?></p>
                   <p> Nationality: <?php echo htmlspecialchars($passenger['nationality']); ?></p>
                   <p> Date of Birth: <?php echo htmlspecialchars($passenger['date_of_birth']); ?></p>
                    <p>Passport Number: <?php echo htmlspecialchars($passenger['passport_number']); ?></p>
                   <p> Email: <?php echo htmlspecialchars($passenger['email_address']); ?></p>
                </div>
                <div class="button-container">
                    <form action="index.php" method="post">
                        <!-- Send passenger data to modify form via hidden inputs -->
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <input type="hidden" name="title" value="<?php echo htmlspecialchars($passenger['title']); ?>">
                        <input type="hidden" name="first_middle_name" value="<?php echo htmlspecialchars($passenger['first_middle_name']); ?>">
                        <input type="hidden" name="last_name" value="<?php echo htmlspecialchars($passenger['last_name']); ?>">
                        <input type="hidden" name="nationality" value="<?php echo htmlspecialchars($passenger['nationality']); ?>">
                        <input type="hidden" name="date_of_birth" value="<?php echo htmlspecialchars($passenger['date_of_birth']); ?>">
                        <input type="hidden" name="passport_number" value="<?php echo htmlspecialchars($passenger['passport_number']); ?>">
                        <input type="hidden" name="email_address" value="<?php echo htmlspecialchars($passenger['email_address']); ?>">
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<div class="button-container">
    <!-- Reset Button -->
    <form action="modify.php" method="post">
    <button type="submit" class="modify-btn">Add Travellers</button>

    <button type="submit" name="reset" class="reset-btn">Reset All</button>
    </form>
</div>

</body>
</html>
