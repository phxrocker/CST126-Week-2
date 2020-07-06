<link rel = "stylesheet" href = "style.css" />

<?php
    $conn = mysqli_connect("localhost", "root", "root", "userdata");

    if(!$conn) {
        echo "Not Connected to Server";
    }

    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT username, password FROM users WHERE username = '$username' and password = '$password'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows < 1) {
        echo "Login Failed";
    } else if ($result->num_rows > 1) {
        echo "There are multiple users that have registered";
    } else if ($result->num_rows == 1) {
        echo "Login Succesful";
    }
    
    $conn->close();
 ?>
    