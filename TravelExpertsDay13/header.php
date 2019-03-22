<?php
    include_once 'session.php';
?>
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
            <?php
                if (isset($_SESSION['username'])){
                    echo '<li><a href="logout_abed.php">Abed Logout</a></li>';
                } else {
                    echo '<li><a href="login_abed.php">Abed Login</a></li>';
                }
            ?>
            <!-- <li><a href="login_abed.php">Abed Login</a></li> -->
        </ul>
    </nav>
</header>