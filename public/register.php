<?php
require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/register.php';
?>

<?php view('header', ['title' => 'Register']) ?>
<form action="register.php" method="post" class="login-forms">
    <h1 class="forms-label">CREATE AN ACCOUNT</h1>
    <div class="login-input">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>"
                class="<?= error_class($errors, 'username') ?>">
            <small><?= $errors['username'] ?? '' ?></small>
    </div>
    </div>

    <div class="login-input">
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
                class="<?= error_class($errors, 'email') ?>">
            <small><?= $errors['email'] ?? '' ?></small>
    </div>
    </div>

    <div class="login-input">
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?= $inputs['password'] ?? '' ?>"
                class="<?= error_class($errors, 'password') ?>">
            <small><?= $errors['password'] ?? '' ?></small>
    </div>
    </div>

    <div class="login-input">
    <div>
        <label for="password2">Password Again:</label>
        <input type="password" name="password2" id="password2" value="<?= $inputs['password2'] ?? '' ?>"
                class="<?= error_class($errors, 'password2') ?>">
            <small><?= $errors['password2'] ?? '' ?></small>
    </div>
    </div>
    
    <div>
        <label for="agree" class="label-agree">
            <div class="agree" title="term of services">    
                <input class="input-checkbox" type="checkbox" name="agree" id="agree" value="checked" <?= $inputs['agree'] ?? '' ?> /> I agree with the 
                    <span><a href="#" class="terms">term of services</a></span>
             </div>
        </label>
        <small><?= $errors['agree'] ?? '' ?></small>
    </div>

    <button class="form-button" type="submit">Register</button>
    
    <a href="login.php" class="label-account">Already have an account?</a>
</form>

<?php view('footer') ?>