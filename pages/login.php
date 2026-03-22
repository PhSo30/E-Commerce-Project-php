<?php


?>
<link rel="stylesheet" href="./pages/style/non-log-style.css">
<form class="login">
  <div class="wrapper">
    <form action="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" required>
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
    </form>
  </div>
</form>

