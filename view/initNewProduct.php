<?php

$sqlNewProduct = "SELECT * FROM _produk WHERE _status='1' ORDER BY _id DESC LIMIT 3";
$queryNewProduct = mysql($database, $sqlNewProduct);
$rowsNewProduct = mysql_num_rows($queryNewProduct);
$syndicateUserDetailNewProduct = "";
if($rowsNewProduct > 0){
    while($rowNewProduct = mysql_fetch_assoc($queryNewProduct)){
        $NamaProduk = $rowNewProduct["_nama_produk"];
        $DeskripsiProduk = $rowNewProduct["_deskripsi_produk"];
        $GambarProduk = $rowNewProduct["_gambar_produk"];
        $syndicateUserDetailNewProduct = $syndicateUserDetailNewProduct.
                '<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="'.$site_base.'/upload-media/'.$GambarProduk.'" class="img-responsive"/>
				<h3>'.$NamaProduk.'</h3>
				<p>'.$DeskripsiProduk.'</p>
			</div>';
        
    }
}
