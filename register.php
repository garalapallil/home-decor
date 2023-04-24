<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	$address = $_POST["address"];

	// Check if the user already exists in the file
	$users = file("userinfo.txt");
	foreach($users as $user) {
		$data = explode(",", $user);
		if($data[2] == $username) {
			echo "Registration is not successful, the user already exists!";
			exit;
		}
	}

	// If the user does not exist, add the user's information to the file
	$info = "$name,$email,$username,$password,$gender,$address\n";
	file_put_contents("userinfo.txt", $info, FILE_APPEND);

	echo "Registration is successful";
?>

