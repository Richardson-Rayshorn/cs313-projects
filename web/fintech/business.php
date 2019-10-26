<?php 
session_start();
require_once("dbConnect.php");
$db = get_db();
$title = "Business Listing";
include_once "header.php";

    $type = $_GET["types"];
    $offering = $_GET["offerings"];

    $query = $db->prepare('SELECT types_name, offerings_name,
    company_name, company_description
    FROM ((((institute_types
    INNER JOIN types ON institute_types.types_id = types.id)
    INNER JOIN institutions ON institute_types.institutions_id = institutions.id)
    INNER JOIN institute_offerings ON institutions.id = institute_offerings.institutions_id)
    INNER JOIN offerings ON institute_offerings.offerings_id = offerings.id)');
    $query->execute();
    $business = $query->fetchAll(PDO::FETCH_ASSOC);


    echo '<div class="row">
        <!-- Displays the businesses that match
        the search -->';
        foreach ($business as $rows)
        {
            if ($type == $rows['types_name'] && 
                    $offering == $rows['offerings_name'])
            {
                echo '<div class="col sm12">
                    <h3>';
                    echo $rows['company_name'];
                    echo '</h3>
                    <p> <span> Description</span> <br/>';
                    echo $rows['company_description'];
                    echo '</p>
                    <p> <span> Business type</span> <br/>';
                    echo $rows['types_name'];
                    echo '</p>
                    <p> <span> Offerings</span> <br/>';
                    echo $rows['offerings_name'];
                    echo '</p>
                    <a class="btn" onClick="">Learn More</a>
                </div>';
            }
        }
    echo '</div>';

include_once "footer.php"; ?>