<?php
	
$RFSBTN = array ("text" => "❌ oтменить заказ ❌", "callback_data" => "ORDNUL");
$PAYBTN = array ("text" => "💰 ПРОВЕРИТЬ ОПЛАТУ 💰", "callback_data" => "ORDPAY");

$mM[] = array('НОВАЯ ПОКУПКА');
$mM[] = array('профиль','правила','контакты');
$CPMK[] = array('🔘 CONTROL PANEL');
$CPMK[] = array('товары','продажи','курьеры');
$yM[] = array('✅ ДA','⛔️ НEТ');
if (!empty ($alert)){
$GM[] = array('❗️ВАЖНОЕ ОПОВЕЩЕНИЕ❗️');}
$GM[] = array('☣️ DEALERS','💲•💲•💲','CHANGERS 💹');
$GM[] = array('ℹ️ info','🆘 help','🎮 play','🌐 site','📧 mail');
$BMK[] = array('❌ KEYBOARD ⌨️ BLOCKED ❌ '.PHP_EOL.'ᴛʀʏ ᴀɢᴀɪɴ ʟᴀᴛᴇʀ ᴘʟᴇᴀsᴇ');
$bkMK[] = array('Я не админ');
$CPoff[] = array('⚫️ CONTROL PANEL');
$CPoff[] = array('НОВАЯ ПОКУПКА');
$CPoff[] = array('профиль','правила','контакты');
$MrcKM[] = array('добавить'.PHP_EOL.'товар','пакетное'.PHP_EOL.'добавление');
$MrcKM[] = array('показать'.PHP_EOL.'все товары','выгрузить'.PHP_EOL.'базу данных','⬅️ Назад');

$EdMK[] = array('↪️ Заново','⏏️ Отмена','⏺ Черновик');
$CPoffM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $CPoff));
$BanM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $BMK));
$CPM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $CPMK));
$EdM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $EdMK));
$bkM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $bkMK));
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $mM));
$MrcM = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $MrcKM));
	
?>