<?php

$error;

if (isset($_POST["submitLock"])) {
    $IDUserToLock = $_POST["lockID"];
    $valueToLock = $_POST["lockValue"];
    $locker = 0;
    if($valueToLock == 1){
        $locker = 0;
    }
    else{
        $locker = 1;
    }
    
    $sql5 = "UPDATE _user SET _status='$locker' WHERE _id_user='$IDUserToLock'";
    $query5 = mysql($database, $sql5);
    header("Refresh:0");
    //$error = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Status Akun berhasil diubah!</div>';
}

