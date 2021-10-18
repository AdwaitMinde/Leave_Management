<?php
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

        session_start();
        $_SESSION['table'] = $usernamecheck;
        header("LOCATION:/Leave_Management/client.php?sucssess");
        
}


}
?>
