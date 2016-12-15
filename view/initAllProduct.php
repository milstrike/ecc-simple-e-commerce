<?php

$sqlAllProduct = "SELECT * FROM _produk WHERE _status='1'";
$queryAllProduct = mysql($database, $sqlAllProduct);
$rowsAllProduct = mysql_num_rows($queryAllProduct);
$syndicateAllProduct = "";
if($rowsAllProduct > 0){
    while($rowAllProduct = mysql_fetch_assoc($queryAllProduct)){
        $idAllProduk = $rowAllProduct["_id"];
        $NamaProduk = $rowAllProduct["_nama_produk"];
        $DeskripsiProduk = $rowAllProduct["_deskripsi_produk"];
        $GambarProduk = $rowAllProduct["_gambar_produk"];
        $kategoriProduk = str_replace(' ', '', $rowAllProduct["_kode_category"]);
        $syndicateAllProduct = $syndicateAllProduct.
                ' <div class="portfolio-item '.$kategoriProduk.' col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img src="'.$site_base.'/upload-media/'.$GambarProduk.'" alt="" class="img-responsive">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">'.$NamaProduk.'</a></h3>
                                    <p>'.$DeskripsiProduk.'</p>';
        
        if($_SESSION["userID"] == ""){
            $syndicateAllProduct = $syndicateAllProduct.'<a class="preview" href="'.$site_base.'/upload-media/'.$GambarProduk.'" rel="prettyPhoto"><i class="fa fa-eye"></i> Lihat Detail Gambar</a>';
        }
        else{
            $syndicateAllProduct = $syndicateAllProduct.'<a href="#" data-toggle="modal" data-target="#idProdukView-'.$idAllProduk.'"><i class="fa fa-info-circle"></i> Lihat Info Produk</a>';
        }
        
        
        $syndicateAllProduct = $syndicateAllProduct.'</div> 
                            </div>
                        </div>          
                    </div>';
        
    }
}
