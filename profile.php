<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Railway HR</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/a-style.css" />
    <!-- Box Icons -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

<?php
    include("sidebar.php");
    include("connect.php");
    ?>

<div class="content-container">

    <div class="right-panel">
        <!-- Right panel content goes here -->
        <div class="profile-section">
            <h2>Profile</h2>
            <div class="profile-box">
                <img src="./assets/img/profile-pic.jpg" alt="Profile Picture">
                <div class="profile-edit-link">
                    <a href="#">Edit Profile Picture</a>
                </div>
            </div>
            <div class="profile-details">
                <div class="profile-field">
                    <div class="name-fields">
                        <div class="left">
                            <label for="firstName">First Name:</label>
                            <input type="text" id="firstName" name="firstName">
                        </div>
                        <div class="right">
                            <label for="lastName">Last Name:</label>
                            <input type="text" id="lastName" name="lastName">
                        </div>
                    </div>
                </div>
                <div class="profile-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="profile-field">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber">
                </div>
                <div class="profile-field">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address">
                </div>
                <div class="profile-field">
                    <label for="passcode">Passcode:</label>
                    <input type="text" id="passcode" name="passcode">
                </div>
                <div class="profile-field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="profile-buttons">
                    <button class="cancel-button">Cancel</button>
                    <button class="save-button">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="./assets/js/script.js"></script>

</body>
</html>