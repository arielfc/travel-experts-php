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
    <?php
        include 'header.php';
    ?>
    <style>
    table {
        text-align:center;
        margin:10px;
    }

    th {
        padding: 8px 10px;
        
    }
    th a {
        color:white;
        font-size:20px;
    }
    
    </style>
    <div>
        
		<?php

            include 'travelarray.php';
    
            foreach ($travel as $key => $value) {
                echo("<table>");
                echo("<tr><th><a href=$key>$value</a></th></tr>");
		        echo("</table>");
            }

        //     for ($i=1; $i <=$travel; $i++)
        //     {
        //         print("<table>");
        //         print("<tr><th>$travel(0,1)</th><th><a href='testpage$i.php'>Test Page - $i</a></th></tr>");
		//         print("</table>");
        //     }
        // 
        ?>

    <!-- for (var i=0; i < descriptionArray.length; i++){
        document.write("<tr>");
        document.write("<td>" + descriptionArray[i] + "</td>" + "<td><img src=\"" + imageArray[i] + "\" /></td>" + "<td><p onclick='urlLoop(" + i + ")'>Click!</p></td>");
        document.write("</tr>");
    } -->
				
    </div>
    <footer class="fixed-bottom">
    <?php
        include 'footer.php';
    ?>
    </footer>
</body>
</html>