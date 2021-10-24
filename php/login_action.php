<?php
ini_set('display_errors', true);
error_reporting(E_ALL ^ E_NOTICE);
  include_once 'connect.php';
//   $usernamecheck = mysqli_real_escape_string($conn,$_POST['uc']);
//   $passwordcheck = mysqli_real_escape_string($conn,$_POST['pc']);
$usernamecheck = $_POST['loginUsername'];
  $passwordcheck = $_POST['loginPassword'];

  if(empty($passwordcheck)||empty($usernamecheck))
  {
    header("Location:login.html?error=emptyfield");
    exit();
  }
else
{
    $stmt =  "SELECT Password FROM employee WHERE Name=$usernamecheck";
    $stmt = $conn->prepare("SELECT Password FROM employee WHERE Name=?");
    $stmt->bind_param("s", $usernamecheck);
// $result = $conn->query($query);

$stmt->execute();
$result=$stmt->get_result();

/* fetch object array */
while ($row = $result->fetch_row()) {

            $temp = password_verify($passwordcheck,$row[0]);
}
if($temp==True)
{

    $stmt = $conn->prepare("SELECT Employeee_ID FROM employee WHERE Name=?");
    $stmt->bind_param("s", $usernamecheck);
$stmt->execute();
$result=$stmt->get_result();

/* fetch object array */
while ($row = $result->fetch_row()) {

  $id=$row[0];
}
        session_start();
        $_SESSION['id'] = $id;
        header("LOCATION:/Leave_Management/dashboard.php?success");
        
}


}
?>
