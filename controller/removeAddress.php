<?php

if (isset($_POST["submitDelete"])) {
    $IDAddressToDelete = $_POST["deleteID"];    
    
    $sql7 = "DELETE FROM _shipping_address WHERE _id='$IDAddressToDelete'";
    $query7 = mysql($database, $sql7);
    header("Refresh:0");
}

