<?php

$servername = "localhost";
$username = "admin1";
$dbpassword = "root123";
$dbname = "lab6";

function convert($mark){

    if($mark>=80) return 4.0;
    if($mark>=75) return 3.75;
    if($mark>=70) return 3.50;
    if($mark>=65) return 3.25;
    if($mark>=60) return 3.0;
    if($mark>=55) return 2.75;
    if($mark>=50) return 2.50;
    if($mark>=45) return 2.25;
    if($mark>=40) return 2.0;
    if($mark<40) return 0.0;

}


$name=$_POST['name'];

$roll=$_POST['roll'];

$semester=$_POST['semester'];

$subject1=convert($_POST['subject1']);

$subject2=convert($_POST['subject2']);

$cgpa=($subject1+$subject2) / 2;


$mysqli= new mysqli($servername,$username,$dbpassword,$dbname);


$mysqli->query("insert into `lab6` (`name`,`roll`,`semester`,`subject1`,`subject2`) 
values ('$name','$roll','$semester','$subject1','$subject2');");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <h3>Result</h3>
    <table>
        <tr><td>Name :</td><td><?php echo $name ?></td></tr>
        <tr><td>Roll :</td><td><?php echo $roll ?></td></tr>
        <tr><td>Semester :</td><td><?php echo $semester ?></td></tr>
        <tr><td>Subject 1 :</td><td><?php echo $subject1 ?></td></tr>
        <tr><td>Subject 2 :</td><td><?php echo $subject2 ?></td></tr>
        <tr><td>CGPA :</td><td><?php echo $cgpa ?></td></tr>
    </table>
</body>
</html>