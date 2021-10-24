<?php
ini_set('display_errors', true);
error_reporting(E_ALL ^ E_NOTICE);
  include_once 'connect.php';
    // Checking, if post value is
    // set by user or not
    if(isset($_POST['btnValue']))
    {
        // Getting the value of button
        // in $btnValue variable
        $btnValue = $_POST['btnValue'];
        $btnValue = (integer)$btnValue;
    $stmt = $conn->prepare("update request set Status='approved' where Leave_ID=?");
    $stmt->bind_param("i", $btnValue);
$stmt->execute();
    }
?>