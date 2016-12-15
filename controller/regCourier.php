<?php


if (isset($_POST["submitCourier"])) {
    
    $courierNameInsert = $_POST["namaKurir"];
    $courierServiceInsert = $_POST["namaLayanan"];
    
    $getDesa = getDesaByDesaID($database, $_POST["pilihDesa"]);
    $getKecamatan = getKecamatanByKecamatanID($database, $_POST["pilihKecamatan"]);
    $getKabupaten = getKabupatenByKabupatenID($database, $_POST["pilihKabupaten"]);
    $getPropinsi = getPropinsiByProvinceID($database, $_POST["pilihPropinsi"]);
    
    $courierServiceDescription = $getDesa." ".$getKecamatan." ".$getKabupaten." ".$getPropinsi;
    $courierServiceCost = $_POST["biayaLayanan"];
        
    $sql9 = "INSERT INTO _courier (_id, _courier_name, _service_type, _description, _cost) VALUES ('NULL', '$courierNameInsert', '$courierServiceInsert', '$courierServiceDescription', '$courierServiceCost')";
    $query9 = mysql($database, $sql9);
    
    header("Refresh:0");
}

