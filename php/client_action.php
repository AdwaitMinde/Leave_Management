<?php
  include_once'connect.php';
  $startDate= $_GET['sd'];
  $endDate= $_GET['ed'];
  $reason= $_GET['rs'];
  $address= $_GET['ad'];
  $id=$_SESSION['id']
    $stmt = $conn->prepare("insert into request(Start_Date,End_Date,Location,Reason,Employee_ID)values(?,?,?,?,?)");
    $stmt->bind_param("ssss", $startDate,$endDate,$address,$reason,$id);
$stmt->execute();
// header("LOCATION:/Leave_Management/client.html?request=successful");

$stmt->close();
 ?>
