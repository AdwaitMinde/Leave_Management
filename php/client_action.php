<?php

    ini_set('display_errors', true);
    error_reporting(E_ALL ^ E_NOTICE);
    
        session_start();
        $id= $_SESSION['id'];     
  include_once'connect.php';
  $startDate= $_GET['sd'];
  $endDate= $_GET['ed'];
  $reason= $_GET['rs'];
  $address= $_GET['ad'];
  $employee = $_SESSION['user'];
    $stmt = $conn->prepare("insert into request(Start_Date,End_Date,Location,Reason,Employee_ID)values(?,?,?,?,?)");
    $stmt->bind_param("ssssi", $startDate,$endDate,$address,$reason,$id);
$stmt->execute();
  header("LOCATION:/Leave_Management/dashboard.php?request=successful");

$stmt->close();
 ?>
