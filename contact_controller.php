<?php
$title =$_POST['title'];
$email =$_POST['email'];
$textbody =$_POST['textbody'];
$dbc = new mysqli('localhost','root','','tellus');

$dbc -> select_db('test');
$sql= "INSERT INTO user(title,email,text)
VALUES('$title','$email','$textbody') ";
$result = $dbc -> query($sql);
$dbc-> close();
?>