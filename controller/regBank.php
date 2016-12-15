<?php


if (isset($_POST["submitBankAccount"])) {
    
    $bankNameInsert = $_POST["namaBank"];
    $bankAccountNumberInsert = $_POST["nomorRekening"];
    $bankAccountOwnerInsert = $_POST["pemilikRekening"];
        
    $sql9 = "INSERT INTO _bank_list (_id, _bank_name, _account_number, _account_owner) VALUES ('NULL', '$bankNameInsert', '$bankAccountNumberInsert', '$bankAccountOwnerInsert')";
    $query9 = mysql($database, $sql9);
    
    header("Refresh:0");
}

