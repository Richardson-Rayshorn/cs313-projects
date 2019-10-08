<?php
$urlLink = "confirmation.php";

echo '<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="./styles/index.css">
      <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              
      <title>Personal Homepage</title>
    </head>
    <body>
  <header>
    <nav id="navbar">
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="./index.php">Product</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container">
    ';

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

echo '
    </div>
    <footer>
    <div class="container">
      <nav>
        <ul>
            <li><a href="./index.php">Product</a></li>
        </ul>
      </nav>
    </div>
    <script src="./scripts/products.js"></script>
    <script src="./scripts/materialcustom.js"></script>
  </footer>
</body>
</html>
    ';