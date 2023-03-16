<?php
$url = 'https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '5000',
  'convert' => 'USD'
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: 66694e7b-10cf-4f02-bc42-567f4af1dbf3'
];
$qs = http_build_query($parameters); 
$request = "{$url}?{$qs}";

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,
  CURLOPT_HTTPHEADER => $headers, 
  CURLOPT_RETURNTRANSFER => 1     
));

$response = curl_exec($curl);
$curs = (json_decode($response)); 
curl_close($curl); 
?>