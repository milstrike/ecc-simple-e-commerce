<?php

if (isset($_POST["upgradeShipping"])) {
    $IDShippingToUpgrade = $_POST["idShipping"];
    $currentStatus = getShippingStatusByShippingID($IDShippingToUpgrade, $database);
    $nextStatus = $currentStatus + 1;
    $shoppingCodeToUpgrade = getShopingIDByShippingID($IDShippingToUpgrade, $database);
    
    if($nextStatus == 5){
        $nextStatus = 5;
    }
    else{
        
        $sqlUpgradeShipping = "UPDATE _shipping SET _status='".$nextStatus."' WHERE _id='".$IDShippingToUpgrade."'";
        $queryUpgradeShipping = mysql($database, $sqlUpgradeShipping);
        
        $sqlFinishTransaction = "UPDATE _invoice SET _status='5' WHERE _shopping_code='".$shoppingCodeToUpgrade."'";
        $queryFinishTransaction = mysql($database, $sqlFinishTransaction);
    }
    
}

