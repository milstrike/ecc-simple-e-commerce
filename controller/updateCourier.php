<?php


if (isset($_POST["submitCourierEdit"])) {
    
    $idCourierUpdate = $_POST["idCourierEdit"];
    $courierNameUpdate = $_POST["namaKurirEdit"];
    $courierServiceUpdate = $_POST["namaLayananEdit"];
    $courierServiceCostUpdate = $_POST["biayaLayananEdit"];
        
    $sql10 = "UPDATE _courier SET _courier_name='".$courierNameUpdate."', _service_type='".$courierServiceUpdate."', _cost='".$courierServiceCostUpdate."' WHERE _id='".$idCourierUpdate."'";
    $query10 = mysql($database, $sql10);
    
    header("Refresh:0");
}

