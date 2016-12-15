<?php

$sqlD = "SELECT * FROM _produk";
$queryD = mysql($database, $sqlD);
$rowsD = mysql_num_rows($queryD);
$syndicateProdukDeleteConfirmation = "";
if($rowsD > 0){
    while($rowD = mysql_fetch_assoc($queryD)){
        $produkIDDelete = $rowD["_kode_produk"];
        
        $syndicateProdukDeleteConfirmation = $syndicateProdukDeleteConfirmation.         
                '<div class="modal fade" id="modalProdukDelete-'.$produkIDDelete .'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hapus Produk</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        Hapus produk ini?
        <form style="text-align: center;" action="" method="POST">
            <input type="text" name="deleteID" id="deleteID" style="visibility:hidden;" value="'.$produkIDDelete .'"><br/>
            <input type="submit" name="submitDelete" id="submitDelete" class="btn btn-danger btn-sm" value="Hapus Produk Ini!">
        </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}