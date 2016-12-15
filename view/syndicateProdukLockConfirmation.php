<?php

$sqlC = "SELECT * FROM _produk";
$queryC = mysql($database, $sqlC);
$rowsC = mysql_num_rows($queryC);
$syndicateProdukLockConfirmation = "";
if($rowsC > 0){
    while($rowC = mysql_fetch_assoc($queryC)){
        $idProdukLock = $rowC["_kode_produk"];
        $valueProdukLock = $rowC["_status"];
        
        $syndicateProdukLockConfirmation = $syndicateProdukLockConfirmation.         
                '<div class="modal fade" id="modalProdukLock-'.$idProdukLock.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Status Produk</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        Ubah status produk ini?
        <form style="text-align: center;" action="" method="POST">
            <input type="text" name="lockProdukValue" id="lockProdukValue" style="visibility:hidden;" value="'.$valueProdukLock.'"><br/>
            <input type="text" name="lockID" id="lockID" style="visibility:hidden;" value="'.$idProdukLock.'"><br/>
            <input type="submit" name="submitLock" id="submitLock" class="btn btn-danger btn-sm" value="Ubah Status Produk!">
        </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}