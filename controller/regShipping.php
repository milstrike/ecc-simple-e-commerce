<?php

if (isset($_POST["moveShipping"])) {
    $IDShoppingToShipping = $_POST["shoppingID"];
    $IDUserToShipping = getUserIDByUserName($_POST["IDUserHolder"], $database);
    
    
    $sqlA = "UPDATE _invoice SET _status='4' WHERE _shopping_code='$IDShoppingToShipping'";
    $queryA = mysql($database, $sqlA);
    
    $sqlB = "INSERT INTO _shipping (_id, _id_user, _shopping_code, _status, _courier, _tracking_code, _date) VALUES ('NULL', '$IDUserToShipping', '$IDShoppingToShipping', '1', '', '', CURRENT_TIMESTAMP)";
    $queryB = mysql($database, $sqlB);
}

