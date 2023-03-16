<?php

// MINIMAL SET OF API INPUTS
$output = json_decode(file_get_contents('php://input'), TRUE); 
$chat_id = $output['message']['chat']['id']; 
$message = $output['message']['text'];
$photo = $output['message']['photo'];
$message_id = $output['message']['id'];
$user_id = $output['message']['from']['id'];
$username	= $output['message']['chat']['username'];
$first_name	= $output['message']['chat']['first_name'];
$last_name	= $output['message']['chat']['last_name']; 
$callback_query = $output['callback_query']; 
$data = $callback_query['data']; 
$chat_id_in = $callback_query['message']['chat']['id'];
$message_id_in = $callback_query['message']['message_id'];
$user_id_in = $callback_query['message']['from']['id'];
$chat_id_in = $callback_query['message']['chat']['id']; 
$callback_query_id = $callback_query['data']['id']; 
$message_in = $callback_query['message']['text'];
$query_id = $callback_query['id']; 

?>