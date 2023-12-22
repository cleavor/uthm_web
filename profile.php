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
                    
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName">
                        
                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName">
                        
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                
                
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber">
                
                
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address">
            
                
                    <label for="poscode">Poscode:</label>
                    <input type="text" id="poscode" name="poscode">
                
                
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                
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