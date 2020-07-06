<?php

$conn = mysqli_connect("localhost", "root", "root", "userdata");

$sql = "SELECT  firstname, lastname FROM users";
    
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>


