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
   <nav class="navbar navbar-inverse height: 60px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href='login.html' class="navbar-brand" style="font-size: 35px;" >Leave Management system</a>
                </div>
                 <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
            </div> 
        </nav>
<?php

    ini_set('display_errors', true);
    error_reporting(E_ALL ^ E_NOTICE);
  include_once 'connect.php';
  $sql = "SELECT * FROM request WHERE Status='pending';";
$result = $conn->query($sql);
echo "

    <div class='container' id='full'>
        <h1 style='color: aliceblue;'>Pending Requests</h1>
        <table class='table' style='color: aliceblue;'>
            <tr style='font-size: larger;'>
                <th  class='col'>Leave Id</th>
                <th  class='col'>Employee Id</th>
                <th class='col'>Start Date</th>
                <th class='col'>End Date</th>
                <th class='col'>Address</th>
                <th class='col'>Reason</th>
                <th class='col'>Approval</th>
            </tr>
            <form method='post' >
";
// $result=$stmt->get_result();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class='col'>".$row["Leave_ID"]."</td><td class='col'>".$row["Employee_ID"]."</td><td class='col'>".$row["Start_Date"]."</td>
        <td class='col'>".$row["End_Date"]."</td><td class='col'>".$row["Location"]."</td><td class='col'>".$row["Reason"]."</td>
        <td>
<button value='".$row['Leave_ID']."' id='approvebtn'>approve</button>
<button value='".$row['Leave_ID']."' id='rejectbtn'>reject</button>        
        </td>
        ";
    }
  } else {
    echo "0 results";
  }
  echo "</form></table>";

  $sql = "SELECT * FROM request ;";
$result = $conn->query($sql);
echo "

    <div class='container' id='full'>
        <h1 style='color: aliceblue;'>Pending Requests</h1>
        <table class='table' style='color: aliceblue;'>
            <tr style='font-size: larger;'>
                <th  class='col'>Leave Id</th>
                <th  class='col'>Employee Id</th>
                <th class='col'>Start Date</th>
                <th class='col'>End Date</th>
                <th class='col'>Address</th>
                <th class='col'>Reason</th>
            </tr>
            <form method='post' >
";
// $result=$stmt->get_result();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["Status"]!="pending")
        {
        echo "<tr><td class='col'>".$row["Leave_ID"]."</td><td class='col'>".$row["Employee_ID"]."</td><td class='col'>".$row["Start_Date"]."</td>
        <td class='col'>".$row["End_Date"]."</td><td class='col'>".$row["Location"]."</td><td class='col'>".$row["Reason"]."</td>
        ";
}
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
    <script>

        let approvebtn = document.getElementById("approvebtn");
 
// Adding event listener to button
approvebtn.addEventListener("click", () => {
 
    // Fetching Button value
    let btnValue = approvebtn.value;
 
    // jQuery Ajax Post Request
    $.post('approve_action.php', {
        btnValue: btnValue
    }, (response) => {
        // response from PHP back-end
        console.log(response);
    });
});



        let rejectbtn = document.getElementById("rejectbtn");
 
// Adding event listener to button
rejectbtn.addEventListener("click", () => {
 
    // Fetching Button value
    let btnValue =rejectbtn.value;
 
    // jQuery Ajax Post Request
    $.post('reject_action.php', {
        btnValue: btnValue
    }, (response) => {
        // response from PHP back-end
        console.log(response);
    });
});
    </script>
</body>
</html>
