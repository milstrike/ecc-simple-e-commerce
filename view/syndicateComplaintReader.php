<?php

$sql2 = "SELECT * FROM _complaint";
$query2 = mysql($database, $sql2);
$rows2 = mysql_num_rows($query2);
$syndicateComplaintReader = "";
if($rows2 > 0){
    while($row2 = mysql_fetch_assoc($query2)){
        $IDComplaintView = $row2["_id"];
        $IDTiketComplaintView = $row2["_id_tiket"];
        $IDUserComplaintView = $row2["_id_user"];
        $subjectComplaintView = $row2["_subject"];
        $contentComplaintView = $row2["_content"];
        $dateComplaintView = $row2["_id"];
        
        
        
        $syndicateComplaintReader = $syndicateComplaintReader.
                '<div class="modal fade" id="modalReadComplaint-'.$IDTiketComplaintView.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pembaca Aduan</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        <dl class="dl-horizontal">
            <dt>Pengirim</dt>
            <dd>'.getNameUserByUserID($IDUserComplaintView, $database).' | '.$dateComplaintView.'</dd>
            <dt>Judul</dt>
            <dd><strong>'.$subjectComplaintView.'</strong></dd>
            <dt>Pesan</dt>
            <dd>'.$contentComplaintView.'</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <form action="" method="POST">
        <input type="text" id="idComplaint" name="idComplaint" value="'.$IDComplaintView.'" style="visibility: hidden"/>
        <button type="submit" id="submitUpdateComplaint" name="submitUpdateComplaint" class="btn btn-info btn-sm">Tutup</button>    
        </form>
      </div>
    </div>
  </div>
</div>';
    }
}