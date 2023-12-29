<?php
   include("connect.php");

   if(isset($_GET["announcement_id"])){
      $announcement_id = $_GET["announcement_id"];
      $delete = mysqli_query($conn,"DELETE FROM announcements WHERE announcement_id = $announcement_id");
   }
?>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Announcement</title>
   <!-- CSS -->
   <link rel="stylesheet" href="css/style.css" />
   <!-- Box Icons -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php
    include("sidebar.php");
    ?>

    <div class="content-container">

    <div class="search_container">
         <form method="POST" action="">
            <div class="textbox-container">
               <label for="announcement_id" class="leave_label1" style="margin-left:10px">Announcement ID</label>
               <input type="text" id="announcement_id" name="search_announcement_id" placeholder="Enter Announcement ID">
         
               <button type="submit" class="btnsearch" name="searchButton">Search</button>
            </div>
         </form>
    </div><br>

      <div class="title-btn">
        <h1 class="title" style="margin-left:10px">Announcement List</h1>
        <a href="add_announcement.php" class="btnsearch2">+</a>

      </div>
        <div class="announcement-box" style="background-color: #fff;padding: 20px;border-radius: 15px;box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);">
         <?php
         include("connect.php");

         // Check if search parameters are provided
         if (isset($_POST['search_announcement_id']) ) {
            $search_announcement_id = $_POST['search_announcement_id'];
            

            // Build the SQL query based on provided search parameters
            $sql = "SELECT * FROM announcements WHERE 1";

            if (!empty($search_announcement_id)) {
               $sql .= " AND announcement_id = '$search_announcement_id'";
            }
         } 
         
         else {
            // Fetch all data if no specific search parameters are provided
            $sql = "SELECT * FROM announcements";
         }

         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
            // Output data of each row
            echo "<table border='1'>";
            echo "<thead>";
            echo "<tr><th>Announcement ID</th><th>Subject</th><th>Description</th><th>Released Date</th><th>Action</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
               echo "<tr><td>" . $row["announcement_id"];
               echo "</td><td>" . $row["subject"];
               echo "</td><td>" . $row["description"];
               echo "</td><td>" . $row["date_of_release"];
               echo "</td><td> 
                     <div class='btn-group'> 
                        <a href='edit_announcement.php?announcement_id=$row[announcement_id]
                        & subject=$row[subject] & description=$row[description] 
                        & date_of_release=$row[date_of_release]' class='btn1' value='Edit'>Edit</a>
                        <a href='announcement.php?announcement_id=$row[announcement_id]' class='btn2' value='Delete'>Delete</a>
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
    </div>

<!-- Javascript -->
<script src="js/script.js"></script>
</body>

</html>
