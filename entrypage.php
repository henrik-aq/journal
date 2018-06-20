<?php
// Wanted to try out echo here. That why its a little bit different from the rest
require_once 'partials/header.php';
require_once 'partials/session.php';

if ($_SESSION['loggedIn']){
echo 
'<div class="flex-container">
  <div>
    <form action="partials/post_entry.php" method="POST">
      <label for="title">Add an entry here</label>
      <input type="text" id="title" name="title" placeholder="Title" required>
      <textarea id="content" name="content" required></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>
</div>';

echo '<div class="flex-container">';
  require_once 'partials/entries.php';
echo '</div>';
} else {
  echo 'You are not logged in man!';
}

require_once 'partials/footer.php';
?>