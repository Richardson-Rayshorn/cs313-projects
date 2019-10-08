<?php
$urlLink = $_SERVER["PHP_SELF"];

if (isset($_POST["submit"]))
{
    if (empty($_POST["first_name"]))
    {
        $fnameErr = "Required";
    }
    else if (empty($_POST["last_name"]))
    {
        $lnameErr = "Required";
    }
    else if (empty($_POST["email"]))
    {
        $emailErr = "Required";
    }
    else if (empty($_POST["city"]))
    {
        $cityErr = "Required";
    }
    else if (empty($_POST["country"]))
    {
        $countryErr = "Required";
    }
    else if (empty($_POST["address"]))
    {
        $addressErr = "Required";
    }
    else if (empty($_POST["number"]))
    {
        $numberErr = "Required";
    }
    // else 
    // {
    //     $number = test_input($_POST["number"]);
    // }
}
echo '
    <h2>Checkout</h2>
    <p>Please fill in an address below to ship to!</p>
    <div class="row">
        <form method="post" action="'; echo htmlspecialchars($urlLink); echo'" class="col s12">
            <div class="row">
                <div class="input-field col s4">
                    <input id="first_name" type="text" class="validate" name="first_name">
                    <span class="error">* '; echo $fnameErr; echo '</span>
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s4">
                    <input id="last_name" type="text" class="validate" name="last_name">
                    <span class="error">* '; echo $lnameErr; echo '</span>
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s4">
                    <input id="email" type="email" class="validate" name="email">
                    <span class="error">* '; echo $emailErr; echo '</span>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="city" type="text" class="validate" name="city">
                    <span class="error">* '; echo $cityErr; echo '</span>
                    <label for="city">City</label>
                </div>
                <div class="input-field col s6">
                    <input id="country" type="text" class="validate" name="country">
                    <span class="error">* '; echo $countryErr; echo '</span>
                    <label for="country">Country</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="address" type="text" class="validate" name="address">
                    <span class="error">* '; echo $addressErr; echo '</span>
                    <label for="address">Address</label>
                </div>
                <div class="input-field col s6">
                    <input id="number" type="tel" class="validate pattern="[0-9]{3}-[0-9]{2}-[0-9]{4}" name="number">
                    <span class="error">*'; echo $numberErr; echo '</span>
                    <label for="number">Telephone Number</label>
                </div>
            </div>
            <input type="submit" name="submit">
        </form>
    </div>
';