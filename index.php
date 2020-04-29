<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>COVID-19 reportcard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>COVID-19 REPORT CARD</h1>
    <h3>Enter the affected person details</h3>
    <form action="index.php" method="POST">
        <input type="text" name="name" id="name" placeholder="enter your name">
        <br>
        <input type="text" name="age" id="age" placeholder="enter your age">
        <br>
        <input type="text" name="gender" id="gender" placeholder="enter your gender">
        <br>
        <input type="phone" name="phone" id="phone" placeholder="enter your mobile number">
        <br>
        <button class="btm">record</button>
    </form>
</div>
</body>
</html>
<!--INSERT INTO `report_card` (`name`, `age`, `gender`, `phone`) VALUES ('john bond', '55', 'male', '1234567890');-->
<?php
if(isset($_POST['name']))
{
  $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con)
    {
        die("connection to the database failed!");
    }
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $sql= "INSERT INTO `covid-19`.`report_card` (`name`, `age`, `gender`, `phone`) VALUES ('$name', '$age', '$gender', '$phone');";
    //echo $sql;
    $count =0;
    if($con->query($sql)== true)
    {
        echo "person details recorded successfully!";
        // <br>
        $count = $count + 1;
    }
    else
    {
        echo "ERROR: $sql <br> $con->error";
    }
    if($count == 1)
    {
        echo '<form method="post"> <button name="test">test</button></form>';
        if(isset($_POST["test"]))
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

    }
    
    
}    

?>

