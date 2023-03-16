<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web development </title>
</head>
<body>
      
<?php
//  echo "Web development basic to advanced " ."in course php";
//  $web="Web-development";
//  echo "<h1 style='color:red'> web development basic to advanced</h1>";
// $str="web development";
// var_dump($str);
// $num="123";
// var_dump($num);
// ?>
<!-- <h2>integer type</h2> -->
<?php
// $int="123";
// var_dump($int);
?>
<!-- <h2> array type data</h2> -->
<?php
// $arr=array("shehrin","tanu","mim","fatu");
// var_dump($arr);
?>
<!-- // <h1>object type</h1> -->
<?php
// class subject{
//     public $data="I am a programmer";
// }
// $obj=new subject();
// var_dump($obj);
// echo "<br/>";
// echo $var =$obj->data;
// //or
// echo $obj->data;
// ?>
<!-- <h2> boolen type data	</h2> -->
<?php
// $bol=true;
// var_dump($bol);
?>
<!-- <h2>null type</h2> -->
<?php

?>
<!-- //////////////////////v-7-operator/////////////////////////// -->
<!-- php operotor -->
<!-- php arithmatic operator -->
<?php
// $a=10;
// $b="20";
// $c=40;
// $z=$a+$b;
// echo $z;
// echo "<br/>";
// echo $z=$a-$c;
// echo "<br/>";
// echo $b/$a;
// echo "<br/>";
// echo $z=$b%$a;

?>
<!-- php assignment operator -->
<?php
// $a = 40;
// $b = 30;
// $c ="10";
// echo "<br/>";
// echo $a+=$b;
// echo "<br/>";
// echo $a-=$b;
// echo "<br/>";
// echo $a*=$b;
// echo "<br/>";
?>
  <!-- ////////////////////////constant/////////////////////////// -->
  <!-- <h2>php constant</h2> -->
  <?php
// define("name","sadia elahi");
// echo name;
// echo "<br/>";
// const name_is="sadia";
// echo name_is;
  ?>
  <!-- ////////////////////////function//////////////// -->
  <!-- <h2>php function</h2> -->
<?php
// function userdata(){
//     echo "I am a web developer";

// }
// userdata();
// echo "<br/>";
// function mydata($username,$phn_number){
//     echo "my name is " .$username;
//     echo "<br/>";
//     echo "My phn number is " .$phn_number;
// }
// mydata("tanu","569488");
?>
<!-- ////////////////////////////if else condition/////////////////////// -->
<?php
// $var="sadia";
//   if(isset($_POST['submit'])){
//       $name=$_POST['name'];
//         if ($name==$var){
//           echo "Your information is true";
//         }
//         else{
//           echo "Your informstion is false";
//         }
//         }
?>

<!-- <h2>if statement and if else statement</h2>
<form class="" method="post">
  <input type="text" name="name" value="">
  <input type="submit" name="submit" value="submit">
      </form> -->


      <!-- //////////////////////switch///////////////// -->
      <?php
      // if(isset($_POST['submit'])){
      //   $game=$_POST['name'];
      //   switch($game){
      //     case "football";
      //     echo "my favourite game is football";
      //     break;
      //     case "cricket";
      //     echo "My favourite game is cricket";
      //     break;
      //     default:
      //     echo "Cricket and football are not my favourite game";
      // }
      // }     
      ?>

      <!-- <h2>Switch statement </h2>
      <form class="" method="post">
        <input type="text" name="name" value="">
        <input type="submit" name="submit" value="submit">
    </form> -->
<!-- 
///////////////////////////////////for loop////////////////////////// -->
<?php 
// $var="<h2>I am a php developer</h2>";
//         for($num=1;$num<=10;$num++){
//           echo $var. '<br/>';
//         }
// ?>
 <!-- /////////////////////////////////for each loop////////////////////// -->
 <!-- <h2>for each loop</h2> -->
 <?php
//  $arr=array('HTML','CSS','JS','php','bootstrap');
//  foreach($arr as $val){
//   echo "<br/>";
//   echo $val;
//  }
 ?>

<!-- 
////////////////////array////////////////////// -->
<!-- <h1>Array</h1> -->
<?php
// $arr=array('ty','daji','ujkd');
// echo $arr[0];
?>
<!-- /////////////////aso array////////////////
<h1>associative array</h1> -->
<?php
// $arr1=array('phone'=>'1469','email'=>'io@gmail.com','address'=>'green road');
// echo $arr1['phone'];
// echo "<br/>";
// echo $arr1['email'];
// echo "<br/>";
// echo $arr1['address'];

?>
<!-- //////////////////////include require//////////////
<h1>include,require,require_once</h1> -->
<?php
// $note=require_once('dex.php');
// echo "<br/>";
// include('dex.php');
?>
<!-- // ////////////////////////form ///////////////////// -->
<h1>file upload</h1>

<?php
// if(isset($_POST['submit'])){
//   $profile_pic = $_FILES['profilepic'];
//   echo"<pre>";
//   var_dump ($profile_pic);
// }
?>
<!-- <form method="post" enctype="multipart/form-data">
  <input type="file" name="profilepic[]" multiple >
  <input type="submit" name="submit" value="submit">
</form> -->
////////////////////////////form submit/////////////////////////
<h1>Form handling</h1>
<?php
include("connection.php");
if(isset($_POST['submit'])){
  $name=$_POST['name'];
   $school_name=$_POST['high_school'];
   $reg_num=$_POST['reg_number'];
   $hobby=$_POST['hoby'];
   $date=date("Y-m-d");

$error="";
$name_error="";
$school_error="";
$reg_error="";
$hobby_error="";
$date_error="";
}
if($name==""){
  $name_error="Please Enter your name";
  $error="ÿes";
}
if( $school_name==""){
  $school_error="Please Enter your school name";
  $error="ÿes";
}
if($reg_num==""){
  $reg_error="Please Enter your school number";
  $error="ÿes";
}
if( $hobby==""){
  $hobby_error="Please Enter your hobby";
  $error="ÿes";
}
if($date==""){
  $date_error="Please Enter your date time";
  $error="ÿes";
}






// vhul ...... $sql="insert into student_details('name','high_school','reg_num','hobby','date') into values('$name','$school_name','$reg_num','$hobby','$date')"; 

if ($error==''){
  $sql="INSERT INTO `student_details`(`name`, `high_school`, `reg_num`, `hobby`, `date`) VALUES ('$name',' $school_name','$reg_num','  $hobby','$date')";
  $sql_run=mysqli_query($con,$sql);
  if($sql_run==true){
   echo "data insert success";
  }else{
   echo "data insert failed";
  }
 }

?>
<form class="" method="post">
  <input type="text"placeholder="name" name="name" value=""><br/><span><?php $name_error ?></span><br/>
  <input type="text" placeholder="school name"name="high_school" value=""><br/><span><?php $school_error ?></span><br/>
  <input type="number"placeholder="reg number" name="reg_number" value=""><br/><span><?php  $reg_error?></span><br/>
  <input type="text"placeholder="hobby" name="hoby" value=""><br/><span><?php $hobby_error ?></span><br/>
  <input type="submit" name="submit" value="submit"><br/><span><?php ?></span><br/>
</form>

</body>
</html>