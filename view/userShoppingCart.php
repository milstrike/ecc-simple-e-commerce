<?php

$sqlShoppingCart = "SELECT * FROM _shopping_cart where _id_user='".$_SESSION["userID"]."'";
$queryShoppingCart = mysql($database, $sqlShoppingCart);
$rowsShoppingCart = mysql_num_rows($queryShoppingCart);
$syndicateUserDetailShoppingCart = "";
if($rowsShoppingCart > 0){
    while($rowShoppingCart = mysql_fetch_assoc($queryShoppingCart)){
        $idCart = $rowShoppingCart["_id"];
        $idProduk = $rowShoppingCart["_id_produk"];
        $itemPurchased = $rowShoppingCart["_item_purchased"];
        $syndicateUserDetailShoppingCart = $syndicateUserDetailShoppingCart.
                '<tr>
                                        <td>'.$idProduk.'</td>
                                        <td>'.getProductByProductID($idProduk, $database).'</td>
                                        <td style="text-align: center;">'.$itemPurchased.' item(s)</td>
                                        <td style="text-align: right;">Rp'.number_format(getProductPriceByProductID($idProduk, $database), 2).'</td>
                                        <td style="text-align: right;">Rp'.number_format($itemPurchased*getProductPriceByProductID($idProduk, $database), 2).'</td>
                                        <td><form action="" method="POST"><input type="text" value="'.$idCart.'" name="idCart" name="idCart" style="visibility: hidden"><button type="submit" name="submitDelete" id="submitDelete" class="btn btn-link"><i class="fa fa-trash-o"></i></button> </td>
                                    </tr>';
        
    }
}
else{
    $syndicateUserDetailShoppingCart = $syndicateUserDetailShoppingCart.
    '<tr><td colspan="5" style="text-align: center; color:#222;">Keranjang belanja Anda kosong.</td></tr>';
}
