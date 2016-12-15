<?php


if (isset($_POST["submitKategoriEdit"])) {
    
    $idCategoryUpdate = $_POST["idCategoryEdit"];
    $categoryNameUpdate = $_POST["namaKategoriEdit"];
        
    $sql10 = "UPDATE _category SET _category='".$categoryNameUpdate."' WHERE _id='".$idCategoryUpdate."'";
    $query10 = mysql($database, $sql10);
    
    header("Refresh:0");
}

