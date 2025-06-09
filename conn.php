<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "INSERIR DEPOIS";


$conn = new mysqli($host, $username,$password,$datbase);

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
?>