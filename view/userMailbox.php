<?php

$sqlMail = "SELECT * FROM _inbox where _id_user='".$_SESSION["userID"]."'";
$queryMail = mysql($database, $sqlMail);
$rowsMail = mysql_num_rows($queryMail);
$syndicateUserListMail = "";
if($rowsMail > 0){
    while($rowMail = mysql_fetch_assoc($queryMail)){
        $subjectMail = $rowMail["_subject"];
        $dateMail = $rowMail["_date"];
        $statusMail = $rowMail["_status"];
        $idMail = $rowMail["_id"];
        
        
        if($statusMail == 0){
            $syndicateUserListMail = $syndicateUserListMail.
            '<tr>
                <td><i class="fa fa-envelope"></i></td>
                <td><strong>HI! Handycraft Admin</strong></td>
                <td>'.$subjectMail.'</td>
                <td>'.$dateMail.'</td>
                <td><a href="#" data-toggle="modal" data-target="#modalReadMailbox-'.$idMail.'" style="text-decoration: none;">Baca Pesan</a></td>
            </tr>';
        }
        else{
            $syndicateUserListMail = $syndicateUserListMail.
            '<tr>
                <td><i class="fa fa-envelope-o"></i></td>
                <td>HI! Handycraft Admin</td>
                <td>'.$subjectMail.'</td>
                <td>'.$dateMail.'</td>
                <td><a href="#" data-toggle="modal" data-target="#modalReadMailbox-'.$idMail.'" style="text-decoration: none;">Baca Pesan</a></td>
            </tr>';
        }
    }
}
else{
    $syndicateUserListMail = $syndicateUserListMail.
    '<tr><td colspan="4" style="text-align: center;">Belum ada surat masuk</td></tr>';
}
