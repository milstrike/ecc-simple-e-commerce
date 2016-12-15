<?php

$error;

if (isset($_POST["submitComplaint"])) {
    $userIDComplaint = $_SESSION["userID"];
    $subjekComplaint = $_POST["subject"];
    $contentComplaint = $_POST["content"];
    $statusComplaint = "0";
    $ticketComplaint = $userIDComplaint.generateInvoiceID();
        
    $sql9 = "INSERT INTO _complaint (_id, _id_tiket, _id_user, _subject, _content, _status, _date) VALUES ('NULL', '$ticketComplaint', '$userIDComplaint', '$subjekComplaint', '$contentComplaint', '$statusComplaint', CURRENT_TIMESTAMP)";
    $query9 = mysql($database, $sql9);
        
    header("Refresh:0");
}

