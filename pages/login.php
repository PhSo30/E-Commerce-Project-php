<?php
$username = $password = "";
$usernameError = $passwdError = "";
if (isset($_POST['username'], $_POST['password'])) {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  if (!usernameOrEmailExist($username)) {
    $usernameError = 'No username or email match!';
    $username = '';
  }
  if (empty($usernameError) && empty($passwdError)) {
    $user = loginUser($username, $password);
    if ($user !== false) {
      $_SESSION['user_id'] = $user->id;
      header('Location: ./?page=dashboard');
    } else {
      $usernameError = 'Username or Password is incorrect';
    }
  }
}

?>
<link rel="stylesheet" href="./pages/style/non-log-style.css">
<form class="login"  method="post" action="./?page=login">
  <div class="wrapper">
      <h2>Login</h2>
      <p><?php echo $usernameError; echo $passwdError; ?></p>
      <div class="input-field">
        <input name="username" type="text" value="<?php echo $username; ?>" required>
        <label>Enter your email or username</label>
      </div>
      <div class="input-field">
        <input name="password" type="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="?page=forgotten">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="?page=register">Register</a></p>
      </div>
  </div>
</form>