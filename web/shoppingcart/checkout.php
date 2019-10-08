<?php

echo '
    <h2>Checkout</h2>
    <p>Please fill in your address below</p>
    <div class="row">
        <form method="post" action="confirmation.php" class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="city" type="text" class="validate">
                    <label for="city">City</label>
                </div>
                <div class="input-field col s6">
                    <input id="country" type="text" class="validate">
                    <label for="country">Country</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="address" type="text" class="validate">
                    <label for="address">Address</label>
                </div>
                <div class="input-field col s6">
                    <input id="number" type="tel" class="validate pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}">
                    <label for="number">Telephone Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>
            </div>
        </form>
    </div>
'