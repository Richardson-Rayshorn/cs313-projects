<?php
session_start();
require_once("dbConnect.php");
$db = get_db();

include_once "header.php";

error_reporting(E_ALL);
ini_set("display_errors", 1);

    $first_name = $last_name = $email = $username = $password = "";
    $password_valid = $address = $number = $background = "";


    if(isset($_POST['submit']))
    {
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $password_valid = htmlspecialchars($_POST['password_valid']);
        $address = htmlspecialchars($_POST['address']);
        $number = htmlspecialchars($_POST['number']);
        $background = htmlspecialchars($_POST['background']);

        $user = $db->prepare('SELECT id, email, username FROM users');
        $user->execute();
        $user_check = $user->fetchAll(PDO::FETCH_ASSOC);

        foreach ($user_check as $rows)
        {
            if ($rows['email'] == $email || $rows['username'] == $username)
            {
                // $id = $rows['id'];
                $user_update = $db->prepare('UPDATE users SET first_name=:first_name, last_name=:last_name, email=:email,
                username=:username, user_password=:user_password, user_address=:user_address, background=:background,
                phone_number=:phone_number, roles=:roles');

                $user_update->bindValue(':first_name', $first_name, PDO::PARAM_STR);
                $user_update->bindValue(':last_name', $last_name, PDO::PARAM_STR);
                $user_update->bindValue(':email', $email, PDO::PARAM_STR);
                $user_update->bindValue(':username', $username, PDO::PARAM_STR);
                $user_update->bindValue(':user_password', $password, PDO::PARAM_STR);
                $user_update->bindValue(':user_address', $address, PDO::PARAM_STR);
                $user_update->bindValue(':background', $background, PDO::PARAM_STR);
                $user_update->bindValue(':phone_number', $number, PDO::PARAM_STR);
                $user_update->bindValue(':roles', "users", PDO::PARAM_STR);
                $user_update->execute();
            }
            else
            {
                echo "<span>User don't exist, <a href=\"./signup.php\">
                would you like to create user?</a></span>"    
            }
        }
    }

echo '<form method="POST" action="'; echo htmlspecialchars($_SERVER["PHP_SELF"]);
    echo '">
        <div class="row">
            <div class="input-field col s4">
                <input id="first_name" type="text" class="validate" name="first_name">
                <span id="fnameErr" class="error">*</span>
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s4">
                <input id="last_name" type="text" class="validate" name="last_name">
                <span id="lnameErr" class="error">*</span>
                <label for="last_name">Last Name</label>
            </div>
            <div class="input-field col s4">
                <input id="email" type="email" class="validate" name="email">
                <span id="emailErr" class="error">*</span>
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="username" type="text" class="validate" name="username">
                <span id="usernameErr" class="error">*</span>
                <label for="username">Username</label>
            </div>
            <div class="input-field col s6">
                <input id="password" type="password" class="validate" name="password">
                <span id="passwordErr" class="error">*</span>
                <label for="password">Password</label>
            </div>
            <div class="input-field col s6">
                <input id="password_valid" type="password" class="validate" name="password_valid">
                <span id="password_validErr" class="error">*</span>
                <label for="password_valid">Repeat Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="address" type="text" class="validate" name="address">
                <span id="addressErr" class="error">*</span>
                <label for="address">Address</label>
            </div>
            <div class="input-field col s6">
                <input id="number" type="tel" class="validate" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="number">
                <span id="numberErr" class="error">*</span>
                <label for="number">Telephone Number</label>
            </div>
            <div class="input-field col s6">
                <textarea name="background" id="background" cols="30" rows="10"></textarea>
                <span id="backgroundErr" class="error">*</span>
                <label for="background">Tell us about yourself</label>
            </div>
        </div>
        <input type="submit" class="btn" name="submit">
    </form>';

include_once "footer.php";
?>