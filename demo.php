<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>

<?php
    if(isset($_POST["submit"]))
    {
        $server = "localhost";
        $username = "root";
        $password = "";
    
        $con = mysqli_connect($server,$username,$password);
        
        $sql = "SELECT * FROM `covid-19`.`report_card`;";
        $result = mysqli_query($con, $sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
            echo $row['name'];
            echo "<br>";
        }
    }
?>

</body>
</html>
