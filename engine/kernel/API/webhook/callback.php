<?php
$queryID = $callback['id']; 
$data = $callback['data'];
$ci = $callback['message']['chat']['id'];
$cfn = $callback['message']['from']['first_name'];
$cln = $callback['message']['from']['last_name'];
$cun = $callback['message']['from']['username'];
$cmID = $callback['message']['message_id'];
$callback_userID = $callback['message']['from']['id'];
$callback_message = $callback['message']['text'];
?>