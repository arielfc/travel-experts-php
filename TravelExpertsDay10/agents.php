<?php
    
    include 'functions.php';

    $sql = "INSERT INTO agents (AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId)
    VALUES ('Ariel', 'F', 'Contreras', '780-123-4567', 'ariel@gmail.com', 'Junior Agent', '1')";

    if ($connect->query($sql) === TRUE) {
        echo "New entry creation successful";
    } else {
        echo "Error creating new entry";
    }
 
?>
