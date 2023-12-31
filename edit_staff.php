<?php
    include ("connect.php");

    error_reporting(0);

    $sql = "SELECT * FROM staff_records";
    $result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_assoc($result);

    if (isset($_POST["submit"])) {
        $s_user_id = $_POST["user_id"];
        $s_name = $_POST["name"];
        $s_gender = $_POST["gender"];
        $s_email = $_POST["email"];
        $s_phone = $_POST["phone"];
        $s_address = $_POST["address"];
        $s_position = $_POST["position"];
        $s_work_status = $_POST["work_status"];

        $sql = "UPDATE staff_records SET user_id = '$s_user_id', name = '$s_name',
        gender = '$s_gender', email = '$s_email',
        phone = '$s_phone', address = '$s_address',
        position = '$s_position', work_status = '$s_work_status',
        WHERE user_id = '$s_user_id'";

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
                <input type="text" name="user_id" value="<?php echo "{$_POST['user_id']}"; ?>">

                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo "{$_POST['name']}"; ?>">

                <label for="gender">Gender</label>
                <input type="text" name="gender" value="<?php echo "{$_POST['gender']}"; ?>">
                                
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo "{$_POST['email']}"; ?>">
                        
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="<?php echo "{$_POST['phone']}"; ?>">
                    
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo "{$_POST['address']}"; ?>">

                <label for="position">Position</label>
                <input type="text" name="position" value="<?php echo "{$_POST['position']}"; ?>">

                <label for="work_status">Work Status</label>
                <input type="text" name="work_status" value="<?php echo "{$_POST['work_status']}"; ?>">
                        
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
