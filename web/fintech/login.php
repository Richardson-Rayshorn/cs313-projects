<?php
session_start();
require("dbConnect.php");
$db = get_db();
$title = "Login";
include_once "header.php";
include_once "main.php";


include_once "footer.php";