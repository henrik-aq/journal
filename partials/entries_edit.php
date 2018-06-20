<?php
require_once 'database.php';
require_once 'session.php';

$today = date("Y-m-d H:i:s");

$statement = $db->prepare(
    "UPDATE entries
    SET title = :title, content = :content, createdAt = :createdAt
    WHERE entryID = :entryID"
);
$statement->execute([
    ":title" => $_POST["title"],
    ":content" => $_POST["content"],
    ":createdAt" => $today,
    ":entryID" => $_POST["entryID"]
]);

header("Location: ../entrypage.php");