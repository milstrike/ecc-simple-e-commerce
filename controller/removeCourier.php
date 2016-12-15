<?php


if (isset($_POST["submitCourierDelete"])) {
    
    $idCourierRemove = $_POST["idCourierDelete"];
        
    $sql11 = "DELETE FROM _courier WHERE _id='".$idCourierRemove."'";
    $query11 = mysql($database, $sql11);
    
    header("Refresh:0");
}

