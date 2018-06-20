<?php

require_once 'database.php';
require_once 'session.php';

$statement = $db->prepare(
    "DELETE FROM entries
    WHERE entryID = :entryID"
);
$statement->execute([
    ":entryID" => $_POST["entryID"]
]);


header("Location: ../entrypage.php");