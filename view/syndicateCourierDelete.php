<?php

$sqlCourierDelete = "SELECT * FROM _courier";
$queryCourierDelete = mysql($database, $sqlCourierDelete);
$rowsCourierDelete = mysql_num_rows($queryCourierDelete);
$syndicateCourierDelete = "";
if($rowsCourierDelete > 0){
    while($rowCourierDelete = mysql_fetch_assoc($queryCourierDelete)){
        $idDelete = $rowCourierDelete["_id"];
        
        $syndicateCourierDelete = $syndicateCourierDelete.
                '<div class="modal fade" id="modalDeleteCourier-'.$idDelete.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data Kurir</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="removeCourier" name="removeCourier" style="padding-bottom: 40px;" method="POST">
          <input type="text" name="idCourierDelete" id="idCourierDelete" value="'.$idDelete.'" style="visibility: hidden">
            <div class="form-group">
                                    <label for="" class="col-sm-0 control-label" style="color: #777;"></label>
                                        <div class="col-sm-12" style="color: #777;">
                                            Hapus data kurir ini?
                                        </div>
                                </div>
                <input type="submit" class="btn btn-danger pull-right btn-sm" name="submitCourierDelete" id="submitCourierDelete" value="Hapus Data Kurir">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';
        
        
    }
}
