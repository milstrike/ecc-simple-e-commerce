<?php

$sql3 = "SELECT * FROM _user";
$query3 = mysql($database, $sql3);
$rows3 = mysql_num_rows($query3);
$syndicateUserLockConfirmation = "";
if($rows3 > 0){
    while($row3 = mysql_fetch_assoc($query3)){
        $userIDLock = $row3["_id_user"];
        $valueLock = $row3["_status"];
        
        $syndicateUserLockConfirmation = $syndicateUserLockConfirmation.         
                '<div class="modal fade" id="modalUserLock-'.$userIDLock.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Status User</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        Ubah status user ini?
        <form style="text-align: center;" action="" method="POST">
            <input type="text" name="lockValue" id="lockValue" style="visibility:hidden;" value="'.$valueLock.'"><br/>
            <input type="text" name="lockID" id="lockID" style="visibility:hidden;" value="'.$userIDLock.'"><br/>
            <input type="submit" name="submitLock" id="submitLock" class="btn btn-danger btn-sm" value="Ubah Status User!">
        </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}