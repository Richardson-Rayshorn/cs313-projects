<?php 
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

    $link = htmlspecialchars("./business.php");
    echo '<form method="GET" ction="'; echo $link; echo '">
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
        <input type="submit" class="btn" name="submit" placeholder="Search">
    </form>';

include_once "footer.php" ; ?>