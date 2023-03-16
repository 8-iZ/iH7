<?php
	
switch ($message) {
case '🔘 CONTROL PANEL':
case '⚫️ CONTROL PANEL':
case 'добавить'.PHP_EOL.'товар':
case 'товары':
case 'продажи':
case 'курьеры':
	$DBwrk = mysqli_query ($q, "SELECT user FROM workers WHERE bot = '$botID'");
for ($set = array (); $row = $DBwrk->fetch_assoc(); $set[] = $row['id']);
	$count = count($set);
	if($count === 0){$c=$bot['master'];}
	break;
case '⛔️ НEТ, и больше не спрашивать':
case '⛔️ НEТ':
case '✅ ДA':
list($tObj,$tPrm) = explode ('=', $user['temp']);
	$m = $tObj;
	break;
case '❌ KEYBOARD ⌨️ BLOCKED ❌ '.PHP_EOL.'ᴛʀʏ ᴀɢᴀɪɴ ʟᴀᴛᴇʀ ᴘʟᴇᴀsᴇ':
case '❗️ВАЖНОЕ ОПОВЕЩЕНИЕ❗️':
case '☣️ DEALERS':
case '💲•💲•💲':
case 'CHANGERS 💹':
case 'ℹ️ info':
case '🆘 help':
case '🎮 play':
case '🌐 site':
case '📧 mail':
	$m = 'KBM';
	break;}
	
?>