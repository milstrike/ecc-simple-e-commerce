<?php

$sqlE = "SELECT * FROM _shipping_address";
$queryE = mysql($database, $sqlE);
$rowsE = mysql_num_rows($queryE);
$syndicateAddressUpgradeConfirmation = "";
if($rowsE > 0){
    while($rowE = mysql_fetch_assoc($queryE)){
        $addressIDUpgrade = $rowE["_id"];
        
        $syndicateAddressUpgradeConfirmation = $syndicateAddressUpgradeConfirmation.         
                '<div class="modal fade" id="modalAddressUpgrade-'.$addressIDUpgrade.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Aktivasi Alamat</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        Aktifkan alamat ini?
        <form style="text-align: center;" action="" method="POST">
            <input type="text" name="upgradeID" id="upgradeID" style="visibility:hidden;" value="'.$addressIDUpgrade .'"><br/>
            <input type="submit" name="submitUpgrade" id="submitUpgrade" class="btn btn-danger btn-sm" value="Aktifkan Alamat Ini!">
        </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}