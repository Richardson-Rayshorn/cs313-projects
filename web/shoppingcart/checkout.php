<?php

echo '
    <h2>Checkout</h2>
    <p>Please fill in an address below to ship to!</p>
    <div class="row">
        <form name="checkout" id="checkout">
            <div class="row">
                <div class="input-field col s4">
                    <input id="first_name" type="text" class="validate" name="first_name">
                    <span id="fnameErr" class="error">* '; echo '</span>
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s4">
                    <input id="last_name" type="text" class="validate" name="last_name">
                    <span id="lnameErr" class="error">* '; echo '</span>
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s4">
                    <input id="email" type="email" class="validate" name="email">
                    <span id="emailErr" class="error">* '; echo '</span>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="city" type="text" class="validate" name="city">
                    <span id="cityErr" class="error">* '; echo '</span>
                    <label for="city">City</label>
                </div>
                <div class="input-field col s6">
                    <input id="country" type="text" class="validate" name="country">
                    <span id="countryErr" class="error">* '; echo '</span>
                    <label for="country">Country</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="address" type="text" class="validate" name="address">
                    <span id="addressErr" class="error">* '; echo '</span>
                    <label for="address">Address</label>
                </div>
                <div class="input-field col s6">
                    <input id="number" type="tel" class="validate pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}" name="number">
                    <span id="numberErr" class="error">*'; echo '</span>
                    <label for="number">Telephone Number</label>
                </div>
            </div>
            <a class="btn" name="submit" onclick="validateMyForm()">Finish</a>
        </form>
    </div>
';