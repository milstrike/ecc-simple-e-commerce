<?php
if (isset($_POST["submitAddress"])) {
    $userIDAddress = $_SESSION["userID"];
    $userAddress = $_POST["inputAddress"];
    
    $getDesa = getDesaByDesaID($database, $_POST["pilihDesa"]);
    $getKecamatan = getKecamatanByKecamatanID($database, $_POST["pilihKecamatan"]);
    $getKabupaten = getKabupatenByKabupatenID($database, $_POST["pilihKabupaten"]);
    $getPropinsi = getPropinsiByProvinceID($database, $_POST["pilihPropinsi"]);
            
    $userShippingAddress = $getDesa." ".$getKecamatan." ".$getKabupaten." ".$getPropinsi;
    $statusAddress = "0";
        
    $sql9 = "INSERT INTO _shipping_address (_id, _id_user, _shipping_address, _address, _status) VALUES ('NULL', '$userIDAddress', '$userShippingAddress', '$userAddress', '$statusAddress')";
    $query9 = mysql($database, $sql9);
    
    header("Refresh:0");
}

