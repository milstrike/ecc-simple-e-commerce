<?php

$urutan = 1;

$sqlCourierList = "SELECT * FROM _courier ORDER BY _courier_name";
$queryCourierList = mysql($database, $sqlCourierList);
$rowsCourierList = mysql_num_rows($queryCourierList);
$syndicateCourierList = "";
if($rowsCourierList > 0){
    while($rowCourierList = mysql_fetch_assoc($queryCourierList)){
        
        $courierID = $rowCourierList["_id"];
        $courierNameList = $rowCourierList["_courier_name"];
        $courierServices = $rowCourierList["_service_type"];
        $courierServicesDescription = $rowCourierList["_description"];
        $courierServicesCost = $rowCourierList["_cost"];
        
            $syndicateCourierList = $syndicateCourierList.
            ' <tr>
                <td style="text-align:right;">'.$urutan.'</td>
                <td style="text-align:center;">'.$courierNameList.'</td>    
                <td style="text-align:left;">'.$courierServices.'</td>
                <td style="text-align:left;">'.$courierServicesDescription.'</td>
                <td style="text-align:right;">Rp'.number_format($courierServicesCost, 2).'</td>
                <td style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#modalEditCourier-'.$courierID.'" title="Edit Data Kurir"><i class="fa fa-edit"></i></a> | 
                    <a href="#" data-toggle="modal" data-target="#modalDeleteCourier-'.$courierID.'" title="Hapus Data Kurir"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>';
            
            $urutan++;
        
    }
}
else{
    $syndicateCourierList = $syndicateCourierList.
    '<tr><td colspan="5" style="text-align: center;">Anda belum pernah memasukkan Akun Courier</td></tr>';
}
