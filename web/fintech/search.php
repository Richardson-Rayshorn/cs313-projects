<?php
session_start(); 
require_once("dbConnect.php");
$db = get_db();
$title = "Search";
include_once "header.php";
    
    $types = $db->prepare('SELECT DISTINCT types_name FROM types');
    $types->execute();
    $types_load = $types->fetchAll(PDO::FETCH_ASSOC);

    $offerings = $db->prepare('SELECT DISTINCT offerings_name FROM offerings');
    $offerings->execute();
    $offerings_load = $offerings->fetchAll(PDO::FETCH_ASSOC);

    $query = $db->prepare('SELECT types_name, offerings_name,
    company_name, company_description
    FROM ((((institute_types
    INNER JOIN types ON institute_types.types_id = types.id)
    INNER JOIN institutions ON institute_types.institutions_id = institutions.id)
    INNER JOIN institute_offerings ON institutions.id = institute_offerings.institutions_id)
    INNER JOIN offerings ON institute_offerings.offerings_id = offerings.id)');
    $query->execute();
    $business = $query->fetchAll(PDO::FETCH_ASSOC);

    $link = htmlspecialchars("./business.php");
    echo '<form method="GET" action="'; echo $link; echo '">
        <div class="row">
            <div class="input-field col s4">
                    <select name="types" id="types">
                        <!-- pass the types name from the table in the 
                        database -->';
                       foreach ($types_load as $rows)
                       {
                        echo '<option value="'; echo $rows['types_name'];
                        echo'">'; echo $rows['types_name']; echo'</option>';
                       }
                  echo '    
                    </select>
                <label for="types">What type of services are you looking for?</label>
            </div>
            <div class="input-field col s4">
                    <select name="offerings" id="offerings">
                        <!-- pass the offerings name from the table in the 
                        database because each business will have its own offering
                        I will have to narrow the duplicates down to single names
                        Use Select distinct to prevent selected duplicates-->';
                        foreach ($offerings_load as $rows)
                        {
                            echo '<option value="'; echo $rows['offerings_name'];
                            echo'">'; echo $rows['offerings_name']; echo'</option>';
                        }
                        echo '
                    </select>
                <label for="offerings">Pick the offerings you are looking for!</label>
            </div>
        </div>
        <input type="submit" class="btn" value="Search">
    </form>';

    echo '\
        <h4>List of businesses</h4>
        <div class="row">
        <!-- Displays the businesses that match
        the search -->';
        foreach ($business as $rows)
        {
            echo '<div class="col sm12">
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
                <a class="btn" onClick="">Learn More</a>
            </div>';
        }
    echo '</div>';

include_once "footer.php" ; ?>