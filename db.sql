CREATE TABLE report_card(
    name text(40),
    age text(3),
    gender text(10),
    phone int(10)
)

$sql= "INSERT INTO `covid-19`.`report_card` (`name`, `age`, `gender`, `phone`) 
        VALUES ('jay verma', '25', 'male', '1234567890');";
