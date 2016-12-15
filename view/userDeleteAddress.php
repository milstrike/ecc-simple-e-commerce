<?php

$sqlD = "SELECT * FROM _shipping_address";
$queryD = mysql($database, $sqlD);
$rowsD = mysql_num_rows($queryD);
$syndicateAddressDeleteConfirmation = "";
if($rowsD > 0){
    while($rowD = mysql_fetch_assoc($queryD)){
        $addressIDDelete = $rowD["_id"];
        
        $syndicateAddressDeleteConfirmation = $syndicateAddressDeleteConfirmation.         
                '<div class="modal fade" id="modalAddressDelete-'.$addressIDDelete.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hapus Alamat Pengiriman</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        Hapus alamat ini?
        <form style="text-align: center;" action="" method="POST">
            <input type="text" name="deleteID" id="deleteID" style="visibility:hidden;" value="'.$addressIDDelete .'"><br/>
            <input type="submit" name="submitDelete" id="submitDelete" class="btn btn-danger btn-sm" value="Hapus Alamat Ini!">
        </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}