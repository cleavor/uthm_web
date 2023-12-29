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
            <form action="" method="POST">
                <label for="user_id">User ID</label>
                <input type="text" name="user_id" required>

                <label for="name">Name</label>
                <input type="text" name="name" required>

                <label for="gender">Gender</label>
                <input type="radio" name="gender" class="radio1" value="Male">Male
                <input type="radio" name="gender" class="radio2" value="Female">Female
                                
                <label for="email">Email</label>
                <input type="email" name="email" required>
                        
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" required>
                    
                <label for="address">Address</label>
                <input type="text" name="address" required>

                <label for="position">Position</label>
                <input type="text" name="position" required>

                <label for="work_status">Work Status</label>
                <select name="work_status" class="select" required>
                    <option value="">--Select Status--</option>
                    <option value="Full-Time">Full-Time</option>
                    <option value="IPart-time">Part-Time</option>
                    <option value="Seasonal">Seasonal</option>
                    <option value="Inactive">Inactive</option>
                </select>
                        
                <div class="profile-buttons">
                    <button type="submit" class="save-button" name="submit">Save</button>
                </div>
            </form>
        </div>

        <?php 
            include("connect.php");

            if(isset($_POST["work_status"])){
                $user_id = $_POST["user_id"];
                $name = $_POST["name"];
                $gender = $_POST["gender"];
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
                $position = $_POST["position"];
                $work_status = $_POST["work_status"];

                $query = "INSERT INTO staff_records VALUES ('$user_id','$name','$gender','$email','$phone','$address','$position','$work_status')";
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
