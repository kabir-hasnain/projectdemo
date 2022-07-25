<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$number = $_POST['number'];
	$department = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, confirmpassword, number, department) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssis", $firstName, $lastName, $gender, $email, $password, $confirmpassword, $number, $department);
		$execval = $stmt->execute();
		echo $execval;
		echo "The form has been submitted";
		$stmt->close();
		$conn->close();
	}
?>