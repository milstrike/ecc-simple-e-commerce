<?php

if (isset($_POST["submitUpdateComplaint"])) {
    $IDComplaintToUpgrade = $_POST["idComplaint"];    
    
    $sqlY = "UPDATE _complaint SET _status='1' WHERE _id='$IDComplaintToUpgrade'";
    $queryY = mysql($database, $sqlY);
    
    //header("Refresh:0");
}

