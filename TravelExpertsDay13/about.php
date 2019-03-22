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
    <title>About</title>

</head>
<body class="center">
    <?php
        include 'header.php';
    ?>
    <h1>UNDER CONSTRUCTION</h1>
    <!-- action value for form -- action="http://localhost/bouncer.php" -->
    <form onsubmit="checker(postalcode.value)" class="needs-validation">
        <div class="center form-group">
            <label for="validationCustom01">Name</label>
            <input onblur="hide1.style.visibility='hidden'" onfocus="hide1.style.visibility='visible'" name="name" type="text" class="form-control" id="validationCustom01" placeholder="Name" required>
            <div>
                <p id="hide1">Please provide a valid name.</p>
            </div>
            </div>
            <div class="form-group">
            <label for="validationCustom02">Address</label>
            <input onblur="hide2.style.visibility='hidden'" onfocus="hide2.style.visibility='visible'" type="text" class="form-control" id="validationCustom02" placeholder="Address" required>
            <div>
                <p id="hide2">Please provide a valid address.</p>
            </div>
            </div>
            <div class="form-group">
            <label for="validationCustom03">City</label>
            <input onblur="hide3.style.visibility='hidden'" onfocus="hide3.style.visibility='visible'" type="text" class="form-control" id="validationCustom03" placeholder="City" required>
            <div>
                <p id="hide3">Please provide a valid city.</p>
            </div>
            </div>
            <div class="form-group">
            <label for="validationCustom04">Province</label>
            <input onblur="hide4.style.visibility='hidden'" onfocus="hide4.style.visibility='visible'" type="text" class="form-control" id="validationCustom04" placeholder="Province" required>
            <div>
                <p id="hide4">Please provide a valid province.</p>
            </div>
            </div>
            <div class="form-group">
            <label for="validationCustom05">Postal Code</label>
            <input name ="postalcode" onblur="hide5.style.visibility='hidden'" onfocus="hide5.style.visibility='visible'" type="text" class="form-control" id="validationCustom05" placeholder="Postal Code" required>
            <div>
                <p id="hide5">Please provide a valid postal code following this format A1A 1A1.</p>
            </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <script>
        function checker(postalcode)
        {
            regExp = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/;
            matched = regExp.test(postalcode);
            if (matched)
            {
                alert("valid postal code");
            }
            else
            {
                alert("invalid postal code");
            }
        }
    </script>  
</body>
</html>