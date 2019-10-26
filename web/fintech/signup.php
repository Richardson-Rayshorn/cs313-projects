<?php 
require_once("dbConnect.php");
$db = get_db();

include_once "header.php";

    $user = $db->prepare();
    
    echo '<form action="">
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
                <input id="city" type="text" class="validate" name="city">
                <span id="cityErr" class="error">*</span>
                <label for="city">Username</label>
            </div>
            <div class="input-field col s6">
                <input id="country" type="password" class="validate" name="country">
                <span id="countryErr" class="error">*</span>
                <label for="country">Password</label>
            </div>
            <div class="input-field col s6">
                <input id="country" type="password" class="validate" name="country">
                <span id="countryErr" class="error">*</span>
                <label for="country">Repeat Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="address" type="text" class="validate" name="address">
                <span id="addressErr" class="error">*</span>
                <label for="address">Address</label>
            </div>
            <div class="input-field col s6">
                <input id="number" type="tel" class="validate" pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}" name="number">
                <span id="numberErr" class="error">*</span>
                <label for="number">Telephone Number</label>
            </div>
            <div class="input-field col s6">
                <textarea name="background" id="background" cols="30" rows="10"></textarea>
                <span id="addressErr" class="error">*</span>
                <label for="address">Tell us about yourself</label>
            </div>
        </div>
        <input type="submit" class="btn" name="submit">
    </form>';

include_once "footer.php";
?>