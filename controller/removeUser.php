<?php

$error;

if (isset($_POST["submitDelete"])) {
    $IDUserToDelete = $_POST["deleteID"];    
    
    $sql7 = "DELETE FROM _user WHERE _id_user='$IDUserToDelete'";
    $query7 = mysql($database, $sql7);
    header("Refresh:0");
    //$error = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Status Akun berhasil diubah!</div>';
}

