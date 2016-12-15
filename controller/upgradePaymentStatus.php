<?php

if (isset($_POST["submitChanges"])) {
    $IDShoppingToUpgrade = $_POST["shoppingCode"];    
    
    $sqlY = "UPDATE _invoice SET _status='3' WHERE _shopping_code='$IDShoppingToUpgrade'";
    $queryY = mysql($database, $sqlY);
}

