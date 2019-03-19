<?php
    
    include 'functions.php';

    $AgtFirstName = $_POST['AgtFirstName'];
    $AgtMiddleInitial = $_POST['AgtMiddleInitial'];
    $AgtLastName = $_POST['AgtLastName'];
    $AgtBusPhone = $_POST['AgtBusPhone'];
    $AgtEmail = $_POST['AgtEmail'];
    $AgtPosition = $_POST['AgtPosition'];
    $AgencyId = $_POST['AgencyId'];

    $sql = "INSERT INTO agents (AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId)
    VALUES ('$AgtFirstName', '$AgtMiddleInitial', '$AgtLastName', '$AgtBusPhone', '$AgtEmail', '$AgtPosition', '$AgencyId')";

if ($connect->query($sql) === TRUE) {
        echo "New entry creation successful";
    } else {
        echo "Error creating new entry";
    }
    
 
?>
