<?php

$error;

if (isset($_POST["submitMail"])) {
    $userIDMail = $_POST["mailboxID"];
    $subjekMail = $_POST["subjekMail"];
    $contentMail = $_POST["contentMail"];
    $statusMail = "0";
        
    $sql9 = "INSERT INTO _inbox (_id, _id_user, _subject, _content, _date, _status) VALUES ('NULL', '$userIDMail', '$subjekMail', '$contentMail', CURRENT_TIMESTAMP, '$statusMail')";
    $query9 = mysql($database, $sql9);
    
    //$error = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Sukses mengirimkan pesan!</strong></div>';
    header("Refresh:0");
}

