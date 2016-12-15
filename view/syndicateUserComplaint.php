<?php

$sqlComplaint = "SELECT * FROM _complaint where _id_user='".$_SESSION["userID"]."'";
$queryComplaint = mysql($database, $sqlComplaint);
$rowsComplaint = mysql_num_rows($queryComplaint);
$syndicateUserListComplaint = "";
if($rowsComplaint > 0){
    while($rowComplaint = mysql_fetch_assoc($queryComplaint)){
        $subjectComplaint = $rowComplaint["_subject"];
        $ticketComplaint = $rowComplaint["_id_tiket"];
        $dateComplaint = $rowComplaint["_date"];
        $statusComplaint = $rowComplaint["_status"];
        
        
        if($statusComplaint == 0){
            $syndicateUserListComplaint = $syndicateUserListComplaint.
            ' <tr>
                <td>#'.$ticketComplaint.'</td>
                <td>'.$subjectComplaint.'</td>
                <td><i class="fa fa-file"></i></td>
              </tr>';
        }
        else{
            $syndicateUserListComplaint = $syndicateUserListComplaint.
            ' <tr>
                <td>#'.$ticketComplaint.'</td>
                <td>'.$subjectComplaint.'</td>
                <td><i class="fa fa-file-o"></i></td>
              </tr>';
        }
    }
}
else{
    $syndicateUserListComplaint = $syndicateUserListComplaint.
    '<tr><td colspan="3" style="text-align: center;">Anda belum pernah membuat Aduan</td></tr>';
}
