<?php

$urutan = 1;

$sqlBankList = "SELECT * FROM _bank_list";
$queryBankList = mysql($database, $sqlBankList);
$rowsBankList = mysql_num_rows($queryBankList);
$syndicateBankList = "";
if($rowsBankList > 0){
    while($rowBankList = mysql_fetch_assoc($queryBankList)){
        
        $bankID = $rowBankList["_id"];
        $bankNameList = $rowBankList["_bank_name"];
        $bankAccountNumber = $rowBankList["_account_number"];
        $bankAccountOwner = $rowBankList["_account_owner"];
        
        
        
            $syndicateBankList = $syndicateBankList.
            ' <tr>
                <td style="text-align:right;">'.$urutan.'</td>
                <td style="text-align:center;">'.$bankNameList.'</td>    
                <td style="text-align:left;">'.$bankAccountNumber.'</td>
                <td style="text-align:left;">'.$bankAccountOwner.'</td>
                <td style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#modalEditBank-'.$bankID.'" title="Edit Data Rekening"><i class="fa fa-edit"></i></a> | 
                    <a href="#" data-toggle="modal" data-target="#modalDeleteBank-'.$bankID.'" title="Hapus Data Rekening"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>';
            
            $urutan++;
        
    }
}
else{
    $syndicateBankList = $syndicateBankList.
    '<tr><td colspan="5" style="text-align: center;">Anda belum pernah memasukkan Akun Bank</td></tr>';
}
