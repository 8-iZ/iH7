<?php
$orderId = $query_id + $chat_id_in;
$h1 = 'Добро пожаловать в магазин "'.$title.'"'.PHP_EOL.'➖➖➖➖➖➖➖➖➖'.PHP_EOL.'❗️Совершая покупки в боте ты автоматически соглашаешься с нашими правилами❗️';
$H = 'Приветствую, '.$first_name	.' '.$last_name.PHP_EOL.'Твой ID: '.$user_id.PHP_EOL.PHP_EOL.'Доступный баланс:'.PHP_EOL.'💰 0.00 Bitcoin ~0$'.PHP_EOL.'💰 0.0 Litecoin ~0$';

$cS = 'Вы выбрали: "';
$wS = '".'.PHP_EOL.'Выберите фасовку из категорий ниже:';
$pay1S = 'Ваш баланс 0.0 LTC'.PHP_EOL.PHP_EOL.'Код заказа: '.$orderId.PHP_EOL.PHP_EOL.'Переведите LTC на адрес: '.$ltc.PHP_EOL.'Cумма: ';
$pay2S = 'LTC'.PHP_EOL.PHP_EOL.'Чтобы получить кошелек отдельным сообщением нажмите 👉 /ltc'.PHP_EOL.'Как деньги зачислятся на счёт, нажмите'.PHP_EOL.'"💰 Оплатить 💰"';
$pay3S = 'LTC'.PHP_EOL.PHP_EOL.'Чтобы получить кошелек отдельным сообщением нажмите 👉 /myadress'.PHP_EOL.'Как деньги зачислятся на счёт, нажмите'.PHP_EOL.'"💰 Оплатить 💰"';
$BtkS = 'БОТАНИКА';
$RwkS = 'РЫШКАНОВКА';
$CntS = 'ЦЕНТР';
$BcnS = 'БУЮКАНЫ';
$CekS = 'ЧЕКАНЫ';
$TcrS = 'ТЕЛЕЦЕНТР';
$SklS = 'СКУЛЯНКА';
$PsvS = 'СТАРАЯ ПОЧТА';
$RCntBtn = array ("text" => $CntS, "callback_data" => "CCCN");
$RBtkBtn = array ("text" => $BtkS, "callback_data" => "CCBT");
$RBcnBtn = array ("text" => $BcnS, "callback_data" => "CCBK");
$RTcrBtn = array ("text" => $TcrS, "callback_data" => "CCTC");
$RRwkBtn = array ("text" => $RwkS, "callback_data" => "CCRK");
$SAaBtn = array ("text" => "Alpha-PVP", "callback_data" => "SLAA");
$SEnBtn = array ("text" => "Enzo Gold", "callback_data" => "SLEN");
$SMfBtn = array ("text" => "Mephedrone", "callback_data" => "SLMF");
$SCcBtn = array ("text" => "Cocaine 98%", "callback_data" => "SLCC");
$WEnOsBtn = array ("text" => "0.5гр => 15$", "callback_data" => "SWENOS");
$WEnLoBtn = array ("text" => "1гр => 26$", "callback_data" => "SWENLO");
$rfsBtn = array ("text" => "❌ Отменить заказ ❌", "callback_data" => "null");
$payBtn = array ("text" => "💰 Оплатить LTC 💰", "callback_data" => "PAY");
$okBut = array ("text" => "да, я уверен", "callback_data" => "ban");
$noBut = array ("text" => "нет, вернуться к оплате", "callback_data" => "del");
$KishBut = array ("text" => "КИШИНЕВ", "callback_data" => "Kish");
$OperBut = array ("text" => "Оператор", "url" => "https://t.me/");
$ObmenBut = array ("text" => "Обменники", "callback_data" => "Obmen");
$RulBut = array ("text" => "Правила", "callback_data" => "Rules");
$mainKb = [[$KishBut],[$OperBut],[$ObmenBut,$RulBut]];
$keshKb = [[$SEnBtn],[$SMfBtn]];
$kishKb = [[$SAaBtn],[$SMfBtn]];
$distriktKb = [[$RBtkBtn,$RCntBtn],[$RTcrBtn,$RRwkBtn]];
$vesKb = [[$WEnOsBtn],[$WEnLoBtn]];
$payKb = [[$payBtn]];
$okKb = [[$okBut],[$noBut]];
$arr[] = array('МЕНЮ');
$banarr[] = array('❌ ВЫ ЗАБЛОКИРОВАННЫ ❌');
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $arr ));
$ban = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $banarr ));
	?>