<?php

$sql = "SELECT * FROM _produk";
$query = mysql($database, $sql);
$rows = mysql_num_rows($query);
$syndicateProductList = "";
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $kodeProdukView = $row["_kode_produk"];
        $namaProdukView = $row["_nama_produk"];
        $gambarProdukView = $row["_gambar_produk"];
        $stokProdukView = $row["_stok_produk"];
        $statusProdukView = $row["_status"];
        
        if($statusProdukView == 1){
            $syndicateProductList = $syndicateProductList.
                '<tr>
                              <td style="text-align: center;">
                                  '.$kodeProdukView.'
                              </td>
                              <td style="text-align: center;">
                                  '.$namaProdukView.'
                              </td>
                              <td style="text-align: center;">
                                  <img class="img-rounded" width="100" src="'.$site_base.'/upload-media/'.$gambarProdukView.'"/>
                              </td>
                              <td style="text-align: center;">
                                  '.$stokProdukView.'
                              </td>
                              <td style="text-align: center;">
                                  <a href="#" data-toggle="modal" data-target="#modalProdukEdit-'.$kodeProdukView.'" style="text-decoration: none;" title="edit produk"><i class="fa fa-pencil"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalProdukView-'.$kodeProdukView.'" style="text-decoration: none;" title="info produk"><i class="fa fa-info-circle"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalProdukLock-'.$kodeProdukView.'" style="text-decoration: none;" title="non-aktifkan produk"><i class="fa fa-arrow-down"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalProdukDelete-'.$kodeProdukView.'" style="text-decoration: none;" title="hapus produk"><i class="fa fa-trash-o"></i></a>&nbsp;
                              </td>
                          </tr>';
        }
        else{
            $syndicateProductList = $syndicateProductList.
                '<tr style="background-color: #ce8483;">
                              <td style="text-align: center;">
                                  '.$kodeProdukView.'
                              </td>
                              <td style="text-align: center;">
                                  '.$namaProdukView.'
                              </td>
                              <td style="text-align: center;">
                                  <img class="img-rounded" width="100" src="'.$site_base.'/upload-media/'.$gambarProdukView.'"/>
                              </td>
                              <td style="text-align: center;">
                                  '.$stokProdukView.'
                              </td>
                              <td style="text-align: center;">
                                  <a href="#" data-toggle="modal" data-target="#modalProdukEdit-'.$kodeProdukView.'" style="text-decoration: none;" title="edit produk"><i class="fa fa-pencil"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalProdukView-'.$kodeProdukView.'" style="text-decoration: none;" title="info produk"><i class="fa fa-info-circle"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalProdukLock-'.$kodeProdukView.'" style="text-decoration: none;" title="aktifkan produk"><i class="fa fa-arrow-up"></i></a>&nbsp;
                                  <a href="#" data-toggle="modal" data-target="#modalProdukDelete-'.$kodeProdukView.'" style="text-decoration: none;" title="hapus produk"><i class="fa fa-trash-o"></i></a>&nbsp;
                              </td>
                          </tr>';
        }        
    }
}
else{
    $syndicateProductList = $syndicateProductList.
    '<tr><td colspan="5" style="text-align: center;">Belum ada produk ditambahkan</td></tr>';
}
