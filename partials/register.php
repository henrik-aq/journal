<?php
require_once 'database.php';
header('Location: ../index.php?message=Registered');

$hashed = password_hash($_POST["password"], PASSWORD_DEFAULT);

$statement = $db->prepare(
    "INSERT INTO users 
    (username, password)
    VALUES (:username, :password)"
);
$statement->execute([
    ":username" => $_POST["username"],
    ":password" => $hashed
]);

