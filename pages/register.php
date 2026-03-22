<?php


?>
<link rel="stylesheet" href="./pages/style/non-log-style.css">
<form class="register">
    <div class="wrapper">
        <form action="post">
            <h2>Register</h2>
            <div class="input-field">
                <input type="text" required>
                <label>Enter your username</label>
            </div>
            <div class="input-field">
                <input type="text" required>
                <label>Enter your email</label>
            </div>
            <div class="input-field">
                <input type="password" required>
                <label>Enter your password</label>
            </div>
            <div class="input-field">
                <input type="password" required>
                <label>Re-enter your password</label>
            </div>
            <button type="submit">Register</button>
            <div class="login">
                <p>Already have an account? <a href="?page=login">Login</a></p>
            </div>
        </form>
    </div>
</form>