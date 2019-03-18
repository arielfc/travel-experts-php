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
    <div class="maintext">
        <?php
            date_default_timezone_set('America/Edmonton');

            $date = date('H:i:s');
                
                if($date > '00:00:01' && $date <= '11:59:59'){
                    echo ('<h1 style="font-size:60px">Good Morning</h1>');
                } else if($date > '12:00:01' && $date <= '18:00:00'){
                    print ('<h1 style="font-size:60px">Good Afternoon</h1>');
                } else if($date > '18:00:01' && $date <= '23:59:59'){
                    print ('<h1 style="font-size:60px">Good Evening</h1>');
                }   
    
        ?>
        <!-- <h1 style="font-size:60px">Go Anywhere</h1> -->
        <button class="btn btn-dark"><a href="destinations.html";>Destinations</a></button>
    </div>
    <footer class="fixed-bottom">
    <?php
        include 'footer.php';
    ?>
    </footer>
</body>
</html>
