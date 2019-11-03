<?php
session_start();
require("dbConnect.php");
$db = get_db();
$title = "Login";
include_once "header.php";
include_once "main.php";

echo '
        <h3>Signup</h3>
    <form method="POST" action="'; echo htmlspecialchars($_SERVER["PHP_SELF"]);
    echo '">
        <div class="row">
            <div class="input-field col s4">
                <input id="username" type="text" class="validate" name="username">
                <span id="usernameErr" class="error">*</span>
                <label for="username">Username</label>
            </div>
            <div class="input-field col s4">
                <input id="password" type="password" class="validate" name="password">
                <span id="passwordErr" class="error">*</span>
                <label for="password">Password</label>
            </div>
        </div>
        <input type="submit" class="btn" name="submit" value="Login">
    </form>
    
    <div> 
        <p>If you don\'t have an account you can <a href="./signup.php">Signup Here</a></p>
    </div>';
include_once "footer.php";