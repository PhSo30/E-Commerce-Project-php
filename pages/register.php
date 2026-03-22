<?php
$username = $email = $password = $confirmPassword = "";
$usernameError = $emailError = $passwdError = $confirmPasswdError = "";
if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm-password'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm-password']);
    if (usernameExist($username)) {
        $usernameError = 'Username already exist!';
        $username = '';
    }
    if (emailExist($email)) {
        $emailError = 'Email already exist!';
        $email = '';
    }
    if ($password !== $confirmPassword) {
        $confirmPasswdError = 'Password does not match!';
    }
    if (empty($usernameError) && empty($emailError) && empty($passwdError) && empty($confirmPasswdError)) {
        if (registerUser($username, $email, $password)) {
            header('Location: ./?page=login');
            exit();
        } else {
            echo 'Something went wrong, try again later';
        }
    }
}

?>
<link rel="stylesheet" href="./pages/style/non-log-style.css">
<form class="register" method="post" action="./?page=register">
    <div class="wrapper">
        <h2>Register</h2>
        <div class="input-field">
            <input name="username" type="text" value="<?php echo $username; ?>" required>
            <label>Enter your username</label>
        </div>
        <div class="input-field">
            <input name="email" type="email" value="<?php echo $email; ?>" required>
            <label>Enter your email</label>
        </div>
        <div class="input-field">
            <input name="password" type="password" value="<?php echo $password; ?>" required>
            <label>Enter your password</label>
        </div>
        <div class="input-field">
            <input name="confirm-password" type="password" value="<?php echo $confirmPassword; ?>" required>
            <label>Re-enter your password</label>
        </div>
        <button type="submit">Register</button>
        <div class="login">
            <p>Already have an account? <a href="?page=login">Login</a></p>
        </div>
    </div>
</form>