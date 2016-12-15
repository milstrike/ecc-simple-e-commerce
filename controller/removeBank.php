<?php


if (isset($_POST["submitBankAccountDelete"])) {
    
    $idBankRemove = $_POST["idBankDelete"];
        
    $sql11 = "DELETE FROM _bank_list WHERE _id='".$idBankRemove."'";
    $query11 = mysql($database, $sql11);
    
    header("Refresh:0");
}

