<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'chursh';


$connection = new mysqli("localhost", "root","", "church");

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}
echo "connection successfuly";

$connection->close();
?>

