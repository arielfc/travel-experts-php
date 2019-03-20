<?php

// Check if it is a post request
if (isset($_POST['username'])){
	
	// Create empty dictionary
	$credentials = [];

	// Load the file content into an array
	$array = file('users.txt');

	// Loop through the array values
	foreach ($array as $value) {
		// Each value would have the following formate "username:password"
		// Split each value at ':' and assign the result into an array
		$userAndPassword = explode(':', $value);

		// Use the username as a key for the dictionary array and use the password as the value
		$credentials[$userAndPassword[0]] = trim($userAndPassword[1]);
	}

	// Collect the key from the post request
	$key = $_POST['username'];

	// Check if the password from the post request matches the dictionary value for the above key
	if($_POST['password'] == $credentials[$key]){
		echo 'good';
	} else {
		echo 'bad';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Abed Log</title>
</head>
<body>
	<form action="login_abed.php" method="POST">
		<input type="username" name="username">
		<input type="password" name="password">
		<input type="submit" name="">
	</form>
</body>
</html>