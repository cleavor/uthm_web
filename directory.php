<?php
   include("connect.php");

   if(isset($_GET["user_id"])){
      $user_id = $_GET["user_id"];
      $delete = mysqli_query($conn,"DELETE FROM staff_records WHERE user_id = $user_id");
   }
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Staff Directory</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />
  
  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php include("sidebar.php"); ?>

  <!-- Content -->
  <div class="content-container">
    <div class="search_container">
         <form method="POST" action="">
            <div class="textbox-container">
               <label for="user_id" class="leave_label1">User ID</label>
               <input type="text" id="user_id" name="search_user_id" placeholder="Enter User ID">
         
               <button type="submit" class="btnsearch" name="searchButton">Search</button>
            </div>
         </form>
    </div><br>

    <div class="title-btn">
        <h1 class="title" style="margin-left:10px">Staff List</h1>
        <a href="add_staff.php" class="btnsearch2">+</a>
    </div>
    
         <div class="summary_table">
         <?php
               include("connect.php");

               // Check if search parameters are provided
               if (isset($_POST['search_user_id']) ) {
                  $search_user_id = $_POST['search_user_id'];
                  

                  // Build the SQL query based on provided search parameters
                  $sql = "SELECT * FROM staff_records WHERE 1";

                  if (!empty($search_user_id)) {
                     $sql .= " AND user_id = '$search_user_id'";
                  }
               } else {
                  // Fetch all data if no specific search parameters are provided
                  $sql = "SELECT * FROM staff_records";
               }

               $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                  // Output data of each row
                  echo "<table border='1'>";
                  echo "<thead>";
                  echo "<tr><th>User ID</th><th>Name</th><th>Gender</th><th>Email</th><th>Phone</th><th>Address</th><th>Position</th><th>Work Status</th></tr>";
                  echo "</thead>";
                  echo "<tbody>";
                  while ($row = $result->fetch_assoc()) {
                     echo "<tr><td>" . $row["user_id"];
                     echo "</td><td>" . $row["name"];
                     echo "</td><td>" . $row["gender"];
                     echo "</td><td>" . $row["email"];
                     echo "</td><td>" . $row["phone"];
                     echo "</td><td>". $row["address"];
                     echo "</td><td>" . $row["position"];
                     echo "</td><td>" . $row["work_status"];
                     echo "</td><td> 
                           <div class='btn-group'> 
                              <a href='edit_staff.php?user_id=$row[user_id] & name=$row[name] & gender=$row[gender] & email=$row[email] & 
                              phone=$row[phone] & address=$row[address] & position=$row[position]
                              & work_status=$row[work_status] ' class='btn1' value='Edit'>Edit</a>
                              <a href='directory.php?user_id=$row[user_id]' class='btn2' value='Delete'>Delete</a>
                           </div>";
                     echo "</td></tr>";
                  }
                  echo "</tbody>";
                  echo "</table>";
               } else {
                  

                  echo "No results found";
                  
               }

               $conn->close();
            ?>
         </div>
      
  <!-- Javascript -->
  <script src="js/script.js"></script>
</body>
</html>
