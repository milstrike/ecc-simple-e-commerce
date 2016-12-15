<?php

$sqlBankerDelete = "SELECT * FROM _bank_list";
$queryBankerDelete = mysql($database, $sqlBankerDelete);
$rowsBankerDelete = mysql_num_rows($queryBankerDelete);
$syndicateBankerDelete = "";
if($rowsBankerDelete > 0){
    while($rowBankerDelete = mysql_fetch_assoc($queryBankerDelete)){
        $idDelete = $rowBankerDelete["_id"];
        
        $syndicateBankerDelete = $syndicateBankerDelete.
                '<div class="modal fade" id="modalDeleteBank-'.$idDelete.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data Bank</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="removeBankAccount" name="removeBankAccount" style="padding-bottom: 40px;" method="POST">
          <input type="text" name="idBankDelete" id="idBankDelete" value="'.$idDelete.'" style="visibility: hidden">
            <div class="form-group">
                                    <label for="" class="col-sm-4 control-label" style="color: #777;"></label>
                                        <div class="col-sm-6" style="color: #777;">
                                            Hapus data Bank ini?
                                        </div>
                                </div>
                <input type="submit" class="btn btn-danger pull-right btn-sm" name="submitBankAccountDelete" id="submitBankAccountDelete" value="Hapus Data Bank">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';
        
        
    }
}
