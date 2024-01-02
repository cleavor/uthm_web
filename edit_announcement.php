<?php
include("connect.php");

// Check if announcement_id is provided
if (!empty($_GET['announcement_id'])) {
    $announcement_id = $_GET['announcement_id'];

    // Fetch details of the announcement to be edited
    $sql = "SELECT * FROM announcements WHERE announcement_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $announcement_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $info = mysqli_fetch_assoc($result);

    if (!$info) {
        echo "Announcement not found.";
        exit; // Exit if announcement ID doesn't exist
    }

    // Check if form is submitted for updating
    if (isset($_POST["submit"])) {
        $s_subject = $_POST["subject"];
        $s_description = $_POST["description"];

        // Update announcement details in the database
        $sql_update = "UPDATE announcements SET subject = ?, description = ? WHERE announcement_id = ?";
        $stmt_update = mysqli_prepare($conn, $sql_update);
        mysqli_stmt_bind_param($stmt_update, "ssi", $s_subject, $s_description, $announcement_id);
        $result_update = mysqli_stmt_execute($stmt_update);

        if ($result_update) {
            // Refresh page or redirect after successful update
            echo "<script>alert('Announcement updated successfully!');";
            echo "window.location.href='edit_announcement.php?announcement_id=$announcement_id';</script>";
            exit;
        } else {
            echo "Failed to update record.";
        }
    }
} else {
    echo "Invalid announcement ID.";
    exit;
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
            <form method="POST">
                <div class="subject">
                    <label for="subject" style="display: block">Subject</label>
                    <input type="text" name="subject" value="<?php echo $info['subject']; ?>">
                </div>
                <div class="announcement-text">
                    <label for="description" style="display: block">Description</label>
                    <input type="text" name="description" value="<?php echo $info['description']; ?>">
                </div>
                <div class="announcement-buttons">
                    <button type="submit" class="save-button" name="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

<!-- Javascript -->
<script src="./assets/js/script.js"></script>

</body>
</html>
