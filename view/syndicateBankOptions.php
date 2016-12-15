<?php

$sqlBank = "SELECT * FROM _bank_list";
$queryBank = mysql($database, $sqlBank);
$rowsBank = mysql_num_rows($queryBank);
$syndicateBankList = "";
if($rowsBank > 0){
    while($rowBank = mysql_fetch_assoc($queryBank)){
        $bankName = $rowBank["_bank_name"];
        
        $syndicateBankList = $syndicateBankList.
                '<option id="'.$bankName.'">'.$bankName.'</option>';
        
        
    }
}
else{
    $syndicateBankList = $syndicateBankList.
    '<option>Belum Ada bank terdaftar</option>';
}
