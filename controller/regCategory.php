<?php


if (isset($_POST["submitKategori"])) {
    
    $categoryNameInsert = $_POST["namaKategori"];
        
    $sql9 = "INSERT INTO _category (_id, _category) VALUES ('NULL', '$categoryNameInsert')";
    $query9 = mysql($database, $sql9);
    
    header("Refresh:0");
}

