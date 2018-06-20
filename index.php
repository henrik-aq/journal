<?php
require_once 'partials/header.php';
require_once 'partials/session.php';
?>

<div class="flex-container">
    <div>
        <form id="login-form" action="partials/login.php" method="POST">
            <label for="login-form">Login</label>
            <input type="text" id="username-login" name="username" placeholder="Username" required>
            <input type="password" id="password-login" name="password" placeholder="Password" required>

            <input type="submit" value="Login">
        </form>
    </div>
</div>

<div class="flex-container">
    <div>
        <form id="register-form" action="partials/register.php" method="POST">
            <label for="register-form">Register</label>
            <input type="text" id="username-reg" name="username" placeholder="Username" required>
            <input type="password" id="password-reg" name="password" placeholder="Password" required>

            <input type="submit" value="Register">
        </form>
    </div>
</div>

<?php
require_once 'partials/footer.php';
?>