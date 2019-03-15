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
	<title>Register</title>
	
</head>
<body>
	<div class="container">
		<header>
			<img src="assets\images\logo.png">
			<nav id="container" class="center">
				<ul>
                			<li><a href="index.php">Home</a></li>
					<li><a href="links.php">Links</a></li>
                			<li><a href="destinations.php">Destinations</a></li>
                			<li><a href="contact.php">Contact</a></li>
                			<li><a href="register.php">Register</a></li>
                			<li><a href="about.php">About</a></li>
            			</ul>
			</nav>
		</header>

		<!-- Form -->
		<article class="centerDiv">
			<div class="jumbotron centerDiv">
				<h1 class="display-4">Registration</h1>
				<p class="lead">Send us a message and we will be in touch in less than 24hours.</p>
				<hr class="my-4">
				<form method="get" action="http://localhost/bouncer.php" onsubmit="confirmForm()">
					<div class="form-group">
						<label for="nameInput">Name</label>
						<input type="text" name="name" class="form-control" id="nameInput" placeholder="Type your name" required onfocus="toggleP('name')" onblur="toggleP('name')">
						<small class="hide form-text text-muted">Please enter your name</small>
					</div>
					<div class="form-group">
						<label for="emailInput">Email address</label>
						<input type="email" name="email" class="form-control" id="emailInput" placeholder="name@example.com" required onfocus="toggleP('email')" onblur="toggleP('email')">
						<small class="hide form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="telInput">Phone number</label>
						<input type="tel" name="phone" class="form-control" id="telInput" placeholder="(555) 555-555" onfocus="toggleP('phone')" onblur="toggleP('phone')" required>
						<small class="hide form-text text-muted">We'll never share your phone number with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="postalcode">Postal Code</label>
						<input type="text" name="postalcode" class="form-control" id="postalcode" placeholder="A4A 5A5" onfocus="toggleP('postalcode')" onblur="toggleP('postalcode')" required>
						<small class="hide form-text text-muted">Use Canadian postal code e.g. A4A 5A5</small>
					</div>
					<div class="form-group">
						<label for="textareaControl">Message</label>
						<textarea name="message" class="form-control" id="textareaControl" rows="5" required></textarea>
					</div>
					<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block">
				</form>     
			</div>
		</article>
	</div>

	<!-- Project related JavaScript -->
	<script type="text/javascript" src="assets\js\app.js"></script>
</body>
</html>