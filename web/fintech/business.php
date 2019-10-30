<?php 
session_start();
require_once("dbConnect.php");
$db = get_db();

$title = "Business Listing";
include_once "header.php";
include_once "main.php";

    $type = $_GET["types"];
    $offering = $_GET["offerings"];
    $business_name = $_GET["biz"];
    
    $query = $db->prepare('SELECT institutions.id, types_name, offerings_name,
    company_name, company_description
    FROM ((((institute_types
    INNER JOIN types ON institute_types.types_id = types.id)
    INNER JOIN institutions ON institute_types.institutions_id = institutions.id)
    INNER JOIN institute_offerings ON institutions.id = institute_offerings.institutions_id)
    INNER JOIN offerings ON institute_offerings.offerings_id = offerings.id)');
    $query->execute();
    $business = $query->fetchAll(PDO::FETCH_ASSOC);
    $links = htmlspecialchars("./business-details.php");

    echo '<div class="row">
        <!-- Displays the businesses that match
        the search -->
        <a id="back" href="./search.php">Return to Search</a>
        <h2>Search Results</h2>';
        foreach ($business as $rows)
        {
            echo $rows['institutions.id'];
            if ($business_name == $rows['company_name'])
            {
                echo '<div class="col sm12 m6 l6">
                    <form method="GET" action"';
                        echo $links; echo'">
                        <input type="hidden" value="'; 
                        echo $rows['institutions.id'];
                        echo '" name="compId"/>
                        <h5>';
                        echo $rows['company_name'];
                        echo '</h5>
                        <p> <span> Description</span> <br/>';
                        echo $rows['company_description'];
                        echo '</p>
                        <p> <span> Business type</span> <br/>';
                        echo $rows['types_name'];
                        echo '</p>
                        <p> <span> Offerings</span> <br/>';
                        echo $rows['offerings_name'];
                        echo '</p>
                        <input class="btn" type="submit" value="Learn More">
                    </form>
                </div>';
            }
            elseif ($type == $rows['types_name'] && 
                    $offering == $rows['offerings_name']
                    )
            {
                echo '<div class="col sm12 m6 l6">
                    <form method="GET" action"/business-details.php">
                        <input type="hidden" value="'; 
                        echo $rows['company_name'];
                        echo '" name="compId"/>
                        <h5>';
                        echo $rows['company_name'];
                        echo '</h5>
                        <p> <span> Description</span> <br/>';
                        echo $rows['company_description'];
                        echo '</p>
                        <p> <span> Business type</span> <br/>';
                        echo $rows['types_name'];
                        echo '</p>
                        <p> <span> Offerings</span> <br/>';
                        echo $rows['offerings_name'];
                        echo '</p>
                        <input class="btn" type="submit" value="Learn More">
                    </form>
                </div>';
            }
        }
    echo '</div>';

include_once "footer.php"; ?>