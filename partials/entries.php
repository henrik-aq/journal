<?php
require_once 'database.php';
require_once 'session.php';

$statement = $db->prepare(
    "SELECT * FROM entries
    WHERE userID = :userID
    ORDER BY createdAt DESC"
);
$statement->execute([
    ":userID" => $_SESSION["userID"]
]);


$allPosts = $statement->fetchAll();?>

<?php foreach ($allPosts as $post):?>
    <div>
        <h3><?= $post["title"] ?></h3>
        <p><small><?= $post["createdAt"] ?></small></p>
        <p><?= $post["content"] ?></p>
        <form action="partials/entries_edit.php" method="POST">
            <input type="hidden" name="entryID" value="<?= $post['entryID']?>">
            <input type="text" id="title" name="title" placeholder="Title" required>
            <textarea id="content" name="content" required></textarea>
            <input type="submit" value="Edit">
        </form>
        <form action="partials/entries_delete.php" method="POST">
            <input type="hidden" name="entryID" value="<?= $post['entryID']?>">
            <input type="submit" value="Delete">
        </form>
    </div>
<?php endforeach; ?>
