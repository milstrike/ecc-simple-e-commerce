<?php

$sqlB = "SELECT * FROM _produk";
$queryB = mysql($database, $sqlB);
$rowsB = mysql_num_rows($queryB);
$syndicateProdukModalView = "";
if($rowsB > 0){
    while($rowB = mysql_fetch_assoc($queryB)){
        $idProdukView = $rowB["_kode_produk"];
        $namaProdukView = $rowB["_nama_produk"];
        $deskripsiProdukView = $rowB["_deskripsi_produk"];
        $hargaProdukView = $rowB["_harga_produk"];
        $stokProdukView = $rowB["_stok_produk"];
        $gambarProdukView = $rowB["_gambar_produk"];
        $produkPopulerView = $rowB["_total_click"];
        $categoryProdukView = $rowB["_kode_category"];
        $beratProdukView = $rowB["_berat_produk"];
        
        
        $syndicateProdukModalView = $syndicateProdukModalView.         
                '<div class="modal fade" id="modalProdukView-'.$idProdukView.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Info Produk</h4>
      </div>
     <div class="modal-body" style="color: #222;">
        <dl class="dl-horizontal">
            <dt>Kode Produk</dt>
            <dd>'.$idProdukView.'</dd>
            <dt>Nama Produk</dt>
            <dd>'.$namaProdukView.'</dd>
            <dt>Kategori Produk</dt>
            <dd>'.$categoryProdukView.'</dd>
            <dt>Deskripsi Produk</dt>
            <dd>'.$deskripsiProdukView.'</dd>
            <dt>Berat Produk</dt>
            <dd>'.$beratProdukView.' gr</dd>
            <dt>Harga Produk</dt>
            <dd>'.$hargaProdukView.'</dd>
            <dt>Stok Produk (saat ini)</dt>
            <dd>'.$stokProdukView.'</dd>
            <dt>Gambar Produk</dt>
            <dd><img class="img-rounded" width="100" src="'.$site_base.'/upload-media/'.$gambarProdukView.'"/></dd>
            <dt>Kepopuleran</dt>
            <dd>'.$produkPopulerView.'</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>'; 
    }
}