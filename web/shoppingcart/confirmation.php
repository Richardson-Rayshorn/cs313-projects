<?php
    $fnameErr = $lnameErr = $emailErr = $cityErr = $countryErr = $addressErr = $numberErr = "";
    $fname = $lname = $email = $city = $country = $address = $number = "";

    if (isset($_POST["submit"]))
    {
        if (empty($_POST["first_name"]) || empty($_POST["last_name"]))
        {
            header(“location: ./checkout.php”);
            $fnameErr = "Required";
        }
        else 
        {
            $fname = test_input($_POST["first_name"]);
        }

        if (empty($_POST["last_name"]))
        {
            $lnameErr = "Required";
        }
        else 
        {
            $lname = test_input($_POST["last_name"]);
        }

        if (empty($_POST["email"]))
        {
            $emailErr = "Required";
        }
        else 
        {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["city"]))
        {
            $cityErr = "Required";
        }
        else 
        {
            $city = test_input($_POST["city"]);
        }

        if (empty($_POST["country"]))
        {
            $countryErr = "Required";
        }
        else 
        {
            $country = test_input($_POST["country"]);
        }

        if (empty($_POST["address"]))
        {
            $addressErr = "Required";
        }
        else 
        {
            $address = test_input($_POST["address"]);
        }

        if (empty($_POST["number"]))
        {
            $numberErr = "Required";
        }
        else 
        {
            $number = test_input($_POST["number"]);
        }
    }

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
















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


    echo  'Calling the confirmation works' . $_POST[first_name];


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