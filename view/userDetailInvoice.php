<?php

$sqlInvoice = "SELECT * FROM _invoice_detail where _id_invoice='".$_SESSION["invoiceID"]."'";
$queryInvoice = mysql($database, $sqlInvoice);
$rowsInvoice = mysql_num_rows($queryInvoice);
$syndicateUserDetailInvoice = "";
if($rowsInvoice > 0){
    while($rowInvoice = mysql_fetch_assoc($queryInvoice)){
        $idProduk = $rowInvoice["_id_produk"];
        $itemPurchased = $rowInvoice["_item_purchased"];
        $totalPrice = $rowInvoice["_total_price"];
        $produkWeight = getProductWeightByProductID($rowInvoice["_id_produk"], $database);
        
        $syndicateUserDetailInvoice = $syndicateUserDetailInvoice.
                                       '<tr>
                                        <td>'.$idProduk.'</td>
                                        <td>'.  getProductByProductID($idProduk, $database).'</td>
                                        <td style="text-align: right;">'.$produkWeight.' gr</td>
                                        <td style="text-align: right;">'.$itemPurchased.' item(s)</td>
                                        <td style="text-align: right;">Rp'.number_format(getProductPriceByProductID($idProduk, $database), 2).'</td>
                                        <td style="text-align: right;">Rp'.number_format($itemPurchased*getProductPriceByProductID($idProduk, $database), 2).'</td>
                                        </tr>';
        
    }
}
else{
    $syndicateUserDetailInvoice = $syndicateUserDetailInvoice.
    '<tr><td colspan="5" style="text-align: center; color:#222;">Anda belum pernah transaksi</td></tr>';
}
