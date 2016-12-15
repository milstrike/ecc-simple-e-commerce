<?php

include "../config/dbConfig.php";

$idPropinsi = $_POST['idPropinsi'];
$kabupatenOptions = "";
$sql = "SELECT * FROM regencies WHERE province_id='".$idPropinsi."'";
$query = mysql($database, $sql);
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $id = $row["id"];
        $opsi = $row["name"];
        $kabupatenOptions = $kabupatenOptions."<option value='".$id."'>".$opsi."</option>";
    }
}
else{
    $kabupatenOptions = "<option value='0'>'Daftar kabupaten belum ada...'</option>";
}

echo $kabupatenOptions;
