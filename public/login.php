<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/login.php';

?>

<?php view('header', ['title' => 'Login']) ?>

<form action="login.php" method="post"  class="login-forms">

<?php if (isset($errors['login'])) : ?>
    <div class="error">
        <?= $errors['login'] ?>
    </div>
<?php endif ?>

    <h1 class="forms-label">Login to order</h1>
    <div class="login-input">
        <label class="UN" for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= $inputs['inputs'] ?? '' ?>">
        <small><?= $errors['username'] ?? '' ?></small>
    </div>

    <div class="login-input">
        <label class="PASS" for="password">Password:</label>
        <input type="password" name="password" id="password">
    </div>
    <div class="check">
                <label class="label-showPass"><input class="input-checkbox" type="checkbox" name="" onclick="myFunction()" />Show
                    Password
                </label>
    </div>
    <small><?= $errors['password'] ?? '' ?></small>
    <section>
        <button class="form-button" type="submit">Login</button>
        <a class="label-account" href="register.php">Create an account</a>
    </section>
</form>
<script src="assets/script.js"></script>

<?php view('footer') ?>

