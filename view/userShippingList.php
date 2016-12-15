<?php

$sqlShipping = "SELECT * FROM _shipping WHERE _id_user='".$_SESSION["userID"]."'";
$queryShipping = mysql($database, $sqlShipping);
$rowsShipping = mysql_num_rows($queryShipping);
$syndicateUserListShipping = "";
if($rowsShipping > 0){
    while($rowShipping = mysql_fetch_assoc($queryShipping)){
        $listIDShipping = $rowShipping["_id"];
        $shoppingCode = $rowShipping["_shopping_code"];
        $statusShipping = $rowShipping["_status"];
        $kurirShipping = $rowShipping["_courier"];
        $trackingShipping = $rowShipping["_tracking_code"];
        $dateShipping = $rowShipping["_date"];
        
        
        $syndicateUserListShipping = $syndicateUserListShipping.
                                       '<tr>
                                        <td>#'.$shoppingCode.'</td>';
        
        switch($statusShipping){
            
            case 1:
                $syndicateUserListShipping = $syndicateUserListShipping.'<td><span class="text-danger">Proses Pengepakan</span></td>';
                break;
            case 2:
                $syndicateUserListShipping = $syndicateUserListShipping.'<td><span class="text-warning">Proses Pengiriman ke Kurir</span></td>';
                break;
            case 3:
                $syndicateUserListShipping = $syndicateUserListShipping.'<td><span class="text-info">Proses Pengiriman Oleh Kurir</span></td>';
                break;
            case 4:
                $syndicateUserListShipping = $syndicateUserListShipping.'<td><span class="text-success">Barang Diterima</span></td>';
                break;
            case 5:
                $syndicateUserListShipping = $syndicateUserListShipping.'<td><span><strong>Transaksi Selesai</strong></span></td>';
                break;
        }
        $syndicateUserListShipping = $syndicateUserListShipping.''
                . '<td>'.$kurirShipping.'</td>
                   <td>'.$trackingShipping.'</td>
                   <td>'.$dateShipping.'</td></tr>';
        
    }
}
else{
    $syndicateUserListShipping = $syndicateUserListShipping.
    '<tr><td colspan="5" style="text-align:center; color:#222;">Anda belum pernah melakukan transaksi</td></tr>';
}
