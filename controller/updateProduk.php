<?php

$error;

if (isset($_POST["submitProdukEdit"])) {
    $kodeProdukToEdit = $_POST["kodeProdukEdit"];
    $namaProdukToEdit = $_POST["namaProdukEdit"];
    $deskripsiProdukToEdit = $_POST["deskripsiProdukEdit"];
    $hargaProdukToEdit = $_POST["hargaProdukEdit"];
    $stokProdukToEdit = $_POST["stokProdukEdit"];
    $kategoriProdukToEdit = $_POST["kategoriProdukEdit"];
    $file_size_edit = $_FILES['gambarProdukEdit']['size'];
    
    if($file_size_edit == 0){
        $sqlE = "UPDATE _produk SET _kode_category='".$kategoriProdukToEdit."', _nama_produk='".$namaProdukToEdit."', _deskripsi_produk='".$deskripsiProdukToEdit."', _harga_produk='".$hargaProdukToEdit."', _stok_produk='".$stokProdukToEdit."' WHERE _kode_produk='".$kodeProdukToEdit."'";
        $queryE = mysql($database, $sqlE);
    }
    else{
        $file_name_edit = $_FILES['gambarProdukEdit']['name'];
        $file_tmp_edit =$_FILES['gambarProdukEdit']['tmp_name'];
        $file_type_edit=$_FILES['gambarProdukEdit']['type'];   
        $file_ext_edit=strtolower(end(explode('.',$_FILES['gambarProdukEdit']['name'])));		
        $expensions_edit= array("jpeg","jpg","png"); 		
        $gambarProdukUploaded_edit = $kodeProdukToEdit.".".$file_ext_edit;
        move_uploaded_file($file_tmp_edit,"../../upload-media/".$gambarProdukUploaded_edit);
        
        $sqlE = "UPDATE _produk SET _nama_produk='".$namaProdukToEdit."', _deskripsi_produk='".$deskripsiProdukToEdit."', _harga_produk='".$hargaProdukToEdit."', _stok_produk='".$stokProdukToEdit."', gambar_produk='".$gambarProdukUploaded_edit."' WHERE _kode_produk='".$kodeProdukToEdit."'";
        $queryE = mysql($database, $sqlE);
    }    
   header("Refresh:0");
}

