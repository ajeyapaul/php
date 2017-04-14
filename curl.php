<?php

$apiurl="https://api.cloudflare.com/client/v4/zones/";
$json=json_encode($postfield);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiurl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0); 
curl_setopt($ch, CURLOPT_TIMEOUT, 300); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'X-Auth-Key: '.$cloudflare->apikey;
$headers[] = 'X-Auth-Email: '.$cloudflare->username;

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$output = curl_exec($ch);
