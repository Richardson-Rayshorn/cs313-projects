<?php 
session_start();
$title = "Home";
include_once "header.php"; 
    echo '<main>
        <section class="jumbotron">
            <section class="container">
                <h2>FUND YOUR FUTURE.</h2>
                <p>Find the right financial aid for your needs.</p>
                <a class="btn" href="./search.php">Show me how!</a>
            </section>
        </section>
    </main>';

include_once "footer.php"; ?>