<?php

include 'connection.php';
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$rule=$_POST["rule"];

$connection=new mysqli("localhost","root","","church");



$stmt=$connection-> prepare("insert into regestration_table(username,email,password,cpassword,rule)values(?,?,?,?,?)");

$stmt->bind_param("ssiis",$username,$email,$password,$cpassword,$rule);
$stmt->execute();

header("location: login.php");
?>