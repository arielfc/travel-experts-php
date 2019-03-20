<?php
if (count($_POST))
{
    $login = file('login.txt');
    $txtfile = array();
    foreach ($login as $line) {
        list($username, $password) = explode(',', $line);
        $txtfile[trim($username)] = trim($password);
    }

    // Parse form input
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Check input versus login.txt data
    if (array_key_exists($username, $txtfile) && $password == $txtfile[$username]) {
        echo "Username and Password is correct";
        header('Location: welcome.php');
    } else {
        echo "Invalid username and/or password";
    }
}

?>