<?php
    include ("connect.php");

    error_reporting(0);

    $user_id = $_GET["user_id"];
    $name = $_GET["name"];
    $gender = $_GET["gender"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $address = $_GET["address"];
    $position = $_GET["position"];
    $work_status = $_GET["work_status"];
?>

<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add New Staff</title>
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
        <h1 class="title" style="margin-left:10px">Add New Staff</h1>

        <div class="profile-background">
            <form action="" method="GET">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" value="<?php echo $user_id; ?>">

                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>">

                <label for="gender">Gender</label>
                <input type="text" name="gender" value="<?php echo $gender; ?>">
                                
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
                        
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="<?php echo $phone; ?>">
                    
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo $address; ?>">

                <label for="position">Position</label>
                <input type="text" name="position" value="<?php echo $position; ?>">

                <label for="work_status">Work Status</label>
                <input type="text" name="work_status" value="<?php echo $work_status; ?>">
                        
                <div class="profile-buttons">
                    <button type="submit" class="save-button" name="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

    <?php 
        if ($_GET["submit"]) {
            $user_id = $_GET["user_id"];
            $name = $_GET["name"];
            $gender = $_GET["gender"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
            $address = $_GET["address"];
            $position = $_GET["position"];
            $work_status = $_GET["work_status"];

            $sql = "UPDATE staff_records SET user_id = '$user_id', name = '$name',
            gender = '$gender', email = '$email',
            phone = '$phone', address = '$address',
            position = '$position', work_status = '$work_status',
            WHERE user_id = '$user_id'";

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