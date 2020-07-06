<!--PHP Handler Script v.1
	Drew Taylor CST 126 6-28-20-->


<link rel = "stylesheet" href = "style.css" />
<br>
<br>
<br>
<?php

	$conn = mysqli_connect("localhost", "root", "root", "userdata");

	if(!$conn) {
		echo "Not Connected to Server";
	}

	$firstName = $_POST["firstname"];
	$lastName = $_POST["lastname"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if (empty($firstName)) {
	    echo "The first name is a required field and cannot be blank";
	} else if (empty($lastName)) {
	    echo "The last name is a required field and cannot be blank";
	} else if (empty($email)) {
	    echo "The email is a required field and cannot be blank";
	} else if (empty($username)) {
	    echo "The username is a required field and cannot be blank";
	} else if (empty($password)) {
	    echo "The password is a required field and cannot be blank";
	} else {
		$sql = "INSERT INTO users(firstName, lastName, email, username, password)
	    VALUES ('$firstName', '$lastName', '$email', '$username', '$password')";

    	mysqli_query($conn, $sql);
 	
 	   echo "Welcome, $firstName! <br>
 	   You Are Now Registered!"; 
	}
 	$conn->close();
 ?>