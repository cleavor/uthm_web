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
  <?php include("sidebar.php"); ?>

  <!-- Content -->
  <div class="content-container">
    <p class="path_leave">DOCUMENTATION > <a href="leave_request.php">LEAVE REQUEST</a></p>

    <div class="search_container">
        <label for="user_id" class="leave_label1">User ID</label><br>
        <input type="text" name="user_id" placeholder="Enter User ID">
        <img src="./assets/img/search.png" class="search_icon1">

        <label for="date" class="leave_label2">Date</label><br>
        <input type="text" name="date" placeholder="XX/XX/XXXX">
        <img src="./assets/img/search.png" class="search_icon2">
    </div>

    <h1 class="title">Leave Requests</h1>

    <div class="leave_table">
        <table>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Date of Leave</th>
                <th>Reason</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>123</td>
                <td>Chai</td>
                <td>Manager</td>
                <td>21/12/2022</td>
                <td>Sick</td>
                <td class="leave_status">Approved</td>
            </tr>
        </table>
    </div>
  </div>
  
  <!-- Javascript -->
  <script src="./assets/js/script.js"></script>
</body>
</html>
