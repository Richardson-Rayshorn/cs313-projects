<?php
    session_start();

    $count_session = count($_SESSION["cart"]);

    echo '
    <h2>Thank you for ordering with us</h2>
    <p> Below are the products you have order and your confirmed address<p>
    ';

    echo  $_POST["fname"] . " " . $_POST["lname"] . "<br>";
    echo $_POST["email"] . " " . $_POST["number"] . "<br>";
    echo $_POST["address"] . " " . $_POST["city"] . "<br>";
    echo $_POST["country"] . "<br>";

    echo '
        <div class="row">
            <div class="col s12 m12 l12">
                <table>
                    <tr>
                        <td><h4>Product Name</h4></td>
                        <td><h4>Price</h4></td>
                        <td><h4>Quantity</h4></td>
                    </tr>
                    ';
                    for ($i = 0; $i < $count_session; $i++)
                    {
                                    echo '<tr>';
                        foreach ($_SESSION["cart"][$i] as $key => $value)
                        {
                                    echo '<td>';
                                    echo $value;
                                    echo '</td>';
                        }
                                    echo '</tr>';
                    }

                    echo '
                                    </table>
                                </div>
                            </div>';