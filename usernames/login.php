<!doctype html>
<html lang="en">
<body>
    <style>
        form {
            max-width:350px;
        }
    </style>
    <form method="POST" action="verify.php">
        <div>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" value="Login" name="submitbutton" id="submitbutton">Submit</button>
    </form>
    
</body>
</html>

