
<?php
include_once 'session.php';

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
		$_SESSION['username'] = $key;
		echo 'good';
	} else {
		echo 'bad';
	}
}

?>

<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Required boostrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Project related css -->
    <link rel="stylesheet" type="text/css" href="assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\stylea.css">
    <title>Login</title>        
</head>
<body>
	<?php
        include 'header.php';
    ?>

	<article class="centerDiv">
			<div class="jumbotron centerDiv">
				<h1 class="display-4">Login</h1>
				<hr class="my-4">
				<form method="POST" action="login_abed.php">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg btn-block">
				</form>     
			</div>
		</article>
	</div>

	<footer class="fixed-bottom">
    <?php
        include 'footer.php';
    ?>
    </footer>
</body>
</html>