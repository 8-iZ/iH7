<?php
$B='APIRONE|5934872067:AAEUnGBZgjBMODUEDG_DYyiiK3ydQ82-LiE';
list($title,$T) = explode('|',$B);
list($botID,$key) = explode(':',$T);
$output = json_decode(file_get_contents('php://input'), TRUE); 
$message = $output['message']['text'];
$C = $output['message']['chat']['id'];
$api = 'https://api.telegram.org/bot'.$T;
$mM[] = array('UPDATE');$FM = json_encode(array('resize_keyboard' => true,'one_time_keyboard' => false,'keyboard' => $mM));$inBtn =  array ("text" => "UPDATE", "callback_data" => "UPDATE");$inKb = json_encode(array("inline_keyboard" => [[$inBtn]]));
switch($m){
case '/start':sMsg($C,'Hello, World!',$inKb);break;
case 'UPDATE':sMsg($C,'Hello, World!',$inKb);break;
default:sMsg($C,'Unknown command',$FM);break;}
switch($mc){
case 'UPDATE':sMsg($ci,'Hi, World!',$FM);break;
default:sMsg($ci,$mc,$FM);break;}
function sMsg($C,$X,$K){SCA($C,'typing');file_get_contents($GLOBALS['api'].'/sendMessage?chat_id='.$C.'&text='.urlencode($X).'&reply_markup='.$K.'&parse_mode=html&disable_web_page_preview=true');}
function SCA($C,$act){file_get_contents($GLOBALS['api'].'/sendChatAction?chat_id='.$C.'&action='.$act);}

?>