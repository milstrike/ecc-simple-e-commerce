<?php


if (isset($_POST["submitBankAccountEdit"])) {
    
    $idBankUpdate = $_POST["idBankEdit"];
    $bankNameUpdate = $_POST["namaBankEdit"];
    $bankAccountNumberUpdate = $_POST["nomorRekeningEdit"];
    $bankAccountOwnerUpdate = $_POST["pemilikRekeningEdit"];
        
    $sql10 = "UPDATE _bank_list SET _bank_name='".$bankNameUpdate."', _account_number='".$bankAccountNumberUpdate."', _account_owner='".$bankAccountOwnerUpdate."' WHERE _id='".$idBankUpdate."'";
    $query10 = mysql($database, $sql10);
    
    header("Refresh:0");
}

