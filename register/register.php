<?php
include "../setting/setting.php";
header('Content-Type: text/html; charset=utf-8');

$Fname =$_POST['Fname'];
$Lname =$_POST['Lname'];
$phonenumber =$_POST['phonenumber'];
$email =$_POST['email'];
$password =$_POST['password'];
$DB=new mysqli($host, $user, $pass, $DBname);
mysqli_query($DB, "SET NAMES utf8");
$sql= "INSERT INTO user(Fname,Lname,phonenumber,email,password)
VALUES('$Fname','$Lname','$phonenumber','$email','$password') ";
$result = $DB -> query($sql);
$DB-> close();
?>
