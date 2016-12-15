<?php

function checkLogin($username, $password, $database){
    $error = 0;
    $sql = "SELECT * FROM _user WHERE _user='".$username."' AND _pass='".$password."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    if ($rows > 0) {
        $error++;
    }
    else{
        
    }
    return $error;
}

function getIDUserByUsername($username, $database){
    $sql = "SELECT * FROM _user WHERE _user='".$username."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_id_user'];
    return $data;
}

function getStatusUserByUsername($username, $database){
    $sql = "SELECT * FROM _user WHERE _user='".$username."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_status'];
    return $data;
}

function getNameUserByUserID($userID, $database){
    $sql = "SELECT * FROM _user_detail WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_name'];
    return $data;
}

function getDOBUserByUserID($userID, $database){
    $sql = "SELECT * FROM _user_detail WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_dob'];
    return $data;
}

function getAddressUserByUserID($userID, $database){
    $sql = "SELECT * FROM _user_detail WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_address'];
    return $data;
}

function getPhoneUserByUserID($userID, $database){
    $sql = "SELECT * FROM _user_detail WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_tel'];
    return $data;
}

function getEmailUserByUserID($userID, $database){
    $sql = "SELECT * FROM _user_detail WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_email'];
    return $data;
}

function getUsernameByUserID($userID, $database){
    $sql = "SELECT * FROM _user WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_umask'];
    return $data;
}

function getInvoiceCounterByUserID($userID, $database){
    $data = 0;
    $sql = "SELECT * FROM _invoice WHERE _id_user='".$userID."' AND _status='1'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getMailCounterByUserID($userID, $database){
    $data = 0;
    $sql = "SELECT * FROM _inbox WHERE _id_user='".$userID."' AND _status='0'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getShoppingCartCounterByUserID($userID, $database){
    $data = 0;
    $sql = "SELECT * FROM _shopping_cart WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getShippingCounterByUserID($userID, $database){
    $data = 0;
    $sql = "SELECT * FROM _shipping WHERE _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getActiveAddressByUserID($userID, $database){
    $sql = "SELECT * FROM _shipping_address WHERE _id_user='".$userID."' AND _status='1'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data1 = $row['_address'];
    $data2 = $row['_shipping_address'];
    $data = $data1." ".$data2;
    return $data;
}

function getActiveShippingAddressByUserID($userID, $database){
    $sql = "SELECT * FROM _shipping_address WHERE _id_user='".$userID."' AND _status='1'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_shipping_address'];
    return $data;
}

function getProductByProductID($produkID, $database){
    $sql = "SELECT * FROM _produk WHERE _kode_produk='".$produkID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_nama_produk'];
    return $data;
}

function getProductPriceByProductID($produkID, $database){
    $sql = "SELECT * FROM _produk WHERE _kode_produk='".$produkID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_harga_produk'];
    return $data;
}

function getProductWeightByProductID($produkID, $database){
    $sql = "SELECT * FROM _produk WHERE _kode_produk='".$produkID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_berat_produk'];
    return $data;
}

function getProductStockByProductID($produkID, $database){
    $sql = "SELECT * FROM _produk WHERE _kode_produk='".$produkID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_stok_produk'];
    return $data;
}

function getItemByID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice_detail where _id_invoice='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    $data = "";
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $listID = $row["_id"];
        $produkID = $row["_id_produk"];
        $data = $data.getProductByProductID($produkID, $database)."<br/>";
    }
}
return $data;
}

function getPurchasedItemByID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice_detail where _id_invoice='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    $data = "";
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $listID = $row["_id"];
        $item_purchased = $row["_item_purchased"];
        $data = $data.$item_purchased."<br/>";
    }
}
return $data;
}

function getTotalInvoiceByID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice_detail where _id_invoice='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    $data = "";
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $listID = $row["_id"];
        $item_purchased = $row["_total_price"];
        $data = $data + $item_purchased;
    }
}
$data = "Rp".number_format($data, 2);
return $data;
}

function getTotalCartByID($userID, $database){
    $sql = "SELECT * FROM _shopping_cart where _id_user='".$userID."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    $data = "";
if($rows > 0){
    while($row = mysql_fetch_assoc($query)){
        $listID = $row["_id_produk"];
        $item_purchased = $row["_item_purchased"] * getProductPriceByProductID($listID, $database);
        $data = $data + $item_purchased;
    }
}
$data = "Rp".number_format($data, 2);
return $data;
}

function getCourierNameByID($courierID, $database){
    $sql = "SELECT * FROM _courier WHERE _id='".$courierID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_courier_name'];
    return $data;
}

function getCourierServicesByID($courierID, $database){
    $sql = "SELECT * FROM _courier WHERE _id='".$courierID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_service_type'];
    return $data;
}



function getCourierServicesCostByID($courierID, $database){
    $sql = "SELECT * FROM _courier WHERE _id='".$courierID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_cost'];
    return $data;
}


function getCourierServiceByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_courier_services'];
    return $data;
}

function getTotalWeightByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_weight'];
    return $data;
}

function getShippingCostByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_invoice_real'] - $row['_invoice_total'];
    return $data;
}

function getCourierServiceCostByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_shipping_cost'];
    return $data;
}

function getShippingAddressByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_shipping_address'];
    return $data;
}

function getFinalPaymentByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_invoice_real'];
    return $data;
}

function getUserNameByID($UserID, $database){
    $sql = "SELECT * FROM _user_detail WHERE _id_user='".$UserID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_name'];
    return $data;
}


function getUserIDByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $user_id = $row['_id_user'];
    $data = getUserNameByID($user_id, $database);
    return $data;
}

function getTelephoneByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $user_id = $row['_id_user'];
    $data = getPhoneUserByUserID($user_id, $database);
    return $data;
}

function getEmailByInvoiceID($InvoiceID, $database){
    $sql = "SELECT * FROM _invoice WHERE _shopping_code='".$InvoiceID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $user_id = $row['_id_user'];
    $data = getEmailUserByUserID($user_id, $database);
    return $data;
}

function generateInvoiceID($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function getOrderCounter($database){
    $data = 0;
    $sql = "SELECT * FROM _invoice WHERE _status='1'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getActivePaymentCounter($database){
    $data = 0;
    $sql = "SELECT * FROM _invoice WHERE _status='2' OR _status='3' OR _status='4'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getActiveShippingCounter($database){
    $data = 0;
    $sql = "SELECT * FROM _shipping WHERE _status='1' OR _status='2' OR _status='3' OR _status='4'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getProductOutOfStockCounter($database){
    $data = 0;
    $sql = "SELECT * FROM _produk WHERE _stok_produk='0'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getComplaintCounter($database){
    $data = 0;
    $sql = "SELECT * FROM _complaint WHERE _status='0'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getUserCounter($database){
    $data = 0;
    $sql = "SELECT * FROM _user";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
        if($rows > 0){
            while($row = mysql_fetch_assoc($query)){
                $data++;
          }
        }
    return $data;
}

function getShippingStatusByShippingID($shippingID, $database){
    $sql = "SELECT * FROM _shipping WHERE _id='".$shippingID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_status'];
    return $data;
}

function getShopingIDByShippingID($shippingID, $database){
    $sql = "SELECT * FROM _shipping WHERE _id='".$shippingID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_shopping_code'];
    return $data;
}

function getProductCodeByProductID($productID, $database){
    $sql = "SELECT * FROM _produk WHERE _id='".$productID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_kode_produk'];
    return $data;
}

function getOptionForItem($IDProduk, $database){
    $sql = "SELECT * FROM _produk where _id='".$IDProduk."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_stok_produk'];
    
    $optionable = "";
    for($i=1; $i<=$data; $i++){
        if($i<11){
         $optionable = $optionable."<option value=".$i.">".$i."</option>";   
        }
        else{
            $i=$data;
        }
    }
    
    return $optionable;
}

function getOptionCategoriesForProduk($database){
    $sql = "SELECT * FROM _category";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    $syndicate = "";
    if($rows > 0){
        while($row = mysql_fetch_assoc($query)){
            
            $category = $row["_category"];
            
            $syndicate = $syndicate."<option value='".$category."'>".$category."</option>";
    }    
    }
    else{
        $syndicate = $syndicate."<option value='empty'>Tidak ada Data</option>";
    }
    
    return $syndicate;
}


function getOptionCourierForShipping($shippingAddress, $database){
    $sql = "SELECT * FROM _courier where _description='".$shippingAddress."'";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    $syndicate = "";
    if($rows > 0){
        while($row = mysql_fetch_assoc($query)){
            $idCourier = $row["_id"];
            $courierName = $row["_courier_name"];
            $courierService = $row["_service_type"];
            $courierServicePrice = "Rp".number_format($row["_cost"], 2);
            
            $dataCourier = $courierName." - ".$courierService." (".$courierServicePrice.")";
            
            $syndicate = $syndicate."<option value='".$idCourier."'>".$dataCourier."</option>";
    }    
    }
    else{
        $syndicate = $syndicate."<option value='empty'>Tidak ada Data</option>";
    }
    
    return $syndicate;
}

function getOptionCategoriesForMenu($database){
    $sql = "SELECT * FROM _category";
    $query = mysql($database, $sql);
    $rows = mysql_num_rows($query);
    $syndicate = '<li><a class="btn btn-default active" href="#" data-filter="*">Semua Produk</a></li>';
    if($rows > 0){
        while($row = mysql_fetch_assoc($query)){
            
            $category = str_replace(' ', '', $row["_category"]);
            $categoryView = $row["_category"];
            $syndicate = $syndicate.'<li><a class="btn btn-default" href="#" data-filter=".'.$category.'">'.$categoryView.'</a></li>';
    }    
    }
    
    return $syndicate;
}


function getTentang1($database){
    $sql = "SELECT * FROM _site_configuration WHERE _id='1'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_tentang_1'];
    return $data;
}

function getBudaya1($database){
    $sql = "SELECT * FROM _site_configuration WHERE _id='1'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_budaya_1'];
    return $data;
}

function getQuoteTentang2($database){
    $sql = "SELECT * FROM _site_configuration WHERE _id='1'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_quote_tentang_2'];
    return $data;
}

function getTentang2($database){
    $sql = "SELECT * FROM _site_configuration WHERE _id='1'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_tentang_2'];
    return $data;
}

function getKeunggulan($database){
    $sql = "SELECT * FROM _site_configuration WHERE _id='1'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_keunggulan'];
    return $data;
}

function getCategoryByCategoryID($categoryID, $database){
    $sql = "SELECT * FROM _category WHERE _id='".$categoryID."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_category'];
    return $data;
}

function getPropinsiByProvinceID($database, $id){
    $sql = "SELECT * FROM provinces WHERE id='".$id."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['name'];
    return $data;
}

function getKabupatenByKabupatenID($database, $id){
    $sql = "SELECT * FROM regencies WHERE id='".$id."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['name'];
    return $data;
}

function getKecamatanByKecamatanID($database, $id){
    $sql = "SELECT * FROM districts WHERE id='".$id."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['name'];
    return $data;
}

function getDesaByDesaID($database, $id){
    $sql = "SELECT * FROM villages WHERE id='".$id."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['name'];
    return $data;
}

function getUserIDByUserName($Username, $database){
    $sql = "SELECT * FROM _user WHERE _umask='".$Username."'";
    $query = mysql($database, $sql);
    $row = mysql_fetch_array($query);
    $data = $row['_id_user'];
    return $data;
}