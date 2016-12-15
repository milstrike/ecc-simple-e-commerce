<?php

$sqlComplaint = "SELECT * FROM _complaint";
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
                <td><a href="#" data-toggle="modal" data-target="#modalReadComplaint-'.$ticketComplaint.'"><i class="fa fa-file"></i></a></td>
              </tr>';
        }
        else{
            $syndicateUserListComplaint = $syndicateUserListComplaint.
            ' <tr>
                <td>#'.$ticketComplaint.'</td>
                <td>'.$subjectComplaint.'</td>
                <td><a href="#" data-toggle="modal" data-target="#modalReadComplaint-'.$ticketComplaint.'"><i class="fa fa-file-o"></i></a></td>
              </tr>';
        }
    }
}
else{
    $syndicateUserListComplaint = $syndicateUserListComplaint.
    '<tr><td colspan="3" style="text-align: center;">Anda belum pernah membuat Aduan</td></tr>';
}
