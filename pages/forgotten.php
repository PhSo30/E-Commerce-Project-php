<?php


?>
<link rel="stylesheet" href="./pages/style/non-log-style.css">
<form class="forgotten">
    <div class="wrapper">
        <form action="./page=forgotten" method="post">
            <h2>Forgot Password</h2>
            <div class="input-field">
                <input type="text" required>
                <label>Enter your email</label>
            </div>
            <a href="" name="btnCode">send code</a>
            <div class="input-field">
                <input type="text" required>
                <label>Enter verification PIN</label>
            </div>
            <div class="input-field">
                <input type="password" required>
                <label>Enter your new password</label>
            </div>
            <p><a href="?page=register">Register</a> or <a href="?page=login">Login</a>
            </p>
            <button type="submit">Submit</button>
        </form>
    </div>
</form>