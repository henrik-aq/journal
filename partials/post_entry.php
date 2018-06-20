<?php
require_once 'database.php';
require_once 'session.php';

$today = date("Y-m-d H:i:s");

$statement = $db->prepare(
    "INSERT INTO entries (title, content, createdAt, userID)
    VALUES (:title, :content, :createdAt, :userID)");

$statement->execute([
    ":title" => $_POST["title"],
    ":content" => $_POST["content"],
    ":createdAt" => $today,
    ":userID" => $_SESSION["userID"]
]);

header('Location: ../entrypage.php');