<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashbaord</title>
        <link rel="stylesheet" href="login.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    ini_set('display_errors', true);
    error_reporting(E_ALL ^ E_NOTICE);
  include_once 'php/connect.php';
    
        session_start();
        $id=$_SESSION['id']        
       
       
       ?>

    <div class="poora" style=" height: 100vh; background-image: url(../Leave_Management/img/purple.jpg);"  >
   <nav class="navbar navbar-inverse style=height: 60px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href='dashboard.html' class="navbar-brand" style="font-size: 35px;">Leave Management system</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div> 
        </nav>
<?php


    $stmt = $conn->prepare("SELECT * FROM request WHERE Employee_ID=?");
    $stmt->bind_param("i", $id);
$stmt->execute();
$result=$stmt->get_result();

echo "

    <div class='container' id='full'>
        <h1 style='color: aliceblue;'>Leave Details</h1>
        <table class='table' style='color: aliceblue;'>
            <tr style='font-size: larger;'>
                <th class='col'>Reason</th>
                <th class='col'>Start Date</th>
                <th class='col'>End Date</th>
                <th class='col'>Address</th>
            </tr>
            <form method='post' >
";
// $result=$stmt->get_result();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class='col'>".$row["Reason"]."</td><td class='col'>".$row["Start_Date"]."</td><td class='col'>".$row["End_Date"]."</td><td class='col'>".$row["Location"]."</td>
        ";
    }
  } else {
    echo "0 results";
  }
  echo "</form></table>"


?>        
            <!--<h1 style="text-align: left; padding-left: 20px; font-size: 28px;">Leave Title</h1>-->
            <!--<br>-->
            <!--<p style="text-align: left; padding-left: 20px;">-->
                <!--start date: <br>-->
                <!--end date: <br>-->
                <!--reason: <br><br>-->
                <!--address: <br>-->
            <!--</p>-->
    </div>
    <center>
    <button><a href="client.php">New Leave Request</a></button>
    </center>
</div>
</body>
</html>
