<?php

$error;

if (isset($_POST["submitLock"])) {
    $IDProdukToLock = $_POST["lockID"];
    $valueToLock = $_POST["lockProdukValue"];
    $locker = 0;
    if($valueToLock == 1){
        $locker = 0;
    }
    else{
        $locker = 1;
    }
    
    $sql5 = "UPDATE _produk SET _status='$locker' WHERE _kode_produk='$IDProdukToLock'";
    $query5 = mysql($database, $sql5);
    header("Refresh:0");
    //$error = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Status Akun berhasil diubah!</div>';
}

