<?php
	
if ($bot['master'] == $c){

if ($bot['switcher'] == '1'){$ttl = '🅱️ЫКЛЮЧИТЬ ';$cb = 'BTNOFF';$txt='БОТ ✅ ЗАПУЩЕН';} else {$ttl = 'ВКЛЮЧИТЬ❇️';$cb='BTNONN';$txt='БОТ ⛔️ ВЫКЛЮЧЕН';}
$BTN = array ("text" => $ttl, "callback_data" => $cb);
$menu = json_encode(array("inline_keyboard" => [[$BTN]]));}
sMsg($c,$txt,$menu);

if ($type == 'L'){
sMsg($c,'НАСТРОЙКИ СПОСОБОВ ПРИЕМА СРЕДСТВ',$menu);
sMsg($c,'НАСТРОЙКИ ДОСТУПНЫХ СПОСОБОВ ВЫВОДА',$menu);}
	
?>