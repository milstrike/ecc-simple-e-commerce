<?php

include "../config/dbConfig.php";

$idKecamatan = $_POST['idKecamatan'];
$kelurahanOptions = "";
$sql = "SELECT * FROM villages WHERE district_id='".$idKecamatan."'";
$query = mysql($database, $sql);
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $id = $row["id"];
        $opsi = $row["name"];
        $kelurahanOptions = $kelurahanOptions."<option value='".$id."'>".$opsi."</option>";
    }
}
else{
    $kelurahanOptions = "<option value='0'>'Daftar desa belum ada...'</option>";
}

echo $kelurahanOptions;
