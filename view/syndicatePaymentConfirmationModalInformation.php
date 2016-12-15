<?php

$sql2 = "SELECT * FROM _confirmation_detail";
$query2 = mysql($database, $sql2);
$rows2 = mysql_num_rows($query2);
$syndicatePaymentConfirmationInformation = "";
if($rows2 > 0){
    while($row2 = mysql_fetch_assoc($query2)){
        $ConfirmationID = $row2["_id"];
        $ConfirmationShoppingCode = $row2["_shopping_code"];
        $ConfirmationTotalPayment = $row2["_total_payment"];
        $ConfirmationDestinationBank = $row2["_destination_bank"];
        $ConfirmationBankSender = $row2["_bank_sender"];
        $ConfirmationAccountNumber = $row2["_account_number"];
        $ConfirmationAccountOwner = $row2["_account_owner"];
        $ConfirmationTransferScan = $row2["_transfer_scan"];
        
        
        $syndicatePaymentConfirmationInformation = $syndicatePaymentConfirmationInformation.
                '<div class="modal fade" id="modalPaymentConfirmationView-'.$ConfirmationShoppingCode.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Informasi Bukti Transfer</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        <dl class="dl-horizontal">
            <dt>Kode belanja</dt>
            <dd>#'.$ConfirmationShoppingCode.'</dd>
            <dt>Jumlah yang harus dibayar</dt>
            
            <dd>Rp'.number_format($ConfirmationTotalPayment, 2).'</dd>
            <dt>Bank Tujuan</dt>
            <dd>'.$ConfirmationDestinationBank.'</dd>
            <dt>Bank Pengirim</dt>
            <dd>'.$ConfirmationBankSender.'</dd>
            <dt>No. Rekening Pengirim</dt>
            <dd>'.$ConfirmationAccountNumber.'</dd>
            <dt>Nama Pemilik Rekening</dt>
            <dd>'.$ConfirmationAccountOwner.'</dd>
            <dt>Bukti Transfer</dt>
            <dd><img src="'.$site_base."/transfer-media/".$ConfirmationTransferScan.'" class="img-responsive"/> </dd>
        </dl>
      </div>
      <div class="modal-footer">
        <form method="POST" action="#">
                <input type="text" value="'.$ConfirmationShoppingCode.'" id="shoppingCode" name="shoppingCode" style="visibility:hidden;">
                <button type="submit" name="submitChanges" id="submitChanges" class="btn btn-info pull-right">Konfirmasi Pembayaran!</button>
            </form>
      </div>
    </div>
  </div>
</div>';
        
    }
}