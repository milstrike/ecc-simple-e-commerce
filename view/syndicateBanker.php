<?php

$sqlBank = "SELECT * FROM _bank_list";
$queryBank = mysql($database, $sqlBank);
$rowsBank = mysql_num_rows($queryBank);
$syndicateBankList = "";
if($rowsBank > 0){
    while($rowBank = mysql_fetch_assoc($queryBank)){
        $accountNumber = $rowBank["_account_number"];
        $bankName = $rowBank["_bank_name"];
        $accountOwner = $rowBank["_account_owner"];
        
        $syndicateBankList = $syndicateBankList.
                '<li style="padding-bottom: 5px;">
                                                <strong>'.$bankName.'</strong><br/>
                                                '.$accountNumber.'<br/>
                                                a.n. '.$accountOwner.'
                                            </li>';
        
        
    }
}
else{
    $syndicateBankList = $syndicateBankList.
    '<li style="padding-bottom: 5px;">Belum ada Bank Terdaftar.</li>';
}
