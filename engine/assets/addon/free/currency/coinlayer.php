<?php
$access_key = 'aed5f6f1b7eda86a6c15bf863693bbff';
 
$ch = curl_init('http://api.coinlayer.com/live?access_key='.$access_key);
$ch = curl_init('http://api.coinlayer.com/live?access_key='.$access_key.'&target=USD');
$ch = curl_init('http://api.coinlayer.com/live?access_key='.$access_key.'&symbols=BTC,LTC');
$ch = curl_init('http://api.coinlayer.com/2018-07-24?access_key='.$access_key);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
$json = curl_exec($ch);
curl_close($ch);
 
$arr_result = json_decode($json, true);
 
sMsg($c,$arr_result,$menu);

?>