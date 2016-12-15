<?php

$sqlInvoice = "SELECT * FROM _invoice";
$queryInvoice = mysql($database, $sqlInvoice);
$rowsInvoice = mysql_num_rows($queryInvoice);
$syndicateUserListInvoice = "";
if($rowsInvoice > 0){
    while($rowInvoice = mysql_fetch_assoc($queryInvoice)){
        $listIDInvoice = $rowInvoice["_id"];
        $idUserHolder = getUsernameByUserID($rowInvoice["_id_user"], $database);
        $nameUserHolder = getNameUserByUserID($rowInvoice["_id_user"], $database);
        $shoppingCode = $rowInvoice["_shopping_code"];
        $totalInvoice = $rowInvoice["_invoice_real"];
        $statusInvoice = $rowInvoice["_status"];
        $dateInvoice = $rowInvoice["_date"];
        
        $syndicateUserListInvoice = $syndicateUserListInvoice.
                                       '<tr>
                                        <td>#'.$shoppingCode.'</td>
                                        <td>'.$nameUserHolder.' ('.$idUserHolder.')</td>
                                        <td>Rp'.number_format($totalInvoice, 2).'</td>';
        
        switch($statusInvoice){
            
            case 1:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-danger">BELUM DIBAYAR</span></td>';
                break;
            case 2:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-warning">MENUNGGU VERIFIKASI</span></td>';
                break;
            case 3:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-info">PEMBAYARAN DIVERIFIKASI</span></td>';
                break;
            case 4:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-success">MASUK KE PROSES PENGIRIMAN</span></td>';
                break;
            case 5:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span><strong>TRANSAKSI SELESAI</strong></span></td>';
                break;
        }
        $syndicateUserListInvoice = $syndicateUserListInvoice.
                '<td>'.$dateInvoice.'</td>
                <td style="text-align:right;">';
        if($statusInvoice == 2){
            $syndicateUserListInvoice = $syndicateUserListInvoice.
                    '<form action="" method="POST" style="margin:0; padding: 0;"><input type="text" name="shoppingID" id="shoppingID" value="'.$shoppingCode.'" style="visibility:hidden; margin:0; padding: 0;"><button type="submit" name="checkInvoice" id="checkInvoice" class="btn btn-link" style="margin:0; padding: 0;"><i class="fa fa-info-circle"></i> Lihat Detail Order</button></form>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalPaymentConfirmationView-'.$shoppingCode.'" style="text-decoration: none; margin:0; padding: 0;" title="konfirmasi transfer"><i class="fa fa-file"></i> Lihat Bukti Transfer dan Konfirmasi</a>&nbsp;
                              </td></tr>';
        }
        else if($statusInvoice > 2 && $statusInvoice < 4){
            $syndicateUserListInvoice = $syndicateUserListInvoice.
            '<ul class="list-unstyled">'
             . '<li><form action="" method="POST"><input type="text" name="shoppingID" id="shoppingID" value="'.$shoppingCode.'" style="visibility:hidden; margin:0; padding: 0;"><button type="submit" name="checkInvoice" id="checkInvoice" class="btn btn-link" style="margin:0; padding: 0;"><i class="fa fa-info-circle"></i> Lihat Detail Order</button></form></li>
                <li><form action="" method="POST"><input type="text" name="shoppingID" id="shoppingID" value="'.$shoppingCode.'" style="visibility:hidden; margin:0; padding: 0;"><input type="text" name="IDUserHolder" id="IDUserHolder" value="'.$idUserHolder.'" style="visibility:hidden; margin:0; padding: 0;"><button type="submit" name="moveShipping" id="moveShipping" class="btn btn-link" style="margin:0; padding: 0;"><i class="fa fa-truck"></i> Pindah ke Proses Shipping</button></form></li>
                              </ul></td></tr>';
        }
        else{
            $syndicateUserListInvoice = $syndicateUserListInvoice.
                    '<form action="" method="POST"><input type="text" name="shoppingID" id="shoppingID" value="'.$shoppingCode.'" style="visibility:hidden; margin:0; padding: 0;"><button type="submit" name="checkInvoice" id="checkInvoice" class="btn btn-link" style="margin:0; padding: 0;"><i class="fa fa-info-circle"></i> Lihat Detail Order</button></form>&nbsp;                                  
                              </td></tr>';
        }
                                  
        
    }
}
else{
    $syndicateUserListInvoice = $syndicateUserListInvoice.
    '<tr><td colspan="5" style="text-align:center; color:#222;">Anda belum pernah melakukan transaksi</td></tr>';
}
