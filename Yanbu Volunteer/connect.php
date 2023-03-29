<?php

	$user = $_POST['user'];
	$password = $_POST['password'];


	// Database connection
	$conn = new mysqli('localhost','root','mysql','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into volunteer(user, password) values(?, ?)");
		$stmt->bind_param("ss",$user, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>