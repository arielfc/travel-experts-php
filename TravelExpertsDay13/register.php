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
		<?php
			include 'header.php';
		?>
		<!-- Form -->
		<article class="centerDiv">
			<div class="jumbotron centerDiv">
				<h1 class="display-4">Agent Registration</h1>
				<hr class="my-4">
				<form method="POST" action="agents.php" onsubmit="confirmForm()">
					<div class="form-group">
						<label for="AgtFirstName">First Name</label>
						<input type="text" name="AgtFirstName" class="form-control" placeholder="Type your name" required onfocus="toggleP('name')" onblur="toggleP('name')">
						<small class="hide form-text text-muted">Please enter your first name</small>
					</div>
					<div class="form-group">
						<label for="AgtMiddleInitial">Middle Initial</label>
						<input type="text" name="AgtMiddleInitial" class="form-control" placeholder="Type your middle name initial" required onfocus="toggleP('email')" onblur="toggleP('email')">
						<small class="hide form-text text-muted">Please enter your middle name initial</small>
					</div>
					<div class="form-group">
						<label for="AgtLastName">Last Name</label>
						<input type="text" name="AgtLastName" class="form-control" placeholder="Type your last name" onfocus="toggleP('phone')" onblur="toggleP('phone')" required>
						<small class="hide form-text text-muted">Please enter your last name</small>
					</div>
					<div class="form-group">
						<label for="AgtBusPhone">Phone Number</label>
						<input type="tel" name="AgtBusPhone" class="form-control" placeholder="(555)555-555" onfocus="toggleP('postalcode')" onblur="toggleP('postalcode')" required>
						<small class="hide form-text text-muted">Please enter your phone number</small>
					</div>
					<div class="form-group">
						<label for="AgtEmail">Email Address</label>
						<input type="email" name="AgtEmail" class="form-control" placeholder="example@gmail.com" onfocus="toggleP('postalcode')" onblur="toggleP('postalcode')" required>
						<small class="hide form-text text-muted">Please enter your email address</small>
					</div>
					<div class="form-group">
						<label for="AgtPosition">Agent Position</label>
						<input type="text" name="AgtPosition" class="form-control" placeholder="Senior / Junior Agent" onfocus="toggleP('postalcode')" onblur="toggleP('postalcode')" required>
						<small class="hide form-text text-muted">Please enter your agent status</small>
					</div>
					<div class="form-group">
						<label for="AgencyId">Agency ID Number</label>
						<input type="text" name="AgencyId" pattern="[1-2]" class="form-control" placeholder="Agency ID number 1 or 2" onfocus="toggleP('postalcode')" onblur="toggleP('postalcode')" required>
						<small class="hide form-text text-muted">Please enter your agency ID number between 1-2</small>
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