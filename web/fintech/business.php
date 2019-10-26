<?php 
require_once("dbConnect.php");
$db = get_db();
$title = "Business Listing";
include_once "header.php";

    $type = $_GET["types"];
    $offering = $_GET["offerings"];

    echo $type . ' ' . $offering;

    echo '<div class="row">
        <!-- Displays the businesses that match
        the search -->
        <div class="col sm12">

        </div>
    </div>';

include_once "footer.php"; ?>