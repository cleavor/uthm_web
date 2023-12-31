<?php
    include ("connect.php");

    error_reporting(0);

    $sql = "SELECT * FROM announcements";
    $result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_assoc($result);

    if (isset($_POST["submit"])) {
        $s_announcement_id = $_POST["announcement_id"];
        $s_subject = $_POST["subject"];
        $s_description = $_POST["description"];
        $s_date_of_release = $_POST["date_or_release"];

        $sql = "UPDATE announcements SET announcement_id = '$s_announcement_id', subject = '$s_subject',
            description = '$s_description', date_of_release = '$s_date_of_release'
            WHERE announcement_id = '$s_announcement_id'";

        $result2 = mysqli_query($conn, $sql);
        if($result2) {
            echo "<script>alert('Record Updated.')</script>";
        }

        else {
            echo "Failed to update record.";
        }
    }
?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Announcement</title>
   <!-- CSS -->
   <link rel="stylesheet" href="./assets/css/style.css" />
   <link rel="stylesheet" href="./assets/css/a-style.css" />
   <!-- Box Icons -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include("sidebar.php");
    ?>

    <div class="content-container">
        <h1 class="title" style="margin-left:10px">Edit Announcement</h1>

        <div class="announcement-box">
            <form method="GET">
                <div class="subject">
                    <label for="subject" style="display: block">Subject</label>
                    <input type="text" name="subject" value="<?php echo "{$info['subject']}"; ?>">
                </div>
                <div class="announcement-text">
                    <label for="description" style="display: block">Description</label>
                    <input type="text" name="description" value="<?php echo "{$info['description']}"; ?>">
                </div>
                <div class="announcement-buttons">
                    <button type="submit" class="save-button" name="submit">Save</button>
                </div>
            </form>
        </div>

<!-- Javascript -->
<script src="./assets/js/script.js"></script>
</body>
</html>
