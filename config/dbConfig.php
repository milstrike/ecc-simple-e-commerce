<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$servername = "localhost";
$username = "root";
$password = "";
$database = "ecc";

// Create connection
$conn = mysql_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}