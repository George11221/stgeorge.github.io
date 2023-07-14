<?php
$name=$_POST["name"];
$dateofbirth=$_POST["dateofbirth"];
$phone=$_POST["phone"];
$priest=$_POST["priest"];
$address=$_POST["address"];
$grade=$_POST["grade"];
$school=$_POST["school"];


$connection= new mysqli("localhost","root","","church");
$stmt=$connection->prepare("update zkhh167 set name='$name' where id='id'");
$stmt->bind_param("ssissss",$name,$dateofbirth,$phone,$priest,$address,$grade,$school,);
header("Location: 1010dashboard.php");
$stmt->execute();

?>