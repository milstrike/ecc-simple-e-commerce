<?php


if (isset($_POST["submitKategoriDelete"])) {
    
    $idCategoryRemove = $_POST["idCategoryDelete"];
        
    $sql11 = "DELETE FROM _category WHERE _id='".$idCategoryRemove."'";
    $query11 = mysql($database, $sql11);
    
    header("Refresh:0");
}

