<?php
$name=$_POST["name"];
$dateofbirth=$_POST["dateofbirth"];
$sex=$_POST["sex"];
$phone=$_POST["phone"];
$priest=$_POST["priest"];
$address=$_POST["address"];
$grade=$_POST["grade"];
$school=$_POST["school"];
$notes=$_POST["notes"];

$connection= new mysqli("localhost","root","","church");
$stmt=$connection->prepare("insert into zkhh167(name,dateofbirth,sex,phone,priest,address,grade,school,notes)values(?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssisssss",$name,$dateofbirth,$sex,$phone,$priest,$address,$grade,$school,$notes);
header("Location: 1010dashboard.php");
$stmt->execute();

?>