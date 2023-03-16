<?php

$servername = "localhost";
$username = "sadia50";
$dbpassword = "123*";
$dbname = "lab5";

 $textfield=$_POST['textfield'];

 $textarea=$_POST['textarea'];

 $checkbox=$_POST['checkbox'];

 $mcheckbox1=$_POST['mcheckbox1'] ?? null;

 $mcheckbox2=$_POST['mcheckbox2'] ?? null;

 $radio=$_POST['radio'];

 $listbox=$_POST['listbox'];

 $password=md5($_POST['password']);


$mysqli= new mysqli($servername,$username,$dbpassword,$dbname);


$mysqli->query("insert into `datatable` (`textfield`,`textarea`,`checkbox`,`mcheckbox1`,`mcheckbox2`,`radio`,`listbox`,`password`) 
values ('$textfield','$textarea','$checkbox','$mcheckbox1','$mcheckbox2','$radio','$listbox','$password');");

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
    <table>
        <tr><td>TextField :</td><td><?php echo $textfield ?></td></tr>
        <tr><td>TextArea :</td><td><?php echo $textarea ?></td></tr>
        <tr><td>CheckBox :</td><td><?php echo $checkbox ?></td></tr>
        <tr><td>Multiple Check Box :</td> <td><?php echo $mcheckbox1 ?></td> <td><?php echo $mcheckbox2 ?></td> </tr>
        <tr><td>Radio :</td><td><?php echo $radio ?></td></tr>
        <tr><td>ListBox :</td><td><?php echo $listbox ?></td></tr>
        <tr><td>Password :</td><td><?php echo $password ?></td></tr>
    </table>
</body>
</html>