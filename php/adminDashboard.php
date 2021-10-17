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
  include_once 'connect.php';
$sql = "SELECT * FROM request";
$result = $conn->query($sql);
echo "

    <div class='container' id='full'>
        <h1 style='color: aliceblue;'>Pending Requests</h1>
        <table class='table' style='color: aliceblue;'>
            <tr style='font-size: larger;'>
                <th  class='col'>Leave Id</th>
                <th class='col'>Reason</th>
                <th class='col'>Start Date</th>
                <th class='col'>End Date</th>
                <th class='col'>Address</th>
                <th class='col'>Status</th>
            </tr>
";
// $result=$stmt->get_result();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td class='col'>".$row["Leave_ID"]."</td><td class='col'>".$row["Employee_ID"]."</td><td class='col'>".$row["Start_Date"]."</td><td class='col'>".$row["End_Date"]."</td><td class='col'>".$row["Reason"]."</td>";
    }
  } else {
    echo "0 results";
  }
  echo "</table>"
?>
   
    <div class="container" id="full">
        <h1 style="color: aliceblue;">Pending Requests</h1>
        <table class="table" style="color: aliceblue;">
            <tr style="font-size: larger;">
                <th  class="col">Leave Id</th>
                <th class="col">Reason</th>
                <th class="col">Start Date</th>
                <th class="col">End Date</th>
                <th class="col">Address</th>
                <th class="col">Approval</th>
            </tr>
            <tr class="">
                <td class="col">asdflkalfk</td>
                <td class="col">adsfafd</td>
                <td class="col">sdfasdfa</td>
                <td class="col">adsfaf</td>
                <td class="col">asdfadfaf</td>
                <td class="col">
                    <button type="button" class="btn
                        btn-success">Approve</button>
                    <button type="button" class="btn btn-danger">Reject</button>
                </td>
            </tr>
            <tr class="">
                <td class="col">asdflkalfk</td>
                <td class="col">adsfafd</td>
                <td class="col">sdfasdfa</td>
                <td class="col">adsfaf</td>
                <td class="col">asdfadfaf</td>
                <td class="col">
                    <button type="button" class="btn
                        btn-success">Approve</button>
                    <button type="button" class="btn btn-danger">Reject</button>
                </td>

            </tr>
            <tr class="row">
                <td class="col"></td>
                <td class="col"></td>
                <td class="col"></td>
                <td class="col"></td>
                <td class="col"></td>
            </tr>
            </table>

            <h1 style="color: aliceblue;">Leave Details</h1>
        <table class="table" style="color: aliceblue;">
            <tr style="font-size: larger;">
                <th  class="col">Leave Id</th>
                <th class="col">Reason</th>
                <th class="col">Start Date</th>
                <th class="col">End Date</th>
                <th class="col">Address</th>
            </tr>
            <tr class="success">
                <td class="col">asdflkalfk</td>
                <td class="col">adsfafd</td>
                <td class="col">sdfasdfa</td>
                <td class="col">adsfaf</td>
                <td class="col">asdfadfaf</td>
            </tr>
            <tr class="warning">
                <td class="col">asdflkalfk</td>
                <td class="col">adsfafd</td>
                <td class="col">sdfasdfa</td>
                <td class="col">adsfaf</td>
                <td class="col">asdfadfaf</td>
            </tr>
            <tr class="row">
                <td class="col"></td>
                <td class="col"></td>
                <td class="col"></td>
                <td class="col"></td>
                <td class="col"></td>
            </tr>
        </table>

        
            <!--<h1 style="text-align: left; padding-left: 20px; font-size: 28px;">Leave Title</h1>-->
            <!--<br>-->
            <!--<p style="text-align: left; padding-left: 20px;">-->
                <!--start date: <br>-->
                <!--end date: <br>-->
                <!--reason: <br><br>-->
                <!--address: <br>-->
            <!--</p>-->
    </div>
</body>
</html>
