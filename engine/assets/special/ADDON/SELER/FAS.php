<?php
	
$fasDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
$fs = mysqli_fetch_assoc($fasDB);
$fas = $fs['title'];
$usDB = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$us = mysqli_fetch_assoc($usDB);
list($tBot,$tMrcAll) = explode ('=', $us['temp']);
list($tMrc,$tSec) = explode ('&', $tMrcAll);
if (empty($us['temp']) OR $tBot !== $botID){
sMsg($c, 'Данная сессия истекла. Начните новую покупку.', $menu);
} else {
$temp = $us['temp'].'&'.$d;
$sec = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$tSec'");
$secSht = mysqli_fetch_assoc($sec);
$short = $secSht['name'];
$sec = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
$sector = mysqli_fetch_assoc($sec);
$LTCBTN = array ("text" => 'Litecoin [LTC]', "callback_data" => "PAYLTC");
$menu = json_encode(array("inline_keyboard" => [[$LTCBTN]]));
sMsg($c, $cS.$tMrc.'"'.PHP_EOL.'Фасовка: "'.$fas.'г"'.PHP_EOL.'Район: "'.$sector['title'].'"'.PHP_EOL.PHP_EOL.'Осталось выбрать подходящий вам способ оплаты:', $menu);
mysqli_query
($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");}
	
?>