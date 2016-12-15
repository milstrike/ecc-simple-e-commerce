<?php

if($_SESSION["userType"] != "4dm1nm0d3"){
    $location=$site_base;
    header("location:".$location);
}

