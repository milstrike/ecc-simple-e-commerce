<?php

$sql2 = "SELECT * FROM _inbox where _id_user='".$_SESSION["userID"]."'";
$query2 = mysql($database, $sql2);
$rows2 = mysql_num_rows($query2);
$syndicateUserMailReader = "";
if($rows2 > 0){
    while($row2 = mysql_fetch_assoc($query2)){
        $IDMailView = $row2["_id"];
        $subjectMailView = $row2["_subject"];
        $contentMailView = $row2["_content"];
        $dateMailView = $row2["_date"];
        
        
        $syndicateUserMailReader = $syndicateUserMailReader.
                '<div class="modal fade" id="modalReadMailbox-'.$IDMailView.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Pembaca Pesan</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        <dl class="dl-horizontal">
            <dt>Pengirim</dt>
            <dd>HI! Handycraft Admin | '.$dateMailView.'</dd>
            <dt>Judul</dt>
            <dd><strong>'.$subjectMailView.'</strong></dd>
            <dt>Pesan</dt>
            <dd>'.$contentMailView.'</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <form action="" method="POST">
        <input type="text" id="idMail" name="idMail" value="'.$IDMailView.'" style="visibility: hidden"/>
        <button type="submit" id="submitUpdateMail" name="submitUpdateMail" class="btn btn-info btn-sm">Tutup</button>    
        </form>
      </div>
    </div>
  </div>
</div>';
    }
}