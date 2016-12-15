<?php

$sql = "SELECT * FROM _user";
$query = mysql($database, $sql);
$rows = mysql_num_rows($query);
$syndicateUserList = "";
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $userIDView = $row["_id_user"];
        $usernameView = $row["_umask"];
        $activeStatus = $row["_status"];
        
        
        if($activeStatus == 1){
            $syndicateUserList = $syndicateUserList.
                '<tr>
                              <td style="text-align: center;">
                                  '.$userIDView.'
                              </td>
                              <td style="text-align: center;">
                                  '.$usernameView.'
                              </td>
                              <td style="text-align: center;">
                                  <a href="#" data-toggle="modal" data-target="#modalUserView-'.$userIDView.'" style="text-decoration: none;" title="info user"><i class="fa fa-info-circle"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalUserLock-'.$userIDView.'" style="text-decoration: none;" title="non-aktifkan user"><i class="fa fa-lock"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalUserDelete-'.$userIDView.'" style="text-decoration: none;" title="hapus user"><i class="fa fa-trash-o"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalUserMailbox-'.$userIDView.'" style="text-decoration: none;" title="kirim pesan ke user"><i class="fa fa-envelope"></i></a>&nbsp;
                              </td>
                          </tr>';
        }
        else{
            $syndicateUserList = $syndicateUserList.
                '<tr style="background-color: #ce8483;">
                              <td style="text-align: center;">
                                  '.$userIDView.'
                              </td>
                              <td style="text-align: center;">
                                  '.$usernameView.'
                              </td>
                              <td style="text-align: center;">
                                  <a href="#" data-toggle="modal" data-target="#modalUserView-'.$userIDView.'" style="text-decoration: none;" title="info user"><i class="fa fa-info-circle"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalUserLock-'.$userIDView.'" style="text-decoration: none;" title="non-aktifkan user"><i class="fa fa-lock"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalUserDelete-'.$userIDView.'" style="text-decoration: none;" title="hapus user"><i class="fa fa-trash-o"></i></a>&nbsp;
                                  <a href="#" style="text-decoration: none;" title="kirim pesan ke user"><i class="fa fa-envelope"></i></a>&nbsp;
                              </td>
                          </tr>';
        }
    }
}
else{
    $syndicateUserList = $syndicateUserList.
    '<tr><td colspan="3" style="text-align: center;">Belum ada user terdaftar</td></tr>';
}
