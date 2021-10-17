<?php
  include_once 'connect.php';
$sql = "SELECT Leave_ID FROM request";
$result = $conn->query($sql);
echo "pls work\n";
// $result=$stmt->get_result();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["Leave_ID"];
    }
  } else {
    echo "0 results";
  }
?>