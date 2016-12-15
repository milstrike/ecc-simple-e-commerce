<?php

if (isset($_POST["updateShipping"])) {
    $IDShippingToUpdate = $_POST["idShipping"];
    $KurirToUpdate = $_POST["kurirUpdate"];
    $TrackingToUpdate = $_POST["kodeTracking"];
    
    $sqlUpdateShipping = "UPDATE _shipping SET _courier='".$KurirToUpdate."', _tracking_code='".$TrackingToUpdate."', _date=CURRENT_TIMESTAMP WHERE _id='".$IDShippingToUpdate."'";
    $queryUpdateShipping = mysql($database, $sqlUpdateShipping);
}

