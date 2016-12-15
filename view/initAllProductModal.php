<?php

$sql2 = "SELECT * FROM _produk WHERE _status='1'";
$query2 = mysql($database, $sql2);
$rows2 = mysql_num_rows($query2);
$syndicateProductViewer = "";
if($rows2 > 0){
    while($row2 = mysql_fetch_assoc($query2)){
        $IDProductView = $row2["_id"];
        $kodeProdukView = $row2["_kode_produk"];
        $NamaProdukView = $row2["_nama_produk"];
        $DeskripsiProdukView = $row2["_deskripsi_produk"];
        $HargaProdukView = $row2["_harga_produk"];
        $stokProdukView = $row2["_stok_produk"];
        $gambarProdukView = $row2["_gambar_produk"];
        $beratProdukView = $row2["_berat_produk"];
        
        
        
        $syndicateProductViewer = $syndicateProductViewer.
                '<div class="modal fade" id="idProdukView-'.$IDProductView.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="color:#777;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Produk: '.$kodeProdukView.'</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        <table border="0" width="100%">
        <tr>
        <td width="25%" style="text-align:center; vertical-align:top; padding-left:20px; padding-right:20px;"><img src="'.$site_base.'/upload-media/'.$gambarProdukView.'" class="img-responsive"/></td>
        <td width="50%" style="vertical-align: top;"><span style="font-size: 20px;"><strong>'.$NamaProdukView.'</strong></span><br/>
        Rp'.number_format($HargaProdukView, 2).'&nbsp;|&nbsp;<strong>Stok Tersisa: </strong>'.$stokProdukView.' item &nbsp;|&nbsp;<strong>Berat: </strong>'.$beratProdukView.' gr<br/>
        
        <form role="form" action="" method="POST" class="form-horizontal">
  <div class="form-group">
    <label for="IDProduk" class="col-sm-8 control-label"></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" id="IDProduk" name="IDProduk" value="'.$IDProductView.'" style="visibility:hidden;">
    </div>
  </div>
  <div class="form-group">
    <label for="jumlahItem" class="col-sm-8 control-label">Beli Item: </label>
    <div class="col-sm-4">
	<select name="jumlahItem" id="jumlahItem" class="form-control">
        '.getOptionForItem($IDProductView, $database).'
        </select>
        </div>
  </div>
  <div class="form-group">
    <label for="" class="col-sm-4 control-label"></label>
    <div class="col-sm-8">
  <button type="submit" class="btn btn-warning btn-sm form-control" name="AddToCart" id="AddToCart"><i class="fa fa-shopping-cart"></i> Tambahkan ke Keranjang Belanja</button>
  </div>
</form>


        </td>
        </tr>
        <tr>
        <td colspan="2">
        <legend>Deskripsi Produk</legend>
        <p align="justify">'.$DeskripsiProdukView.'</p>
        </td>
        </tr>
        </table>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>';
    }
}