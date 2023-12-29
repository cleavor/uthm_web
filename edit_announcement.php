<?php
    include ("connect.php");

    error_reporting(0);

    $announcement_id = $_GET["announcement_id"];
    $subject = $_GET["subject"];
    $description = $_GET["description"];
    $date_of_release = $_GET["date_or_release"];
?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add New Announcement</title>
   <!-- CSS -->
   <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/a-style.css" />
   <!-- Box Icons -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include("sidebar.php");
    ?>

    <div class="content-container">
        <h1 class="title" style="margin-left:10px">Announcement</h1>

        <div class="announcement-box">
            <form method="GET">
                <div class="subject">
                    <label for="subject" style="display: block">Subject</label>
                    <input type="text" name="subject" value="<?php echo $subject; ?>">
                </div>
                <div class="announcement-text">
                    <label for="description" style="display: block">Description</label>
                    <input type="text" name="description" value="<?php echo $description; ?>">
                </div>
                <div class="announcement-buttons">
                    <button type="submit" class="save-button" name="submit">Save</button>
                </div>
            </form>
        </div>

        <?php 
        if ($_GET["submit"]) {
            $announcement_id = $_GET["announcement_id"];
            $subject = $_GET["subject"];
            $description = $_GET["description"];
            $date_of_release = $_GET["date_of_release"];

            $sql = "UPDATE announcements SET announcement_id = '$announcement_id', subject = '$subject',
            description = '$description', date_of_release = '$date_of_release'
            WHERE announcement_id = '$announcement_id'";

            $result = mysqli_query($conn, $sql);
            if($result) {
                echo "<script>alert('Record Updated.')</script>";
            }

            else {
                echo "Failed to update record.";
            }
        }
    ?>

<!-- Javascript -->
<script src="js/script.js"></script>
</body>

</html>