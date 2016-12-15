<?php

$sql6 = "SELECT * FROM _user";
$query6 = mysql($database, $sql6);
$rows6 = mysql_num_rows($query6);
$syndicateUserDeleteConfirmation = "";
if($rows6 > 0){
    while($row6 = mysql_fetch_assoc($query6)){
        $userIDDelete = $row6["_id_user"];
        
        $syndicateUserDeleteConfirmation = $syndicateUserDeleteConfirmation.         
                '<div class="modal fade" id="modalUserDelete-'.$userIDDelete.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        Hapus user ini?
        <form style="text-align: center;" action="" method="POST">
            <input type="text" name="deleteID" id="deleteID" style="visibility:hidden;" value="'.$userIDDelete.'"><br/>
            <input type="submit" name="submitDelete" id="submitDelete" class="btn btn-danger btn-sm" value="Hapus User Ini!">
        </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}