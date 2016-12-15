<?php

$sql2 = "SELECT * FROM _user_detail";
$query2 = mysql($database, $sql2);
$rows2 = mysql_num_rows($query2);
$syndicateUserModalInformation = "";
if($rows2 > 0){
    while($row2 = mysql_fetch_assoc($query2)){
        $IDUserView = $row2["_id_user"];
        $namaUserView = $row2["_name"];
        $tanggalLahirUserView = $row2["_dob"];
        $alamatUserView = $row2["_address"];
        $teleponUserView = $row2["_tel"];
        $emailUserView = $row2["_email"];
        
        
        $syndicateUserModalInformation = $syndicateUserModalInformation.
                '<div class="modal fade" id="modalUserView-'.$IDUserView.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Informasi User</h4>
      </div>
      <div class="modal-body" style="color: #222;">
        <dl class="dl-horizontal">
            <dt>Nama</dt>
            <dd>'.$namaUserView.'</dd>
            <dt>Tanggal Lahir</dt>
            <dd>'.$tanggalLahirUserView.'</dd>
            <dt>Alamat</dt>
            <dd>'.$alamatUserView.'</dd>
            <dt>Telepon</dt>
            <dd>'.$teleponUserView.'</dd>
            <dt>Email</dt>
            <dd>'.$emailUserView.'</dd>
        </dl>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>';
        
    }
}