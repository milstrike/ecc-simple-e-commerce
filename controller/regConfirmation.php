<?php

$error;

if (isset($_POST["submitKonfirmasi"])) {
    $kodeBelanja = $_POST["kodeBelanja"];
    $totalBayar = $_POST["totalBayar"];
    $bankTujuan = $_POST["bankTujuan"];
    $namaBankPengirim = $_POST["namaBankPengirim"];
    $noRekening = $_POST["nomorRekening"];
    $namaPemilikRekening = $_POST["namaPemilikRekening"];
    $file_size = $_FILES['buktiPembayaran']['size'];
        
    if($file_size == 0){
        $sql = "INSERT INTO _confirmation_detail (_id, _shopping_code, _total_payment, _destination_bank, _bank_sender, _account_number, _account_owner, _transfer_scan) VALUES ('NULL', '$kodeBelanja', '$totalBayar', '$bankTujuan', '$namaBankPengirim', '$noRekening', '$namaPemilikRekening', '$buktiPembayaranUploaded')";
        $query = mysql($database, $sql);
        
        $sqlX = "UPDATE _invoice SET _status='2', _date=CURRENT_TIMESTAMP WHERE _shopping_code='$kodeBelanja'";
        $queryX = mysql($database, $sqlX);
    }
    else{
        $file_name = $_FILES['buktiPembayaran']['name'];
        $file_tmp =$_FILES['buktiPembayaran']['tmp_name'];
        $file_type=$_FILES['buktiPembayaran']['type'];   
        $file_ext=strtolower(end(explode('.',$_FILES['buktiPembayaran']['name'])));		
        $expensions= array("jpeg","jpg","png"); 		
        $buktiPembayaranUploaded = $kodeBelanja.".".$file_ext;
        move_uploaded_file($file_tmp,"../../transfer-media/".$buktiPembayaranUploaded);
        
        $sql = "INSERT INTO _confirmation_detail (_id, _shopping_code, _total_payment, _destination_bank, _bank_sender, _account_number, _account_owner, _transfer_scan) VALUES ('NULL', '$kodeBelanja', '$totalBayar', '$bankTujuan', '$namaBankPengirim', '$noRekening', '$namaPemilikRekening', '$buktiPembayaranUploaded')";
        $query = mysql($database, $sql);
        
        $sqlX = "UPDATE _invoice SET _status='2', _date=CURRENT_TIMESTAMP WHERE _shopping_code='$kodeBelanja'";
        $queryX = mysql($database, $sqlX);
    }
    header("location:../invoiceAndBilling");
}

