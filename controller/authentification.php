<?php

$errorLogin = "";

if (isset($_POST['submitLogin'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
        $errorLogin = '<p class="text-error">Username or password can not be empty!</p>';
}
else{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == "admin" && $password == "k3ceb0ngekOr9"){
        $_SESSION["userID"] = "admin";
        $_SESSION["userType"] = "4dm1nm0d3";
        header("location:".$site_base."/apps/syndicate");
    }
    else{
        //Convert to md5
    $username2 = md5($username);
    $password2 = md5($password);


    // To protect MySQL injection for Security purpose
    $username2 = stripslashes($username2);
    $password2 = stripslashes($password2);
    $username2 = mysql_real_escape_string($username2);
    $password2 = mysql_real_escape_string($password2);
    
    $resultCheckLogin = checkLogin($username2, $password2, $database);
    if($resultCheckLogin > 0){
        $_SESSION["userID"] = getIDUserByUsername($username2, $database);
        $_SESSION["userType"] = "cu5t0m312";
        
        $statusActive = getStatusUserByUsername($username2, $database);
        
        
        if($statusActive == 0){
            $errorLogin = '<p class="text-error">Akun Anda dalam keadaan nonaktif, mohon hubungi Admin</p>';
        }
        else{
            echo $_SESSION["userID"];
            //header("Refresh:0");
        }
        
    }
    else{
        $errorLogin = '<p class="text-error">Wrong username or password!</p>';
    }
    }
    
    
}
}