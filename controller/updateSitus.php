<?php

if (isset($_POST["updateSitus"])) {
    $updateTentang1 = $_POST["Tentang1"];
    $updateBudaya1 = $_POST["Budaya1"];
    $updateQuoteTentang2 = $_POST["QuoteTentang"];
    $updateTentang2 = $_POST["Tentang2"];
    $updateKeunggulan = $_POST["Keunggulan"];
    
    
    $sqlY = "UPDATE _site_configuration SET _tentang_1='".$updateTentang1."', _budaya_1='".$updateBudaya1."', _quote_tentang_2='".$updateQuoteTentang2."', _tentang_2='".$updateTentang2."', _keunggulan='".$updateKeunggulan."'";
    $queryY = mysql($database, $sqlY);
    
}

