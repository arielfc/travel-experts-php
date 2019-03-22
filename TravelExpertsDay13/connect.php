<?php
$connect = mysqli_connect('localhost', 'ariel', 'ariel123', 'travelexperts');
    if (!$connect) {
        die(mysql_error());
    }
?>