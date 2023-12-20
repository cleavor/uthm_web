<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Menu</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <!-- Box Icons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php include ("sidebar.php")?>


  <div class ="content-container">

    

    <h4 class="title">Performance > Work Status</h4><br><br><br>
   
   
<div class="textbox-container">
<form method="POST" action="">
   <div class="textbox-container">
      <label for="username1">USER ID</label>
      <input type="text" id="username1" name="search_user_id" placeholder="(Input User ID)">
 

      <button type="submit" name="searchButton">Search</button>
   </div>
</form>
</div><br>



<h3 class="title">Work Status Summary</h3><br><br>
<div class="container">
<div class="box">
<?php
// Database connection settings
$servername = "localhost";
$dbname = "railway";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Check if search parameters are provided
if (isset($_POST['search_user_id']) ) {
   $search_user_id = $_POST['search_user_id'];
   

   // Build the SQL query based on provided search parameters
   $sql = "SELECT * FROM workstatus_records WHERE 1";

   if (!empty($search_user_id)) {
      $sql .= " AND user_id = '$search_user_id'";
   }

   
} else {
   // Fetch all data if no specific search parameters are provided
   $sql = "SELECT * FROM workstatus_records";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // Output data of each row
   echo "<table border='1'>";
   echo "<thead>";
   echo "<tr><th>USER ID</th><th>NAME</th><th>EMAIL</th><th>POSITION</th><th>WORK STATUS</th></tr>";
   echo "</thead>";
   echo "<tbody>";
   while ($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["position"].  "</td><td>". $row["work_status"] . "</td></tr>";
   }
   echo "</tbody>";
   echo "</table>";
} else {
   

   echo "No results found";
   
}

$conn->close();
?>

  <!-- Javascript -->
  <script src="./assets/js/script.js"></script>
</body>
</html>
