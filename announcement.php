<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="announcement-section">
            <h2>Announcement</h2>
            <div class="announcement-box">
                <p>Edit Announcements</p>
            </div>
            <hr class="divider">
            <div class="announcement-box">
                <div class="new-announcement">
                    <p>Announcement Information</p>
                    <div class="subject">
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject">
                    </div>
                    <div class="announcement-text">
                        <label for="announcement">Announcement:</label>
                        <textarea id="announcement" name="announcement" rows="4"></textarea>
                    </div>
                    <div class="announcement-buttons">
                        <button class="cancel-button">Cancel</button>
                        <button class="save-button">Save</button>
                    </div>
                </div>
            </div>
            <hr class="divider">
            <div class="announcement-box">
                <p>Existing Announcements</p>
                <div class="existing-announcements">
                    <!-- Previous announcements container goes here -->
                    <div class="previous-announcement">
                        <p>Previous Announcement Text</p>
                        <button class="delete-button">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Javascript -->
<script src="./assets/js/script.js"></script>
</body>

</html>