<?php

$error;

if (isset($_POST["submitProduk"])) {
    $kodeProduk = $_POST["kodeProduk"];
    $namaProduk = $_POST["namaProduk"];
    $deskripsiProduk = $_POST["deskripsiProduk"];
    $hargaProduk = $_POST["hargaProduk"];
    $stokProduk = $_POST["stokProduk"];
    $kategoriProduk = $_POST["kategoriProduk"];
    $beratProduk = $_POST["beratProduk"];
    $status = "1";
    $totalClick = "0";
    
    
    $file_name = $_FILES['gambarProduk']['name'];
    $file_size =$_FILES['gambarProduk']['size'];
    $file_tmp =$_FILES['gambarProduk']['tmp_name'];
    $file_type=$_FILES['gambarProduk']['type'];   
    $file_ext=strtolower(end(explode('.',$_FILES['gambarProduk']['name'])));		
    $expensions= array("jpeg","jpg","png"); 		
    $gambarProdukUploaded = $kodeProduk.".".$file_ext;
    move_uploaded_file($file_tmp,"../../upload-media/".$gambarProdukUploaded);
    
    
        
    $sql = "INSERT INTO _produk (_id, _kode_produk, _kode_category, _nama_produk, _deskripsi_produk, _berat_produk, _harga_produk, _stok_produk, _gambar_produk, _status, _total_click) VALUES ('NULL', '$kodeProduk', '$kategoriProduk', '$namaProduk', '$deskripsiProduk', '$beratProduk', '$hargaProduk', '$stokProduk', '$gambarProdukUploaded', '$status', '$totalClick')";
    $query = mysql($database, $sql);
    
    $error = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Produk Berhasil Ditambahkan!</strong></div>';
}

