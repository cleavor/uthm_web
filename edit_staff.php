<?php
    include ("connect.php");

    if(isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        
        $sql = "SELECT * FROM staff_records WHERE user_id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $info = mysqli_fetch_assoc($result);

        if (!$info) {
            echo "Staff record not found.";
            exit; // Exit if staff record doesn't exist
        }

        if (isset($_POST["submit"])) {
            $s_name = $_POST["name"];
            $s_gender = $_POST["gender"];
            $s_email = $_POST["email"];
            $s_phone = $_POST["phone"];
            $s_address = $_POST["address"];
            $s_position = $_POST["position"];
            $s_work_status = $_POST["work_status"];

            $sql_update = "UPDATE staff_records SET name = ?, gender = ?, email = ?, phone = ?, address = ?, position = ?, work_status = ? WHERE user_id = ?";
            $stmt_update = mysqli_prepare($conn, $sql_update);
            mysqli_stmt_bind_param($stmt_update, "sssssssi", $s_name, $s_gender, $s_email, $s_phone, $s_address, $s_position, $s_work_status, $user_id);
            $result_update = mysqli_stmt_execute($stmt_update);

            if ($result_update) {
                // JavaScript alert and redirection
                echo '<script>alert("Update successful."); window.location = "directory.php";</script>';
                exit;
            } else {
                echo "Failed to update record.";
            }
        }
    } else {
        echo "Invalid user ID.";
        exit;
    }
?>

<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Staff</title>
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
        <h1 class="title" style="margin-left:10px">Edit Staff</h1>

        <div class="profile-background">
            <form action="" method="POST">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" value="<?php echo "{$info['user_id']}"; ?>">

                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo "{$info['name']}"; ?>">

                <label for="gender">Gender</label>
                <input type="text" name="gender" value="<?php echo "{$info['gender']}"; ?>">
                                
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
                        
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="<?php echo "{$info['phone']}"; ?>">
                    
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo "{$info['address']}"; ?>">

                <label for="position">Position</label>
                <input type="text" name="position" value="<?php echo "{$info['position']}"; ?>">

                <label for="work_status">Work Status</label>
                <input type="text" name="work_status" value="<?php echo "{$info['work_status']}"; ?>">
                        
                <div class="profile-buttons">
                    <button type="submit" class="save-button" name="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

<!-- Javascript -->
<script src="./assets/js/script.js"></script>
</body>
</html>
