<?php

$sql8 = "SELECT * FROM _user";
$query8 = mysql($database, $sql8);
$rows8 = mysql_num_rows($query8);
$syndicateUserMailbox = "";
if($rows8 > 0){
    while($row8 = mysql_fetch_assoc($query8)){
        $userIDMailbox = $row8["_id_user"];
        
        $syndicateUserMailbox = $syndicateUserMailbox.         
                '<div class="modal fade" id="modalUserMailbox-'.$userIDMailbox.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Kirim Pesan Ke User</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
            <input type="text" name="mailboxID" id="mailboxID" style="visibility:hidden;" value="'.$userIDMailbox.'">
            <div class="form-group">
                <label for="subjekMail" class="col-sm-4 control-label" style="color: #777;">Judul</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subjekMail" name="subjekMail" required>
                    </div>
            </div>
            <div class="form-group">
                <label for="contentMail" class="col-sm-4 control-label" style="color: #777;">Isi Pesan</label>
                    <div style="color: #222;" class="col-sm-6">
                        <textarea class="form-control" name="contentMail" id="contentMail" required></textarea>
                    </div>
            </div>
            <div class="form-group">
                <label for="#" class="col-sm-4 control-label" style="color: #777;">&nbsp;</label>
                    <div>
                        <input type="submit" col="10" name="submitMail" name="submitMail" class="btn btn-info btn-sm pull-right" value="Kirim Pesan" style="margin-right: 40px;">
                    </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>'; 
    }
}