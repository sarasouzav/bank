<?php 
/*
require_once "conn.php";
*/

if($_SERVER["REQUEST_METHOD"] === "POST") {

    $firstname = $_POST["firstname"] ?? " ";
    $lastname = $_POST["lastname"] ?? " ";
    $cpf = $_POST["cpf"] ?? " ";
    $email = $_POST["email"] ?? " ";
    $userType = $_POST["user_type"] ?? " ";
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT) ?? " ";


}


echo $firstname;
/*
$sql = "INSERT INTO users (firstname, lastname, cpf, email, user_type, password) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("ssnsss", $firstname, $lastname, $cpf, $email, $userType, $password);

if ($stmt->execute()) {
    echo "User successfully registered!";
} else {
    echo "Error during registration: ".$stmt->error;
}

$stmt->close();
} else {
    echo "Error preparing statement: ".$conn->error;
}
*/



?>

