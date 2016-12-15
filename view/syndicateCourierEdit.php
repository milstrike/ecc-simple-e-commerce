<?php

$sqlCourierEdit = "SELECT * FROM _courier";
$queryCourierEdit = mysql($database, $sqlCourierEdit);
$rowsCourierEdit = mysql_num_rows($queryCourierEdit);
$syndicateCourierEdit = "";
if($rowsCourierEdit > 0){
    while($rowCourierEdit = mysql_fetch_assoc($queryCourierEdit)){
        $idEdit = $rowCourierEdit["_id"];
        $courierNameEdit = $rowCourierEdit["_courier_name"];
        $courierServiceEdit = $rowCourierEdit["_service_type"];
        $courierServiceDescriptionEdit = $rowCourierEdit["_description"];
        $courierServiceCostEdit = $rowCourierEdit["_cost"];
        
        $syndicateCourierEdit = $syndicateCourierEdit.
                '<div class="modal fade" id="modalEditCourier-'.$idEdit.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Kurir</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="editCourier" name="editCourier" style="padding-bottom: 40px;" method="POST">
          <input type="text" name="idCourierEdit" id="idCourierEdit" value="'.$idEdit.'" style="visibility: hidden">
            <div class="form-group">
                                <label for="namaKurirEdit" class="col-sm-4 control-label" style="color: #777;">Nama Kurir</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaKurirEdit" name="namaKurirEdit" placeholder="Nama Kurir" value="'.$courierNameEdit.'" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="namaLayananEdit" class="col-sm-4 control-label" style="color: #777;">Nama Layanan</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaLayananEdit" name="namaLayananEdit" placeholder="Nama Layanan" value="'.$courierServiceEdit.'" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsiLayananEdit" class="col-sm-4 control-label" style="color: #777;">Destinasi</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="deskripsiLayananEdit" id="deskripsiLayananEdit" placeholder="Destinasi" required disabled>'.$courierServiceDescriptionEdit.'</textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="biayaLayananEdit" class="col-sm-4 control-label" style="color: #777;">Biaya Layanan</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="biayaLayananEdit" name="biayaLayananEdit" placeholder="Contoh: Rp150.000,00 ditulis 150000" value="'.$courierServiceCostEdit.'" required>
                                        </div>
                                </div>
                <input type="submit" class="btn btn-info pull-right btn-sm" name="submitCourierEdit" id="submitCourierEdit" value="Update Data Kurir">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';
        
        
    }
}
