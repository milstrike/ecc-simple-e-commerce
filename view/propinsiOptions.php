<?php

$propinsiOptions = "";
$sql = "SELECT * FROM provinces";
$query = mysql($database, $sql);
$rows = mysql_num_rows($query);
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $id = $row["id"];
        $opsi = $row["name"];
        $propinsiOptions = $propinsiOptions."<option value='".$id."'>".$opsi."</option>";
    }
}
else{
    $propinsiOptions = "<option value='0'>'Daftar propinsi belum ada...'</option>";
}

