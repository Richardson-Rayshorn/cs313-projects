<?php
session_start();
require_once("dbConnect.php");
$db = get_db();

$title = "Business Listing";
include_once "header.php";
include_once "main.php";

echo $_GET['compId'];

$query = $db->prepare('SELECT company_name, company_description, 
    primary_contact_person, phone_number, company_address
    FROM institutions');
$query->execute();
$business = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($business as $rows)
{
    if($_GET['compId'] == $rows['company_name'])
    {
        echo '
        <!-- give more details on each business
        and a button that users can click to add the 
        business to their list of interest -->
        <div class="col sm12">
            <h5>';
            echo $rows['company_name'];
            echo '</h5>
            <p> <span class="bold"> Description</span> <br/>';
            echo $rows['company_description'];
            echo '</p>
            <p> <span class="bold"> Contact Person</span> <br/>';
            echo $rows['primary_contact_person'];
            echo '</p>
            <p> <span class="bold"> Number</span> <br/>';
            echo $rows['phone_number'];
            echo '</p>
            <p> <span class="bold"> Address</span> <br/>';
            echo $rows['company_address'];
            echo '</p>
        </div>';
    }
}

include_once "footer.php"; ?>