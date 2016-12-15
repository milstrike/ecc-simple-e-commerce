<?php

if (isset($_POST["AddToCart"])) {
    $IDProdukToCart = getProductCodeByProductID($_POST["IDProduk"], $database);
    $ItemToCart = $_POST["jumlahItem"];
    $IDUserToCart = $_SESSION["userID"];
    
    $sqlB = "INSERT INTO _shopping_cart (_id, _id_user, _id_produk, _item_purchased) VALUES ('NULL', '$IDUserToCart', '$IDProdukToCart', '$ItemToCart')";
    $queryB = mysql($database, $sqlB);
}

