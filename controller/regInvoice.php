<?php

$error;
$totalPriceToInvoice = 0;
$totalWeightToInvoice = 0;
$idPostages = 0;

if (isset($_POST["invoiceSubmit"])) {
    $userIDInvoice = $_POST["idUserToInvoice"];
    $shoppingCodeInvoice = $userIDInvoice.generateInvoiceID();
    $idPostages = $_POST["courier"];
    
    $sqlShoppingCartToInvoice = "SELECT * FROM _shopping_cart where _id_user='".$userIDInvoice."'";
    $queryShoppingCartToInvoice = mysql($database, $sqlShoppingCartToInvoice);
    $rowsShoppingCartToInvoice = mysql_num_rows($queryShoppingCartToInvoice);
    $syndicateUserDetailShoppingCartToInvoice = "";
    if($rowsShoppingCartToInvoice > 0){
        while($rowShoppingCartToInvoice = mysql_fetch_assoc($queryShoppingCartToInvoice)){
            $idProdukToInvoice = $rowShoppingCartToInvoice["_id_produk"];
            $itemPurchasedToInvoice = $rowShoppingCartToInvoice["_item_purchased"];
            $totalItemPriceToInvoice = $itemPurchasedToInvoice * getProductPriceByProductID($idProdukToInvoice, $database);
            $totalWeightToInvoice = $totalWeightToInvoice + getProductWeightByProductID($idProdukToInvoice, $database)*$itemPurchasedToInvoice;
            $totalPriceToInvoice = $totalPriceToInvoice + $totalItemPriceToInvoice;

            $sqlToInvoice = "INSERT INTO _invoice_detail (_id, _id_invoice, _id_produk, _item_purchased, _total_price) VALUES ('NULL', '$shoppingCodeInvoice', '$idProdukToInvoice', '$itemPurchasedToInvoice', '$totalItemPriceToInvoice')";
            $queryToInvoice = mysql($database, $sqlToInvoice);
            
            $reducingStock = getProductStockByProductID($idProdukToInvoice, $database) - $itemPurchasedToInvoice;
            
            $sqlReduceStock = "UPDATE _produk SET _stok_produk='".$reducingStock."' WHERE _kode_produk='".$idProdukToInvoice."'";
            $queryReduceStock = mysql($database, $sqlReduceStock);
            
        }
    }
    
    $courierName = getCourierNameByID($idPostages, $database);
    $courierServices = getCourierServicesByID($idPostages, $database);
    $courierServiceCost = getCourierServicesCostByID($idPostages, $database);
    $postages = $courierName." - ".$courierServices;
    
    $addressTo = getActiveAddressByUserID($_SESSION["userID"], $database);
    
    $finalPayment = $totalPriceToInvoice + ($courierServiceCost/1000*$totalWeightToInvoice);
    
        
    $sqlToInvoice2 = "INSERT INTO _invoice (_id, _id_user, _shopping_code, _courier_services, _weight, _shipping_cost, _shipping_address, _invoice_total, _invoice_real, _status, _date) VALUES ('NULL', '$userIDInvoice', '$shoppingCodeInvoice', '$postages', '$totalWeightToInvoice', '$courierServiceCost', '$addressTo', '$totalPriceToInvoice', '$finalPayment', '1', CURRENT_TIMESTAMP)";
    $queryToInvoice2 = mysql($database, $sqlToInvoice2);
    
    $sqlToInvoice3 = "DELETE FROM _shopping_cart where _id_user='".$userIDInvoice."'";
    $queryToInvoice3 = mysql($database, $sqlToInvoice3);
    
    $_SESSION["invoiceID"] = $shoppingCodeInvoice;
       
    header("location:../checkOutAndPayment/");
}

