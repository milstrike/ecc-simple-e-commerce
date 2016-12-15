<?php

$error;

if (isset($_POST["submitDelete"])) {
    $IDCartToDelete = $_POST["idCart"];    
    
    $sql7 = "DELETE FROM _shopping_cart WHERE _id='$IDCartToDelete'";
    $query7 = mysql($database, $sql7);
    header("Refresh:0");
}

