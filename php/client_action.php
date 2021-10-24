<?php
  include_once'connect.php';
  $startDate= $_GET['sd'];
  $endDate= $_GET['ed'];
  $reason= $_GET['rs'];
  $address= $_GET['ad'];
    $stmt = $conn->prepare("insert into request(Start_Date,End_Date,Location,Reason)values(?,?,?,?)");
    $stmt->bind_param("ssss", $startDate,$endDate,$address,$reason);
$stmt->execute();
  header("LOCATION:/Leave_Management/dashboard.html?request=successful");

$stmt->close();
 ?>
