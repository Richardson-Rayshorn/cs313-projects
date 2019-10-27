<?php 
session_start();
require_once("dbConnect.php");
$db = get_db();

include_once "header.php";

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_valid = $_POST['password_valid'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $background = $_POST['background'];
    $check;

    $user = $db->prepare('SELECT email, username FROM users');
    $user->execute();
    $user_check = $user->fetchAll(PDO::FETCH_ASSOC);

    foreach ($user_check as $rows)
    {
        echo $rows['email'] . $row['username'];
        if ($rows['email'] == $email || $row['username'] == $username)
        {
            echo '<span id="">Username and Email exist!</span>';
        }
        else 
        {
            $sqlex = "INSERT INTO user (first_name, last_name, email,
            username, user_password, user_address, background,
            phone_number, roles) VALUES (" . $first_name . $last_name . 
            $email . $username . $password . $address . $background . $number .
            " user)";
            // $db->execute();
            echo $sqlex; 
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