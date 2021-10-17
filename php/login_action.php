<?php
  include_once 'connect.php';
//   $usernamecheck = mysqli_real_escape_string($conn,$_POST['uc']);
//   $passwordcheck = mysqli_real_escape_string($conn,$_POST['pc']);
$usernamecheck = $_POST['loginUsername'];
  $passwordcheck = $_POST['loginPassword'];

  if(empty($passwordcheck)||empty($usernamecheck))
  {
    header("Location:login.php?error=emptyfield");
    exit();
  }
else
{
    $stmt =  "SELECT Password FROM employee WHERE Name=$usernamecheck";
    $stmt = $conn->prepare("SELECT Password FROM employee WHERE Name=?");
    $stmt->bind_param("s", $usernamecheck);
echo"query works";
// $result = $conn->query($query);

$stmt->execute();
$result=$stmt->get_result();
echo "execute workd";

/* fetch object array */
while ($row = $result->fetch_row()) {

            $temp = password_verify($passwordcheck,$row[0]);
}
if($temp==True)
{

        session_start();
        $_SESSION['table'] = $usernamecheck;
        header("LOCATION:/Leave_Management/client.html?sucssess");
        
}


}

//   else
//   {
//     $sql = "SELECT * FROM user WHERE Name = ?;";
//     //create prepared statement
//     $stmt = mysqli_stmt_init($conn);
//     //prepare the prepared statemetnt'
//     //checking for failure first
//     echo"works till here";

//     if (!mysqli_stmt_prepare($stmt,$sql))
//     {
//       header("LOCATION:index.php?login=somethingwentwrong");
//       exit();
//     }
//     else
//     {
//       //bind parameter to placeholder
//       mysqli_stmt_bind_param($stmt, "s", $usernamecheck);
//       //run
//       mysqli_stmt_execute($stmt);
//       $result = mysqli_stmt_get_result($stmt);

//       while($row = mysqli_fetch_assoc($result))
//       {
//         $temp = password_verify($passwordcheck,$row['Password']);
//       }
//     }

//     if ($temp == true)
//      {
//         session_start();
//         $_SESSION['table'] = $usernamecheck;

// echo"Success";
//         / header("LOCATION:index.php?login=successful");
//         // exit();
//     }

//     else
//      {
//         header("LOCATION:login.php?error=wrongpassword");
//         exit();
//       }

//   }


 ?>
