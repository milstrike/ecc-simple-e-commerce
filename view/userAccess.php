<?php

$userAccess = "";

if($_SESSION["userID"] == ""){
    $userAccess = '<li role="presentation"><a href="#" data-toggle="modal" data-target="#modalLogin">User Login</a></li>';
}
else{
    $userAccess = '<li role="presentation">
                                                                        <a href="#" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                                                                <li style="margin: 5px;"><a href="'.$site_base.'/apps/dashboard/" style="text-decoration: none;"><h4><i class="fa fa-dashboard"></i>&nbsp;Dashboard</li>
                                                                                <li style="margin: 5px;"><a href="'.$site_base.'/apps/shoppingCart/" style="text-decoration: none;"><h4><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;<span class="label label-danger">'.getShoppingCartCounterByUserID($_SESSION["userID"], $database).'</span></h4></a></li>
                                                                                <li style="margin: 5px;"><a href="'.$site_base.'/apps/mailBox/" style="text-decoration: none;"><h4><i class="fa fa-envelope"></i>&nbsp;&nbsp;<span class="label label-danger">'.getMailCounterByUserID($_SESSION["userID"], $database).'</span></h4></a></li>
                                                                                <li style="margin: 5px;"><a href="'.$site_base.'/apps/invoiceAndBilling/" style="text-decoration: none;"><h4><i class="fa fa-barcode"></i>&nbsp;&nbsp;<span class="label label-danger">'.getInvoiceCounterByUserID($_SESSION["userID"], $database).'</span></h4></a></li>
                                                                                <li style="margin: 5px;"><a href="'.$site_base.'/apps/shipping/" style="text-decoration: none;"><h4><i class="fa fa-truck"></i>&nbsp;&nbsp;<span class="label label-danger">'.getShippingCounterByUserID($_SESSION["userID"], $database).'</span></h4></a></li>
                                                                                <li style="margin: 5px;"><a href="'.$site_base.'/apps/signOut" style="text-decoration: none;"><h4><i class="fa fa-lock"></i>&nbsp;&nbsp;Log Out</h4></a></li>
                                                                            </ul>
                                                                </li>';
}

