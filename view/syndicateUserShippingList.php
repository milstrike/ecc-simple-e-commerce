<?php

$sqlShipping = "SELECT * FROM _shipping";
$queryShipping = mysql($database, $sqlShipping);
$rowsShipping = mysql_num_rows($queryShipping);
$syndicateUserListShipping = "";
if($rowsShipping > 0){
    while($rowShipping = mysql_fetch_assoc($queryShipping)){
        $listIDShipping = $rowShipping["_id"];
        $userHolder = getUsernameByUserID($rowShipping["_id_user"], $database);
        $usernameHolder = getNameUserByUserID($rowShipping["_id_user"], $database);
        $shoppingCode = $rowShipping["_shopping_code"];
        $statusShipping = $rowShipping["_status"];
        $kurirShipping = $rowShipping["_courier"];
        $trackingShipping = $rowShipping["_tracking_code"];
        $dateShipping = $rowShipping["_date"];
        
        
        $syndicateUserListShipping = $syndicateUserListShipping.
                                       '<tr>
                                        <td>#'.$shoppingCode.'</td>
                                        <td>'.$usernameHolder.' ('.$userHolder.')</td>';
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
                   <td>'.$dateShipping.'</td>'
                . '<td><a href="#" data-toggle="modal" data-target="#modalEditShipping-'.$listIDShipping.'" style="text-decoration: none;" title="ubah shipping"><i class="fa fa-pencil"></i></a>&nbsp;</td></tr>';
        
    }
}
else{
    $syndicateUserListShipping = $syndicateUserListShipping.
    '<tr><td colspan="5" style="text-align:center; color:#222;">Anda belum pernah melakukan transaksi</td></tr>';
}
