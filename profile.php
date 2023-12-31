<?php
    session_start();

    if (!isset($_SESSION["email"])) {
        header("Location:index.php");
    }

    include ("connect.php");

    $email = $_SESSION["email"];
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_assoc($result);

    if (isset($_POST["submit"])) {
        $s_email = $_POST["email"];
        $s_name = $_POST["name"];
        $s_phone = $_POST["phone"];
        $s_pwd = $_POST["pwd"];
        
        $hashed_pwd = password_hash($s_pwd, PASSWORD_BCRYPT);

        $sql = "UPDATE admin SET email = '$s_email', name = '$s_name',
        phone = '$s_phone', pwd = '$hashed_pwd' WHERE email = '$email'";
        
        $result2 = mysqli_query($conn, $sql);
        if($result2) {
            echo "<script>alert('Record Updated.')</script>";
        }

        else {
            echo "Failed to update record.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <h1 class="title" style="margin-left:10px">Profile</h1>

        <div class="profile-background">
            <form action="" method="POST">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo "{$info['name']}"; ?>">
                                
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo "{$info['email']}"; ?>">
                        
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="<?php echo "{$info['phone']}"; ?>">
                    
                <label for="pwd">Password</label>
                <input type="password" name="pwd" value="<?php echo "{$info['pwd']}"; ?>">
                        
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
