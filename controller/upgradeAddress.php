<?php

if (isset($_POST["submitUpgrade"])) {
    $IDAddressToUpgrade = $_POST["upgradeID"];    
    $userIDAddressUpgrade = $_SESSION["userID"];
    
    $sqlY = "UPDATE _shipping_address SET _status='0' WHERE _id_user='$userIDAddressUpgrade'";
    $queryY = mysql($database, $sqlY);
    
    $sqlX = "UPDATE _shipping_address SET _status='1' WHERE _id='$IDAddressToUpgrade'";
    $queryX = mysql($database, $sqlX);
    header("Refresh:0");
}

