<?php
$ID=$_POST["ID"];
$name=$_POST["name"];
$connection=new mysqli("localhost","root","","church");
$stmt =$connection ->prepare("select * from zkhh167 where name=? or ID=?");
$stmt->bind_param("si",$name,$ID);
$stmt->execute();
$result =$stmt->get_result();
echo "<table border=1>";
while($row=$result->fetch_assoc()){
echo "<tr><td>".$row['ID']."</td><td>".$row['name']."</td><td>".$row['dateofbirth'].
"</td><td>".$row['sex']."</td><td>".$row['phone']."</td><td>".$row['priest']."</td><td>".
$row['address']."</td><td>".$row['grade']."<tr><td>".$row['school']."</td><td>"
.$row['notes']."</td><td>";
}
echo"</table>";
?>