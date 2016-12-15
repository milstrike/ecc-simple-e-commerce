<?php

if($_SESSION["userType"] != "cu5t0m312"){
    $location=$site_base;
    header("location:".$location);
}

