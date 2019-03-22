<html>
    <head>
        <title>SQL Query Results</title>
    </head>
    <body>
        <table>
        <thead>
            <tr>
                <td>Agent ID</td>
                <td>Agent First Name</td>
                <td>Agent Middle Initial</td>
                <td>Agent Last Name</td>
                <td>Agent Phone</td>
                <td>Agent Email</td>
                <td>Agent Position</td>
                <td>Agency ID</td>
            </tr>
        </thead>
        <tbody>
        <?php
        include 'connect.php';
        
        $query = "SELECT * FROM agents";
            $result=mysqli_query($connect, $query);
            while ($row = mysqli_fetch_array($result)){     
        ?>
                <tr>
                    <td><?php echo $row['AgentId']?></td>
                    <td><?php echo $row['AgtFirstName']?></td>
                    <td><?php echo $row['AgtMiddleInitial']?></td>
                    <td><?php echo $row['AgtLastName']?></td>
                    <td><?php echo $row['AgtBusPhone']?></td>
                    <td><?php echo $row['AgtEmail']?></td>
                    <td><?php echo $row['AgtPosition']?></td>
                    <td><?php echo $row['AgencyId']?></td>
                </tr>
        <?php
        }
        ?>
        </tbody>
        </table>
    </body>
</html>
