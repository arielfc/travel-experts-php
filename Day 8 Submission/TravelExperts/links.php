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
    <title>Travel Experts</title>        
</head>
<body>
    <header>
        <img src="assets\images\logowhite.png">
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
    <style>
    table {
        text-align:center;
        margin:10px;
    }

    th {
        padding: 4px 6px;
    }
    </style>
    <div>
        
		<?php
            for ($i=1; $i <=6; $i++)
            {
                print("<table>");
                print("<tr><th>$i.</th><th><a href='testpage$i.php'>Test Page - $i</a></th></tr>");
		        print("</table>");
            }
		?>
				
    </div>
    <footer class="fixed-bottom">
        <p>&copy; 2019 Travel Experts<p>
    </footer>  
</body>
</html>