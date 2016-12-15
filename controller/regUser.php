<?php

$error;

if (isset($_POST["createUser"])) {
    $username = $_POST["regUsername"];
    $password = $_POST["regPassword1"];
    $namaLengkap = $_POST["regNama"];
    $tanggalLahir = $_POST["regTanggalLahir"];
    $alamat = $_POST["regAlamat"];
    $telepon = $_POST["regPhone"];
    $email = $_POST["regEmail"];
    $status = "1";
    
    //Convert to md5
    $username2 = md5($username);
    $password2 = md5($password);


    // To protect MySQL injection for Security purpose
    $username2 = stripslashes($username2);
    $password2 = stripslashes($password2);
    $username2 = mysql_real_escape_string($username2);
    $password2 = mysql_real_escape_string($password2);
    
    
    $sql = "INSERT INTO _user (_id_user, _user, _umask, _pass, _pmask, _status, _created) VALUES ('NULL', '$username2', '$username', '$password2', '$password', '$status', CURRENT_TIMESTAMP)";
    $query = mysql($database, $sql);

    $sql2 = "INSERT INTO _user_detail (_id_user, _name, _dob, _address, _tel, _email) VALUES ('NULL', '$namaLengkap', '$tanggalLahir', '$alamat', '$telepon', '$email')";
    $query2 = mysql($database, $sql2);
    
    $error = '<div class="alert alert-success"><strong>Akun Berhasil Dibuat!</strong> Silakan login menggunakan akun yang telah dibuat.</div>';
}

