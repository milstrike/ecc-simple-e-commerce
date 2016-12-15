<?php

if (isset($_POST["submitUpdateMail"])) {
    $IDMailToUpgrade = $_POST["idMail"];    
    
    $sqlY = "UPDATE _inbox SET _status='1' WHERE _id='$IDMailToUpgrade'";
    $queryY = mysql($database, $sqlY);
    
    //header("Refresh:0");
}

