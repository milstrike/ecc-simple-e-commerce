<?php

if (isset($_POST["checkInvoice"])) {
    $_SESSION["invoiceID"] = $_POST["shoppingID"];
    header("location:../syndicate{order-payment-management-detail}");
}

