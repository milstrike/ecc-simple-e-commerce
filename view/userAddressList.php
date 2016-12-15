<?php

$sqlAddress = "SELECT * FROM _shipping_address where _id_user='".$_SESSION["userID"]."'";
$queryAddress = mysql($database, $sqlAddress);
$rowsAddress = mysql_num_rows($queryAddress);
$syndicateUserListAddress = "";
if($rowsAddress > 0){
    while($rowAddress = mysql_fetch_assoc($queryAddress)){
        $listIDAddress = $rowAddress["_id"];
        $listAddress = $rowAddress["_address"];
        $listShippingAddress = $rowAddress["_shipping_address"];
        $statusAddressActive = $rowAddress["_status"];
        
        if($statusAddressActive == 0){
            $syndicateUserListAddress = $syndicateUserListAddress.
        '<div class="container-fluid">
                                <div class="col-md-6">
                                    <div class="well" style="color: #222;">
                                        '.$listAddress.' '.$listShippingAddress.'<br/>
                                    <a href="#" data-toggle="modal" data-target="#modalAddressDelete-'.$listIDAddress.'" class="btn btn-link" style="text-decoration: none;">Hapus Alamat</a> | 
                                    <a href="#" data-toggle="modal" data-target="#modalAddressUpgrade-'.$listIDAddress.'" class="btn btn-link" style="text-decoration: none;">Jadikan Alamat Aktif</a>
                                    </div>
                                </div>
                            </div>';
        }
        else{
            $syndicateUserListAddress = $syndicateUserListAddress.
        '<div class="container-fluid">
                                <div class="col-md-6">
                                    <div class="well" style="color: #222;">
                                        '.$listAddress.' '.$listShippingAddress.'<br/>
                                    <a href="#" data-toggle="modal" data-target="#modalAddressDelete-'.$listIDAddress.'" class="btn btn-link" style="text-decoration: none;">Hapus Alamat</a>                                    
                                    </div>
                                </div>
                            </div>';
        }
    }
}
else{
    $syndicateUserListAddress = $syndicateUserListAddress.
    '<div class="container-fluid">
                                <div class="col-md-6">
                                    <div class="well" style="color: #222;">
                                        Belum Ada Alamat Tersimpan
                                    </div>
                                </div>
                            </div>';
}
