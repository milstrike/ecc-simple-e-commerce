<?php

$sqlInvoice = "SELECT * FROM _invoice where _id_user='".$_SESSION["userID"]."'";
$queryInvoice = mysql($database, $sqlInvoice);
$rowsInvoice = mysql_num_rows($queryInvoice);
$syndicateUserListInvoice = "";
if($rowsInvoice > 0){
    while($rowInvoice = mysql_fetch_assoc($queryInvoice)){
        $listIDInvoice = $rowInvoice["_id"];
        $shoppingCode = $rowInvoice["_shopping_code"];
        $totalInvoice = $rowInvoice["_invoice_total"];
        $statusInvoice = $rowInvoice["_status"];
        
        $syndicateUserListInvoice = $syndicateUserListInvoice.
                                       '<tr>
                                        <td>#'.$shoppingCode.'</td>
                                        <td>'.getItemByID($shoppingCode, $database).'</td>
                                        <td style="text-align:center;">'.getPurchasedItemByID($shoppingCode, $database).'</td>
                                        <td>'.getTotalInvoiceByID($shoppingCode, $database).'</td>';
        
        switch($statusInvoice){
            
            case 1:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-danger">Belum Dibayar</span></td>';
                break;
            case 2:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-warning">Menunggu Verifikasi</span></td>';
                break;
            case 3:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-info">Pembayaran Diverifikasi</span></td>';
                break;
            case 4:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span class="text-success">Masuk Proses Pengiriman...</span></td>';
                break;
            case 5:
                $syndicateUserListInvoice = $syndicateUserListInvoice.'<td><span><strong>Transaksi Selesai</strong></span></td>';
                break;
        }
        $syndicateUserListInvoice = $syndicateUserListInvoice.''
                . '<td style="text-align:center;"><form action="" method="POST" style="margin:0; padding:0;"><button type="submit" name="checkInvoice" id="checkInvoice" class="btn btn-link" style="style="margin:0; padding:0;"><i class="fa fa-info-circle"></i></button><input type="text" name="shoppingID" id="shoppingID" value="'.$shoppingCode.'" style="visibility:hidden; style="margin:0; padding:0;"></form></td></tr>';
        
    }
}
else{
    $syndicateUserListInvoice = $syndicateUserListInvoice.
    '<tr><td colspan="5" style="text-align:center; color:#222;">Anda belum pernah melakukan transaksi</td></tr>';
}
