<?php
  include_once'connect.php';
  $username = $_POST['registerUsername'];
  $password = $_POST['registerPassword'];
  $repassword= $_POST['registerRePassword'];
  $email= $_POST['registerEmail'];
  $contact= $_POST['registerContact'];
  $address= $_POST['registerAddress'];

    //if any field is empty working fine dont worry about this
    // if(
    //     empty($username)||empty($address)
    //     ||empty($password)||empty($repassword)
    //     ||empty($email)
    //     ||empty($contact))
    // {
    //   echo "hopefully i am not here";
    //     header("LOCATION:login.html?error=emptyfield");
      
    //   exit();

    // }
    // //no erros execute normally
    // else
      //hashing the passwordcheck
      
      $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    //   $sql="insert into employee(Name, Phone, Address, Email, Password)values(?,?,?,?,?); ";
    //   $stmt = mysqli_stmt_init($conn);
    //   mysqli_query($conn,$sql);

    //   if (!mysqli_stmt_prepare($stmt,$sql))
    //   {
    //       echo "prepare staemetn error";
    //     header("LOCATION:login.html?login=somethingwentwrong");
    //     exit();
    //   }
    //   else
    //   {
    //       echo "success at this else statemetn\n ";
    //       echo $username,$contact,$address,$email,$hashedpassword;
    //     //bind parameter to placeholder
    //     mysqli_stmt_bind_param($stmt, "ss", $username,$contact,$address,$email,$hashedpassword);
    //     echo "\n bind parameters";
    //     //run
    //     mysqli_stmt_execute($stmt);
    //     echo"success \n";

    //   }

    //   if(mysqli_query($conn,$sql))
    //   {
    //     // header("LOCATION:login.php?registration=successful");
    //     echo"success \n";
    //   }
    //   else {
    //     header("LOCATION:registration.php?registration=table not made");
    //   }
    $stmt = $conn->prepare("insert into employee(Name, Phone, Address, Email, Password)values(?,?,?,?,?)");
    $stmt->bind_param("sisss", $username,$contact,$address,$email,$hashedpassword);
echo "bind workds";
$stmt->execute();
echo "table should accept";

$stmt->close();


 ?>
