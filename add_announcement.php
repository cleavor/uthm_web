<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add New Announcement</title>
   <!-- CSS -->
   <link rel="stylesheet" href="./asset/css/style.css" />
   <link rel="stylesheet" href="./asset/css/a-style.css" />
   <!-- Box Icons -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include("sidebar.php");
    ?>

    <div class="content-container">
        <h1 class="title" style="margin-left:10px">Add New Announcement</h1>

        <div class="announcement-box">
            <form method="POST">
                <div class="subject">
                    <label for="subject" style="display: block">Subject</label>
                    <input type="text" name="subject" required>
                </div>
                <div class="announcement-text">
                    <label for="description" style="display: block">Description</label>
                    <textarea type="text" name="description" rows="6"></textarea>
                </div>
                <div class="announcement-buttons">
                    <button type="submit" class="save-button" name="saveButton">Save</button>
                </div>
            </form>
        </div>

        <?php 
            include("connect.php");

            if(isset($_POST["description"])){
                $subject = $_POST["subject"];
                $description = $_POST["description"];

                $query = "INSERT INTO announcements VALUES ('','$subject','$description',curdate())";
                mysqli_query($conn, $query);
                echo 
                "
                <script> alert('Data inserted successfully!'); </script>
                ";
            }
        ?>
    </div>

<!-- Javascript -->
<script src="js/script.js"></script>
</body>

</html>
