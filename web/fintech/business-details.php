<?php
session_start();
require_once("dbConnect.php");
$db = get_db();

$title = "Business Listing";
include_once "header.php";

echo $_GET['compId'];
echo '
<!-- give more details on each business
and a button that users can click to add the 
business to their list of interest -->

<div >
    <h3>Company Name</h3>
    <p>Company desc</p>
    <p>contact person</p>
    <p>number</p>
    <p>address</p>
</div>';

include_once "footer.php"; ?>