<?php
require_once 'database.php';
require_once 'session.php';

$statement = $db->prepare(
    "SELECT * FROM users 
    WHERE username = :username"
);
$statement->execute([
    "username" => $_POST["username"],
]);
$user = $statement->fetch();

if (password_verify($_POST["password"], $user["password"])) {

    $_SESSION["loggedIn"] = true;
    $_SESSION["username"] = $user["username"];
    $_SESSION["userID"] = $user["userID"];

    header('Location: ../entrypage.php');
} else {
    header('Location: ../index.php?message=Try again');
}