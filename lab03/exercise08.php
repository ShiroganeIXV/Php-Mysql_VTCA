<?php
session_start();

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}
?>


<h2>Login Form</h2>
<?php if (isset($error)): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>
<form method="POST" action="index.php">
    <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <button type="submit" name="login">Login</button>
    </div>
</form>

