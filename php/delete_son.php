<?php
$name=$_POST["name"];
$connection= new mysqli("localhost","root","","church");
$stmt=$connection-> prepare("delete from zkhh167 where name=?");

$stmt->bind_param("s",$name);
$stmt->execute();
header("Location:1010dashboard.php");

?>