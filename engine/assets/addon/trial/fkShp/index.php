<?php 

if(!empty($data)){
$m = substr($data, 0, 3);
$d = substr($data, -3);
$mID = $message_id_in;
$c=$chat_id_in;}
else {
$m = $message;
$mID = $message_id;
$c=$chat_id;}

$DBbot = mysqli_query ($q, "SELECT * FROM bots WHERE id = '$botID'");
$bot = mysqli_fetch_assoc ($DBbot);
//$type = $bot[type];
$type = 'F';
$alert = $bot['alert'];

$RFSBTN = array ("text" => "❌ oтменить заказ ❌", "callback_data" => "ORDNUL");
$PAYBTN = array ("text" => "💰 ПРОВЕРИТЬ ОПЛАТУ 💰", "callback_data" => "ORDPAY");

$mM[] = array('НОВАЯ ПОКУПКА');
$mM[] = array('профиль','правила','контакты');
$yM[] = array('✅ ДA','⛔️ НEТ');
if (!empty ($alert)){
$GM[] = array('❗️ВАЖНОЕ ОПОВЕЩЕНИЕ❗️');}
$GM[] = array('☣️ DEALERS','💲•💲•💲','CHANGERS 💹');
$GM[] = array('ℹ️ info','🆘 help','🎮 play','🌐 site','📧 mail');
$BMK[] = array('❌ KEYBOARD ⌨️ BLOCKED ❌ '.PHP_EOL.'ᴛʀʏ ᴀɢᴀɪɴ ʟᴀᴛᴇʀ ᴘʟᴇᴀsᴇ');

$BanM = json_encode(array(
	'resize_keyboard' => false,
	'one_time_keyboard' => false,
	'keyboard' => $BMK));
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $mM));
$DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
if (mysqli_num_rows ($DBuser) == 0) {
	$res = strpos($m, '/start');
	if ($res === 0){
$log = $time.'-start-'.$botID;
mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log) VALUES ('$c','$first_name','$last_name','$u','1','0.00','0','$botID','RU','$log')"); 
$DBuser = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$user = mysqli_fetch_assoc ($DBuser);} 
else {
$log = $time.'-ban-'.$botID;
mysqli_query ($q, "INSERT INTO users (id,first_name,last_name,nick,status,balance,ratio,bot,lang,log,ban) VALUES ('$c','$fn','$ln','$u','0','0.00','0','$botID','RU','$log',1)");
include ('../../../library/error/local.lib');
sMsg($c, $E604, $BanM);
exit;}}
else {
$user = mysqli_fetch_assoc ($DBuser);
if ($user['ban']===1){sMsg($c, 'You was banned and can not use this bot and others provided by our service platform. You should contact the support service or you can try later', $BanM); exit;}
}

$HIUTXT = 'Приветствую, '.$first_name	.' '.$last_name.PHP_EOL.PHP_EOL.'Добро пожаловать в магазин "'.$title.'"'.PHP_EOL.'➖➖➖➖➖➖➖➖➖'.PHP_EOL.'❗️Совершая покупки в боте ты автоматически соглашаешься с нашими правилами❗️';
$MYPTXT = 'Пользователь: '.$first_name	.' '.$last_name.PHP_EOL.'ID: '.$user_id.PHP_EOL.PHP_EOL.'Доступный баланс:'.PHP_EOL.'💰 '.$user['balance'].'$';
$RFSTXT = '❓ Вы точно уверены, что хотите отменить заказ ❓'.PHP_EOL.'❗ При отмене заказа бот заблокирует возможность заказа на 1 минуту ❗'.PHP_EOL.PHP_EOL.'❌ После третьего отказа подряд бот заблокирует вас навсегда ❌';
$cS = 'Вы выбрали: "';
$mS = '".'.PHP_EOL.'Выберите желаемый товар из категорий ниже:';
$sS = '".'.PHP_EOL.'Выберите наиболее удобный вам район из предложенных ниже:';
$wS = '".'.PHP_EOL.'Выберите фасовку из категорий ниже:';

	switch ($message) {
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

if ($c > 0) {

switch ($m) {
   case '/start':
sMsg($c, $HIUTXT, $menu);
	case 'НОВАЯ ПОКУПКА':
$DBcity = mysqli_query ($q, "SELECT DISTINCT city FROM merches WHERE seller = '$type'");
if (mysqli_num_rows ($DBcity) == 0) {
	sMsg($c, 'Бот пуст, попробуй позже', $menu); } 
elseif (empty ($user['city']) OR $user['city'] == 'NULL'){
	for ($set = array (); $row = $DBcity->fetch_assoc(); $set[] = $row['city']);
	$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
switch ($tc) {   
	case '3':
$city3 = $set[2];
$DBct = mysqli_query ($q, "SELECT * FROM places WHERE city = '$city3'");
	$ct = mysqli_fetch_assoc($DBct);
		$short = $ct['name'];
$DBcb = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
	$cb = mysqli_fetch_assoc($DBcb);
		$tx = $cb['title'];
		$cb = $cb['callback'];
$button3 = array ("text" => $tx, "callback_data" => $cb);
	case '2':
$city2 = $set[1];
$DBct = mysqli_query ($q, "SELECT * FROM places WHERE city = '$city2'");
	$ct = mysqli_fetch_assoc($DBct);
		$short = $ct['name'];
$DBcb = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
	$cb = mysqli_fetch_assoc($DBcb);
		$tx = $cb['title'];
		$cb = $cb['callback'];
$button2 = array ("text" => $tx, "callback_data" => $cb);
	case '1':
$city1 = $set[0];
$DBct = mysqli_query ($q, "SELECT * FROM places WHERE city = '$city1'");
	$ct = mysqli_fetch_assoc($DBct);
		$short = $ct['name'];
$DBcb = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
	$cb = mysqli_fetch_assoc($DBcb);
		$tx = $cb['title'];
		$cb = $cb['callback'];
$button1 = array ("text" => $tx, "callback_data" => $cb);
	break;}
if ($count === 1){$btn = [[$button1]];}
elseif ($count === 2){$btn = [[$button1,$button2]];}
elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
	$menu = json_encode(array ("inline_keyboard" => $btn));
sMsg($c, 'Выберите свой город в меню ниже:', $menu);
} else {
$city = $user['city'];
	$DBcity = mysqli_query ($q, "SELECT DISTINCT name FROM merches WHERE seller = '$type' AND city = '$city'");
		if (mysqli_num_rows ($DBcity) == 0) {
sMsg($c, 'Бот пуст, попробуй позже', $menu);
		} else {
for ($set = array (); $row = $DBcity->fetch_assoc(); $set[] = $row['name']);
	$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
switch ($tc) {   
case '4':
$mrcN4 = $set[3];
$mrc4 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN4'");$mrc = mysqli_fetch_assoc($mrc4);$callback = $mrc['callback'];$button4 = array ("text" => $mrcN4, "callback_data" => $callback);	
	case '3':
$mrcN3 = $set[2];
$mrc3 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN3'");$mrc = mysqli_fetch_assoc($mrc3);$callback = $mrc['callback'];$button3 = array ("text" => $mrcN3, "callback_data" => $callback);	
	case '2':$mrcN2 = $set[1];$mrc2 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN2'");$mrc = mysqli_fetch_assoc($mrc2);$callback = $mrc['callback'];$button2 = array ("text" => $mrcN2, "callback_data" => $callback);	
	case '1':$mrcN1 = $set[0];$mrc1 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN1'");$mrc = mysqli_fetch_assoc($mrc1);$callback = $mrc['callback'];$button1 = array ("text" => $mrcN1, "callback_data" => $callback);break;}
	
if ($count === 1){$btn = [[$button1]];}
elseif ($count === 2){$btn = [[$button1,$button2]];}
elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
elseif ($count === 4){$btn = [[$button1,$button2],[$button3,$button4]];}
$menu = json_encode(array("inline_keyboard" => $btn));

sMsg($c, 'Вы ранее сохранили город: "'.$oras.$mS, $menu);}}
	break;
	case 'ORS':
if (!empty ($data)){
	$result = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
	$ors = mysqli_fetch_assoc($result);
	$oras = $ors['title'];
	$short = $ors['short'];
	$yM[] = array('⛔️ НEТ, и больше не спрашивать');
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => true,
	'keyboard' => $yM));
	sMsg($c, $cS.$oras.'"'.PHP_EOL.'Желаете ли вы сохранить этот город и в дальнейшем пропускать этот шаг в процессе покупки?', $menu);
	$temp = 'ORS='.$short;
	mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
} else {
$citDB = mysqli_query($q, "SELECT * FROM places WHERE name = '$tPrm'");
	$city = mysqli_fetch_assoc($citDB);
	$city = $city['city'];
$orsDB = mysqli_query($q, "SELECT * FROM callbacks WHERE short = '$tPrm'");
	$oras = mysqli_fetch_assoc($orsDB);
	$oras = $oras['title'];
if ($message == '✅ ДA'){
	mysqli_query($q, "UPDATE users SET city = '$city', temp = '' WHERE id = '$c'"); }
elseif ($message == '⛔️ НEТ, и больше не спрашивать'){
	mysqli_query($q, "UPDATE users SET city = 'NULL', temp = '' WHERE id = '$c'");}
elseif ($message == '⛔️ НEТ'){ 
	mysqli_query($q, "UPDATE users SET temp = '' WHERE id = '$c'");}
	$result = mysqli_query ($q, "SELECT DISTINCT name FROM merches WHERE seller = '$type' AND city = '$city'");
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['name']);
$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
switch ($tc) {   case '3':$mrcN3 = $set[2];$mrc3 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN3'");$mrc = mysqli_fetch_assoc($mrc3);$callback = $mrc['callback'];$button3 = array ("text" => $mrcN3, "callback_data" => $callback);	case '2':$mrcN2 = $set[1];$mrc2 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN2'");$mrc = mysqli_fetch_assoc($mrc2);$callback = $mrc['callback'];$button2 = array ("text" => $mrcN2, "callback_data" => $callback);	case '1':$mrcN1 = $set[0];$mrc1 = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$mrcN1'");$mrc = mysqli_fetch_assoc($mrc1);$callback = $mrc['callback'];$button1 = array ("text" => $mrcN1, "callback_data" => $callback);break;}
if ($count === 1){$btn = [[$button1]];}elseif ($count === 2){$btn = [[$button1,$button2]];}elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
$menu = json_encode(array("inline_keyboard" => $btn));
sMsg($c, $cS.$oras.$mS, $menu);}
      break;
   case 'SEL':
$mrcDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
	$cb = mysqli_fetch_assoc($mrcDB);
	$name = $cb['title'];
$result = mysqli_query ($q, "SELECT DISTINCT sector FROM merches WHERE seller = '$type' AND city = '37301' AND name = '$name'");
		for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['sector']);
$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
elseif($count === 4){$tc='4';}
elseif($count === 5){$tc='5';}
switch ($tc) {   case '5': $sec5 = $set[4];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec5'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button5 = array ("text" => $title, "callback_data" => $callback);	
case '4': $sec4 = $set[3];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec4'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button4 = array ("text" => $title, "callback_data" => $callback);	
case '3': $sec3 = $set[2];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec3'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button3 = array ("text" => $title, "callback_data" => $callback);	
case '2': $sec2 = $set[1];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec2'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button2 = array ("text" => $title, "callback_data" => $callback);	
case '1': $sec1 = $set[0];$secDB = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$sec1'");$sec = mysqli_fetch_assoc($secDB);
$sector = $sec['name'];
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$sector'");$cb = mysqli_fetch_assoc($cbDB);
$callback = $cb['callback'];
$title = $cb['title'];
$button1 = array ("text" => $title, "callback_data" => $callback);	
break;}
if ($count === 1){$btn = [[$button1]];}elseif ($count === 2){$btn = [[$button1,$button2]];}elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}elseif ($count === 4){$btn = [[$button1,$button2],[$button3,$button4]];}elseif ($count === 5){$btn = [[$button1],[$button2,$button3],[$button4,$button5]];}
$menu = json_encode(array("inline_keyboard" => $btn));
sMsg($c, $cS.$name.$sS, $menu);
$temp = $botID.'='.$name;
mysqli_query
($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");
break;
      case 'SEC':
$usDB = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$us = mysqli_fetch_assoc($usDB);
$temp = $us['temp'];
list($tBot,$tMrc) = explode ('=', $temp);
if (empty($temp) OR $tBot !== $botID){
sMsg($c, 'Данная сессия истекла. Начните новую покупку.', $menu);
} else {
$scDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
$sc = mysqli_fetch_assoc($scDB);
$sector = $sc['title'];
$sct = $sc['short'];
$secDB = mysqli_query ($q, "SELECT * FROM places WHERE name = '$sct'");
$sec = mysqli_fetch_assoc($secDB);
$sect = $sec['sector'];
$temp = $temp.'&'.$sect;
$result = mysqli_query ($q, "SELECT DISTINCT complectation FROM merches WHERE name = '$tMrc' AND seller = '$type' AND sector = '$sect'");
for ($set = array (); $row = $result->fetch_assoc(); $set[] = $row['complectation']);
$count = count($set);
if($count === 1){$tc='1';}
elseif($count === 2){$tc='2';}
elseif($count === 3){$tc='3';}
switch ($tc) {   
case '3':
$wN3 = $set[2];
$mrc3 = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND complectation = '$wN3' LIMIT 1");
$mrc = mysqli_fetch_assoc($mrc3);
$price3 = $mrc['price'];
$flag3 = $wN3.'г => '.$price3.'$';
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$wN3'");
$cb3 = mysqli_fetch_assoc($cbDB);
$callback3 = $cb3['callback'];
$button3 = array ("text" => $flag3, "callback_data" => $callback3);	
case '2':
$wN2 = $set[1];
$mrc2 = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND complectation = '$wN2' LIMIT 1");
$mrc = mysqli_fetch_assoc($mrc2);$price2 = $mrc['price'];
$flag2 = $wN2.'г => '.$price2.'$';
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$wN2'");
$cb2 = mysqli_fetch_assoc($cbDB);
$callback2 = $cb2['callback'];
$button2 = array ("text" => $flag2, "callback_data" => $callback2);
case '1':
$wN1 = $set[0];
$mrc1 = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND complectation = '$wN1' LIMIT 1");
$mrc = mysqli_fetch_assoc($mrc1);$price1 = $mrc['price'];
$flag1 = $wN1.'г => '.$price1.'$';
$cbDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE title = '$wN1'");
$cb1 = mysqli_fetch_assoc($cbDB);
$callback1 = $cb1['callback'];
$button1 = array ("text" => $flag1, "callback_data" => $callback1);
break;}
if ($count === 1){$btn = [[$button1]];}
elseif ($count === 2){$btn = [[$button1,$button2]];}
elseif ($count === 3){$btn = [[$button1],[$button2,$button3]];}
elseif ($count === 4){$btn = [[$button1,$button2],[$button3,$button4]];}
elseif ($count === 5){$btn = [[$button1],[$button2,$button3],[$button4,$button5]];}
$menu = json_encode(array("inline_keyboard" => $btn));
sMsg($c, $cS.$sector.$wS, $menu);
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");}
      break;
case 'FAS':
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
break;
      case 'PAY':
         if ($d == 'LTC') {
include ('../../../config/payment/litecoin.php');}
$usDB = mysqli_query ($q, "SELECT * FROM users WHERE id = '$c'");
$us = mysqli_fetch_assoc($usDB);
list($tBot,$tMrcAll) = explode ('=', $us['temp']);
list($tMrc,$tSec,$tFas) = explode ('&', $tMrcAll);
if (empty($us['temp']) OR $tBot !== $botID){
sMsg($c, 'Данная сессия истекла. Начните новую покупку.', $menu);
} else {
$bcb = 'FAS'.$tFas;
$fasDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$bcb'");
$fs = mysqli_fetch_assoc($fasDB);
$fas = $fs['title'];
$mrcDB = mysqli_query ($q, "SELECT DISTINCT * FROM merches WHERE name = '$tMrc' AND seller  = '$type' AND sector = '$tSec' AND complectation = '$fas' LIMIT 1");$mrc = mysqli_fetch_assoc($mrcDB);
$order = $mrc['id'];
$pr = $mrc['price'];
$price = round($pr / $cur, 5);
$temp = $us['temp'].'&'.$d;
$sec = mysqli_query ($q, "SELECT * FROM places WHERE sector = '$tSec'");
$secSht = mysqli_fetch_assoc($sec);
$short = $secSht['name'];
$sec = mysqli_query ($q, "SELECT * FROM callbacks WHERE short = '$short'");
$sector = mysqli_fetch_assoc($sec);
$pmDB = mysqli_query ($q, "SELECT * FROM callbacks WHERE callback = '$data'");
$pm = mysqli_fetch_assoc($pmDB);

sMsg($c, $cS.$tMrc.'"'.PHP_EOL.'Фасовка: "'.$fas.'г"'.PHP_EOL.'Район: "'.$sector['title'].'"'.PHP_EOL.'Выбранный метод оплаты: "'.$pm['title'].'"'.PHP_EOL.PHP_EOL.'Для завершения покупки оплатите сумму:', $menu);
sMsg($c, $price, $menu);
sMsg($c, 'на следующий '.$pm['title'].' кошелек:', $menu);
sMsg($c, $ltc, $menu);
$menu = json_encode(array("inline_keyboard" => [[$PAYBTN],[$RFSBTN]]));
sMsg($c, 'После оплаты нажмите кнопку "ПРОВЕРИТЬ ОПЛАТУ"', $menu);
mysqli_query
($q, "UPDATE users SET temp = '' WHERE id = '$c'");
mysqli_query
($q, "UPDATE merches SET status = '7', sold = NOW() WHERE id = '$order'");
mysqli_query
($q, "INSERT INTO orders (user,bot,merch,status) VALUES ('$c','$botID','$order','1')");}
      break;
   case 'ORD':
if (str_contains ($message, 'ДA')){
$result = mysqli_query ($q, "SELECT merch FROM orders WHERE bot = '$botID' AND user = '$c'");
	 $mrc = mysqli_fetch_assoc($result);
	$mrc = $mrc['merch'];
	mysqli_query
($q, "UPDATE orders SET status = '0' WHERE merch = '$mrc'");
mysqli_query
($q, "UPDATE merches SET status = '8' WHERE id = '$mrc'");
mysqli_query
($q, "UPDATE users SET temp = '' WHERE id = '$c'");
	sMsg($c, 'Ваш заказ успешно отменен', $menu);}
elseif (str_contains ($message, 'HET')){ 
	dMsg($c, $message_id);
	dMsg($c, $tPrm); 
	mysqli_query
($q, "UPDATE users SET temp = '' WHERE id = '$c'");
} else {
if ($d == 'NUL') {
$text = $REFTXT;
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => true,
	'keyboard' => $yM));
	} else {
	$text = 'Оплата не обнаружена. Попробуйте снова через пару минут.';
	$menu = json_encode(array("inline_keyboard" => [[$PAYBTN],[$RFSBTN]]));}
      sMsg($c, $text, $menu);
$temp = 'ORD='.$message_id_in;
mysqli_query($q, "UPDATE users SET temp = '$temp' WHERE id = '$c'");}
      break;
case 'профиль':
sMsg($c, $MYPTXT, $menu);break;
case 'правила':
$URLBTN = array ("text" => "ПОЛЬЗОВАТЕЛЬСКОЕ СОГЛАШЕНИЕ", "url" => "HTTPS://T.ME/RCODEX");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'Внимательно ознакомьтесь с содержанием регламента магазина перед покупкой. Помните что магазин не несет ответственности за проблемы возникшие в связи с незнанием правил. Совершая покупку вы автоматически подтверждаете, что ознакомились с текстом данного документа:', $M);break;
case '/curs':
$tick = file_get_contents('https://api.coinmarketcap.com/v1/ticker/?limit=19');
$data = json_decode($tick, TRUE);

$bit = $data[0]["price_usd"];
$ethereum = $data[1]["price_usd"];
$litecoin = $data[5]["price_usd"];
$dogecoin = $data[18]["price_usd"];
sMsg($c,$litecoin,$menu);
break;
case 'контакты':
	
	default:
	sMsg($c, 'Команда недоступна на данный момент. Пожалуйста, попробуйте позже', $menu);
	break;}
	
} else {

switch ($m) {
case '/update':
sleep(1);
$menu = json_encode(array(
	'resize_keyboard' => true,
	'one_time_keyboard' => false,
	'keyboard' => $GM));
sMsg($c, 'Привет, чат!', $menu);
sleep(1);
$BTNTTL = '[💲💲💲]'.PHP_EOL.'$HADOW$ERVICE.$ITE';
$URLBTN = array ("text" => $BTNTTL, "url" => "HTTPS://SHADOWSERVICE.SITE");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'Я - бета версия бота-помощника от сервиса:', $M); 
sleep(2);
$URLBTN = array ("text" => "‶𝚒𝚁𝟶𝙽🫀𝙷𝟹𝙰𝚁𝚃 ᘜ″,", "url" => "HTTPS://iH.SHADOWSERVICE.SITE");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'Я создан на движке', $M);
$URLBTN = array ("text" => "🎱𝕚ℤ™︎ 𝙸𝚗𝚌. ᴛᴇᴄʜɴᴏʟᴏɢɪᴇs", "url" => "HTTPS://8iZ.SHADOWSERVICE.SITE");
$M = json_encode(array("inline_keyboard" => [[$URLBTN]]));
sMsg($c, 'разработанном с соблюдением прав пользователей на анонимность и конфиденциальность, официально опубликован в открытом доступе, с открытым исходным кодом, под стандартной лицензией "GNU GENERAL PUBLIC LICENSE"'.PHP_EOL.'Девелопинг и продакшн:', $M);
break;
}}

//include ('../../../kernel/API/kit/extended.php');
function sMsg($c, $text, $menu) {file_get_contents ($GLOBALS['api'] . '/sendMessage?chat_id=' . $c . '&text=' .urlencode($text) . '&reply_markup=' . $menu. '&parse_mode=html&disable_web_page_preview=true'); }
//functionsaCbQ($callback_query_id, $text, $show_alert) {file_get_contents($GLOBALS['api'] . '/answerCallbackQuery?callback_query_id=' . $callback_query_id . '&text=' .urlencode($text). '&show_alert=' . $show_alert);}function editMessageText($chat_id_in, $message_id_in, $text, $menu) {file_get_contents($GLOBALS['api'] . '/editMessageText?chat_id='.$chat_id_in.'&message_id='.$message_id_in.'&text='.urlencode($text). '&reply_markup=' . $menu. '&parse_mode=html&disable_web_page_preview=true');}
function dMsg($c, $mID) {file_get_contents ($GLOBALS['api'] . '/deleteMessage?chat_id='.$c.'&message_id='.$mID.'');}