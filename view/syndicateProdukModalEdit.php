<?php

$sqlA = "SELECT * FROM _produk";
$queryA = mysql($database, $sqlA);
$rowsA = mysql_num_rows($queryA);
$syndicateProdukModalEdit = "";
if($rowsA > 0){
    while($rowA = mysql_fetch_assoc($queryA)){
        $idProdukEdit = $rowA["_kode_produk"];
        $namaProdukEdit = $rowA["_nama_produk"];
        $deskripsiProdukEdit = $rowA["_deskripsi_produk"];
        $hargaProdukEdit = $rowA["_harga_produk"];
        $stokProdukEdit = $rowA["_stok_produk"];
        $gambarProdukEdit = $rowA["_gambar_produk"];
        $beratProdukEdit = $rowA["_berat_produk"];
        
        $syndicateProdukModalEdit = $syndicateProdukModalEdit.         
                '<div class="modal fade" id="modalProdukEdit-'.$idProdukEdit.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Produk</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="kodeProdukEdit" class="col-sm-4 control-label" style="color: #777;">Kode Produk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kodeProdukEdit" name="kodeProdukEdit" value="'.$idProdukEdit.'" readonly>
                        </div>
                </div>
                <div class="form-group">
                    <label for="namaProdukEdit" class="col-sm-4 control-label" style="color: #777;">Nama Produk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="namaProdukEdit" name="namaProdukEdit" value="'.$namaProdukEdit.'" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="deskripsiProdukEdit" class="col-sm-4 control-label" style="color: #777;">Deskripsi Produk</label>
                        <div style="color: #222;" class="col-sm-6">
                            <textarea class="form-control" name="deskripsiProdukEdit" id="deskripsiProdukEdit" required>'.$deskripsiProdukEdit.'</textarea>
                        </div>
                </div>
                <div class="form-group">
                    <label for="beratProdukEdit" class="col-sm-4 control-label" style="color: #777;">Berat Produk (gr)</label>
                        <div style="color: #222;" class="col-sm-6">
                            <input type="text" class="form-control" id="beratProdukEdit" name="beratProdukEdit" value="'.$beratProdukEdit.'" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="kategoriProduk" class="col-sm-4 control-label" style="color: #777;">Kategori Produk</label>
                        <div style="color: #222;" class="col-sm-6">
                            <select name="kategoriProdukEdit" id="kategoriProdukEdit" class="form-control" required >
                                '.getOptionCategoriesForProduk($database).'
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label for="hargaProduk" class="col-sm-4 control-label" style="color: #777;">Harga Produk</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="hargaProdukEdit" name="hargaProdukEdit" value="'.$hargaProdukEdit.'" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="stokProdukEdit" class="col-sm-4 control-label" style="color: #777;">Stok Awal</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="stokProdukEdit" name="stokProdukEdit" value="'.$stokProdukEdit.'" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="gambarProduk" class="col-sm-4 control-label" style="color: #777;">Gambar Preview<br/><small><i>Format: JPG/PNG<br> Ukuran maksimal: 2MB</i></small></label>
                        <div class="col-sm-6">
                        <img class="img-rounded" width="100" src="'.$site_base.'/upload-media/'.$gambarProdukEdit.'"/>
                            <input type="file" class="form-control" id="gambarProdukEdit" name="gambarProdukEdit">
                        </div>
                </div>
                <div class="form-group">
                    <label for="#" class="col-sm-4 control-label" style="color: #777;">&nbsp;</label>
                        <div>
                            <input type="submit" name="submitProdukEdit" name="submitProdukEdit" class="btn btn-info btn-sm pull-right" value="Simpan Perubahan!" style="margin-right: 40px;">
                        </div>
                </div>
          </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}