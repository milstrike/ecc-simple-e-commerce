<?php

$sqlShippingModal = "SELECT * FROM _shipping";
$queryShippingModal = mysql($database, $sqlShippingModal);
$rowsShippingModal = mysql_num_rows($queryShippingModal);
$syndicateUserListShippingModal = "";
if($rowsShippingModal > 0){
    while($rowShippingModal = mysql_fetch_assoc($queryShippingModal)){
        $listIDShippingModal = $rowShippingModal["_id"];
        $shoppingCodeModal = $rowShippingModal["_shopping_code"];
        $kurirShippingModal = $rowShippingModal["_courier"];
        $trackingShippingModal = $rowShippingModal["_tracking_code"];
        
        
        $syndicateUserListShippingModal = $syndicateUserListShippingModal.
        '<!-- Modal Tambah Produk -->
<div class="modal fade" id="modalEditShipping-'.$listIDShippingModal.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Kontrol Shipping: #"'.$shoppingCodeModal.'"</h4>
      </div>
      <div class="modal-body">
      <legend>Informasi Kurir dan Nomor Tracking</legend>
          <form class="form-horizontal" role="form" method="POST" action="">
                <div class="form-group">
                    <label for="kodeProduk" class="col-sm-4 control-label" style="color: #777;">Kurir</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kurirUpdate" name="kurirUpdate" placeholder="Contoh: KE12345" required value="'.$kurirShippingModal.'">
                        </div>
                </div>
                <div class="form-group">
                    <label for="namaProduk" class="col-sm-4 control-label" style="color: #777;">Kode Tracking</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kodeTracking" name="kodeTracking" placeholder="Contoh: 123456ABC" value="'.$trackingShippingModal.'"required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="idShipping" class="col-sm-4 control-label" style="color: #777;"></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="idShipping" name="idShipping" value="'.$listIDShippingModal.'" style="visibility:hidden;">
                        </div>
                </div>
                <div class="form-group">
                    <label for="#" class="col-sm-4 control-label" style="color: #777;">&nbsp;</label>
                        <div>
                            <input type="submit" name="updateShipping" name="updateShipping" class="btn btn-info btn-sm pull-right" value="Simpan Perubahan!" style="margin-right: 40px;">
                        </div>
                </div>
          </form>
          <legend>Ubah Status Shipping</legend>
          <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="idShipping" class="col-sm-4 control-label" style="color: #777;"></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="idShipping" name="idShipping" value="'.$listIDShippingModal.'" style="visibility:hidden;">
                        </div>
                </div>
                <div class="form-group">
                    <label for="#" class="col-sm-4 control-label" style="color: #777;">&nbsp;</label>
                        <div>
                            <input type="submit" name="upgradeShipping" name="upgradeShipping" class="btn btn-info btn-sm pull-right" value="Update Status Shipping!" style="margin-right: 40px;">
                        </div>
                </div>
          </form>
          
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';
        
    }
}
