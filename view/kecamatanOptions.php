<?php

include "../config/dbConfig.php";

$idKabupaten = $_POST['idKabupaten'];
$kecamatanOptions = "";
$sql = "SELECT * FROM districts WHERE regency_id='".$idKabupaten."'";
$query = mysql($database, $sql);
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $id = $row["id"];
        $opsi = $row["name"];
        $kecamatanOptions = $kecamatanOptions."<option value='".$id."'>".$opsi."</option>";
    }
}
else{
    $kecamatanOptions = "<option value='0'>'Daftar kecamatan belum ada...'</option>";
}

echo $kecamatanOptions;
