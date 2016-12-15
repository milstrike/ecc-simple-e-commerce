<?php

$urutan = 1;

$sqlcategoryList = "SELECT * FROM _category";
$querycategoryList = mysql($database, $sqlcategoryList);
$rowscategoryList = mysql_num_rows($querycategoryList);
$syndicatecategoryList = "";
if($rowscategoryList > 0){
    while($rowcategoryList = mysql_fetch_assoc($querycategoryList)){
        
        $categoryID = $rowcategoryList["_id"];
        $categoryNameList = $rowcategoryList["_category"];
        
        
        
            $syndicatecategoryList = $syndicatecategoryList.
            ' <tr>
                <td style="text-align:right;">'.$urutan.'</td>
                <td style="text-align:center;">'.$categoryNameList.'</td>    
                <td style="text-align:center;">
                    <a href="#" data-toggle="modal" data-target="#modalCategoryEdit-'.$categoryID.'" title="Edit Kategori"><i class="fa fa-edit"></i></a> | 
                    <a href="#" data-toggle="modal" data-target="#modalCategoryDelete-'.$categoryID.'" title="Hapus Kategori"><i class="fa fa-trash-o"></i></a>
                </td>
              </tr>';
            
            $urutan++;
        
    }
}
else{
    $syndicatecategoryList = $syndicatecategoryList.
    '<tr><td colspan="3" style="text-align: center;">Anda belum pernah membuat Kategori</td></tr>';
}
