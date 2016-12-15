<?php

$origin = $_GET["origin"];
$destination = $_GET["destination"];
$weight = $_GET["mass"];
$courier = $_GET["courier"];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$destination."&weight=".$weight."&courier=".$courier."",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: 49244e61b2cb81fe2c8400b9f51b5af2"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}