<?php

$sqlBankerEdit = "SELECT * FROM _bank_list";
$queryBankerEdit = mysql($database, $sqlBankerEdit);
$rowsBankerEdit = mysql_num_rows($queryBankerEdit);
$syndicateBankerEdit = "";
if($rowsBankerEdit > 0){
    while($rowBankerEdit = mysql_fetch_assoc($queryBankerEdit)){
        $idEdit = $rowBankerEdit["_id"];
        $accountNumberEdit = $rowBankerEdit["_account_number"];
        $bankNameEdit = $rowBankerEdit["_bank_name"];
        $accountOwnerEdit = $rowBankerEdit["_account_owner"];
        
        $syndicateBankerEdit = $syndicateBankerEdit.
                '<div class="modal fade" id="modalEditBank-'.$idEdit.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Bank</strong></h4>
      </div>
      <div class="modal-body">
          <form role="form" class="form-horizontal" action="" id="editBankAccount" name="editBankAccount" style="padding-bottom: 40px;" method="POST">
          <input type="text" name="idBankEdit" id="idBankEdit" value="'.$idEdit.'" style="visibility: hidden">
            <div class="form-group">
                                    <label for="namaBankEdit" class="col-sm-4 control-label" style="color: #777;">Nama Bank</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="namaBankEdit" name="namaBankEdit" placeholder="Nama Bank" value="'.$bankNameEdit.'" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="nomorRekeningEdit" class="col-sm-4 control-label" style="color: #777;">Password</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nomorRekeningEdit" name="nomorRekeningEdit" placeholder="Nomor Rekening" value="'.$accountNumberEdit.'" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="pemilikRekeningEdit" class="col-sm-4 control-label" style="color: #777;">Nama Pemilik Rekening</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="pemilikRekeningEdit" name="pemilikRekeningEdit" placeholder="Nama Pemilik Rekening" value="'.$accountOwnerEdit.'" required>
                                        </div>
                                </div>
                <input type="submit" class="btn btn-info pull-right btn-sm" name="submitBankAccountEdit" id="submitBankAccountEdit" value="Update Data Bank">
            </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';
        
        
    }
}
