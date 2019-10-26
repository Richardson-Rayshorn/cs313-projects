<?php 
require_once "dbConnect.php";
$title = "Search";
include_once "header.php";
    
    $types = $db->prepare('SELECT DISTINCT * FROM types WHERE types_name=:types_name');
    $types->bindValue(':types_name', $types_name, PDO::PARAM_INT);
    $types->execute();


    echo '<form action="">
        <div class="row">
            <div class="input-field col s4">
                    <select name="types" id="types">
                        <!-- pass the types name from the table in the 
                        database -->';
                       while ( $rows = $types->fetchAll(PDO::FETCH_ASSOC))
                       {
                        echo '<option value="'; echo $rows[$types_name];
                        echo'">'; echo $rows[$types_name]; echo'</option>';
                       }
                  echo '    
                    </select>
                <span id="typeErr" class="error">*</span>
                <label for="types">What type of services are you looking for?</label>
            </div>
            <div class="input-field col s4">
                    <select name="offerings" id="offerings">
                        <!-- pass the offerings name from the table in the 
                        database because each business will have its own offering
                        I will have to narrow the duplicates down to single names
                        Use Select distinct to prevent selected duplicates-->
                        <option value=""></option>
                    </select>
                <span id="offeringErr" class="error">*</span>
                <label for="offerings">Pick the offerings you are looking for!</label>
            </div>
        </div>
        <input type="submit" class="btn" name="submit">
    </form>';

include_once "footer.php" ; ?>